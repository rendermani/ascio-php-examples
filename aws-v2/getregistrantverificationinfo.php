<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

$email = "email-to@test.com";

$params = array(
	'sessionId' => 'sessionId',
	'value' => $email
	);
try {
	$result = $client->GetRegistrantVerificationInfo($params);
	var_dump($result);
	echo "ResultCode : ".$result->GetRegistrantVerificationInfoResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetRegistrantVerificationInfoResult->Message."\r\n";
	} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
