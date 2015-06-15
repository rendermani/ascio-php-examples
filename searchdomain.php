<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$criteria = array(
	'Withstates' => Array('string' => 'active', 'string' => 'deleted'),
	'Mode' => 'Strict',
	'Clauses' => Array(
		'Clause' => Array('Attribute' => 'DomainName', 'Value' => 'ascio%', 'Operator' => 'Like')
		)
);
$params = array(
	'sessionId' => 'mySessionId',
	'criteria' => $criteria
	);
try {
	$result = $client->SearchDomain($params);
	echo "ResultCode : ".$result->SearchDomainResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->SearchDomainResult->Message."\r\n";
	if ($result->SearchDomainResult->ResultCode == '200') {
		if (isset($result->domains->Domain)) {
			foreach($result->domains->Domain as $domain) {
				if (isset($domain)) {
					echo "Domain Name : ".$domain->DomainName."\r\n";
					echo "Domain Handle : ".$domain->DomainHandle."\r\n";
					echo "Domain ExpDate : ".$domain->ExpDate."\r\n";
					echo "Domain Status : ".$domain->Status."\r\n";
					echo "Registrant-Handle : ".$domain->Registrant->Handle."\r\n";
					echo "Registrant-Name : ".$domain->Registrant->Name."\r\n";
					echo "Admin-Handle : ".$domain->AdminContact->Handle."\r\n";
					echo "Admin-Name : ".$domain->AdminContact->Name."\r\n";
					echo "Tech-Handle : ".$domain->TechContact->Handle."\r\n";
					echo "Tech-Name : ".$domain->TechContact->Name."\r\n";
					echo "Billing-Handle : ".$domain->BillingContact->Handle."\r\n";
					echo "Billing-Name : ".$domain->BillingContact->Name."\r\n";
					echo "NameServer1 : ".$domain->NameServers->NameServer1->HostName."\r\n";
					echo "NameServer2 : ".$domain->NameServers->NameServer2->HostName."\r\n";
				}
			}
		}
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
