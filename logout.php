<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId'
	);
try {
	$result = $client->LogOut($params);
	echo "ResultCode : ".$result->LogOutResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->LogOutResult->Message."\r\n";	
}  catch(Exception $e) {
	echo $e->getMessage(); 
}
