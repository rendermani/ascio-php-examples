<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'MySessionId',
	'registrantHandle' => 'MyRegistrantHandle'
	);
try {
	$result = $client->DeleteRegistrant($params);
	echo "ResultCode : ".$result->DeleteRegistrantResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->DeleteRegistrantResult->Message."\r\n";
	if ($result->DeleteRegistrantResult->ResultCode == '200') {
		echo "Registrant has been deleted\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}