<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

$email = "email-to@test.com";

$params = array(
	'sessionId' => 'f998bdfca54749bb8e097606f169056a',
	'value' => $email
	);
try {
	$result = $client->DoRegistrantVerification($params);
	var_dump($result);
	echo "ResultCode : ".$result->DoRegistrantVerificationResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->DoRegistrantVerificationResult->Message."\r\n";
	} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
