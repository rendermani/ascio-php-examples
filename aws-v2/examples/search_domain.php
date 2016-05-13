<?php
require("../config.php");

$client = new SoapClient($configV2->getWsdl(),array( "trace" => 1 ));
$session = $configV2->getSession();

/* Login */

$params = array('session' => $session );
try{	
	$result = $client->LogIn($params);
	echo "* Login *\n";
	echo 'ResultCode : '.$result->LogInResult->ResultCode."\r\n";
	echo 'ResultMessage : '.$result->LogInResult->Message."\r\n";
	if ($result->LogInResult->ResultCode == '200') {
		echo 'SessionId : ' . $sessionId = $result->sessionId;
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}

$domainName = "ascio*";

/* Domain Details Updat */
echo "* Search Domain *\n";	

$criteria = array(
	'Withstates' => Array('string' => 'active', 'string' => 'deleted'),
	'Mode' => 'Strict',
	'Clauses' => Array(
		'Clause' => Array('Attribute' => 'DomainName', 'Value' => 'ascio%', 'Operator' => 'Like')
		)
);
$params = array(
	'sessionId' => $sessionId,
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
					echo "Admin-Name : ".$domain->AdminContact->LastName."\r\n";
					echo "Tech-Handle : ".$domain->TechContact->Handle."\r\n";
					echo "Tech-Name : ".$domain->TechContact->LastName."\r\n";
					echo "NameServer1 : ".$domain->NameServers->NameServer1->HostName."\r\n";
					echo "NameServer2 : ".$domain->NameServers->NameServer2->HostName."\r\n";
				}
			}
		}
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}