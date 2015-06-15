<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'registrantHandle' => 'myRegistrantHandle'
	);
$result = $client->GetRegistrant($params);
try {
	echo "ResultCode : ".$result->GetRegistrantResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetRegistrantResult->Message."\r\n";
	if ($result->GetRegistrantResult->ResultCode == '200') {
		echo "Status : ".$result->registrant->Status."\r\n";
		echo "Handle : ".$result->registrant->Handle."\r\n";
		echo "Name : ".$result->registrant->Name."\r\n";
		echo "OrgName : ".$result->registrant->OrgName."\r\n";
		echo "Address : ".$result->registrant->Address1."\r\n";
		echo "City : ".$result->registrant->City."\r\n";
		echo "CountryCode : ".$result->registrant->CountryCode."\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>