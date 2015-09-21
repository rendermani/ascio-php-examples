<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'domainHandle' => 'myDomainHandle'
	);
try {
	$result = $client->GetDomain($params);
	echo "ResultCode : ".$result->GetDomainResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetDomainResult->Message."\r\n";
	if ($result->GetDomainResult->ResultCode == '200') {
		echo "DomainName : ".$result->domain->DomainName."\r\n";
		echo "DomainHandle : ".$result->domain->DomainHandle."\r\n";
		echo "DomainExpDate : ".$result->domain->ExpDate."\r\n";
		echo "DomainStatus : ".$result->domain->Status."\r\n";
		echo "Registrant-Handle : ".$result->domain->Registrant->Handle."\r\n";
		echo "Registrant-Name : ".$result->domain->Registrant->Name."\r\n";
		echo "Admin-Handle : ".$result->domain->AdminContact->Handle."\r\n";
		echo "Admin-Name : ".$result->domain->AdminContact->FirstName." ".$result->domain->AdminContact->LastName."\r\n";
		echo "Tech-Handle : ".$result->domain->TechContact->Handle."\r\n";
		echo "Tech-Name : ".$result->domain->TechContact->FirstName." ".$result->domain->TechContact->LastName."\r\n";
		echo "Billing-Handle : ".$result->domain->BillingContact->Handle."\r\n";
		echo "Billing-Name : ".$result->domain->BillingContact->FirstName." ".$result->domain->BillingContact->LastName."\r\n";
		echo "NameServer1 : ".$result->domain->NameServers->NameServer1->HostName."\r\n";
		echo "NameServer2 : ".$result->domain->NameServers->NameServer2->HostName."\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}