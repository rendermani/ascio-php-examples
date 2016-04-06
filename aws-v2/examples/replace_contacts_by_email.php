<?php
define("ASCIO_WSDL_LIVE","https://aws.ascio.com/2012/01/01/AscioService.wsdl");
define("ASCIO_WSDL_TEST","https://awstest.ascio.com/2012/01/01/AscioService.wsdl");
define("ASCIO_WSDL_IMPERSONATE","../AscioServiceWithImpersonation.wsdl");


class ContactUpdater {
	public $client;
	public $sessionId;
	public $domains = array();
	public $contactTypes = array();
	public $oldEmail;
	public $newHandle;
	private $contacts;
	public function __construct($username,$pw) {
		$client = new SoapClient(ASCIO_WSDL_IMPERSONATE,array( "trace" => 1));
		$session = array(
				'Account'=> $username,
				'Password' =>  $pw
		);
		$result = $client->LogIn(array('session' => $session ));
		$this->client = $client;
		$this->sessionId = $result->sessionId;
	}
	public function setOldEmail($email) {
		$this->oldEmail = $email;
	}
	public function setNewHandle($handleId) {
		$this->newHandle = $handleId;
	}
	public function setContactTypes($types) {
		$this->contactTypes = $types;
	}
	private function searchContacts($email) {
		$criteria= array(
				'Mode' => 'Strict',
				'Clauses' => Array(
						'Clause' => Array(
								'Attribute' => "Email",
								'Operator' => 'Is',
								'Value' => $email
						)
				)
		);
		$searchParameters = array(
				'sessionId' => $this->sessionId,
				'criteria' => $criteria
		);
		$result = $this->client->searchContact($searchParameters);
		$contact = $result->contacts->Contact;
		$results = is_array($contact) ? $contact : array($contact);
		if(count($results) < 1) return [];
		foreach ($results as $key => $contact) {
			$this->contacts[] = $contact->Handle;
		}
		return $results;
	}
	private function searchDomainsByContact($contactType,$handleId) {
		$criteria= array(
				'Mode' => 'Strict',
				'Clauses' => Array(
						'Clause' => Array(
								'Attribute' => $contactType,
								'Operator' => 'Is',
								'Value' => $handleId
						)
				)
		);
		$searchParameters = array(
				'sessionId' => $this->sessionId,
				'criteria' => $criteria
		);
		$result = $this->client->SearchDomain($searchParameters);
		$domains = $result->domains;
		if(!isset($domains->Domain)) return array();
		return is_array($domains->Domain) ? $domains->Domain : array($domains->Domain);
	}
	private function searchDomainsByContactType ($contactType) {
		$contacts = $this->searchContacts($this->oldEmail);
		foreach($contacts as $key => $contact) {
			$domains = $this->searchDomainsByContact($contactType, $contact->Handle);
			foreach ($domains as $key => $domain) {
				$this->domains[$domain->DomainName] = $domain;
				echo " - ".$domain->DomainName."\n";
			}
		}
	}
	public function searchDomains () {
		foreach($this->contactTypes as $key => $contactType) {
			$this->searchDomainsByContactType($contactType);
		}
	}
	public function updateDomains() {
		foreach ($this->domains as $key => $domain) {
			$this->updateDomain($domain);
		}
	}
	private function updateDomain($domain) {
		$updates = array();		
		$updates["DomainName"] = $domain->DomainName;
		foreach($this->contactTypes as $key => $contactType) {
			$propertyName = str_replace("-", "", $contactType);
			$contact = $domain->$propertyName;
			if($contact->Email==$this->oldEmail) {		
				$updates[$propertyName] = array("Handle" => $this->newHandle);				
			} 
		}
		$order = array(
				"sessionId" => $this->sessionId,
				"order"=> array(
					"Type"  	=> "Contact_Update",
					"Domain" 	=> $updates
				)
		);
		$result = $this->client->createOrder($order);
		echo "+ update: ".$domain->DomainName."\n";
	}
	public function deleteContacts() {
		foreach($this->contacts as $key => $contact) {
			$params = array(
				'sessionId' => $this->sessionId,
				'contactHandle' => $contact
			);
			echo "delete: ". $contact . "\n";
			$result = $this->client->DeleteContact($params);
		}
	}
}



$updater = new ContactUpdater("", "");
//impersonate
$header = new SoapHeader('http://www.ascio.com/2007/01','ImpersonationDetails', array('TransactionAccount'=>'RTGI602'), false);
$updater->client->__setSoapHeaders($header);

$updater->setContactTypes(["Admin-Contact","Tech-Contact","Billing-Contact"]);
$updater->setOldEmail("nlw.ordermanagement@autotrader.co.uk");
$updater->setNewHandle("CP72271");
$domains = $updater->searchDomains();
$updater->updateDomains();
echo "deleting\n";
$updater->deleteContacts();
echo "done!\n";
//search domain
//$result = $updater->searchDomain("Admin-Contact", "GL207");





