<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

$email = "email-to@test.com";

$params = array(
	'sessionId' => '26a92b8671774625811cffba755e4e5c',
	'value' => $email
	);
try {
	$result = $client->GetRegistrantVerificationStatus($params);
	var_dump($result);
	echo "ResultCode : ".$result->GetRegistrantVerificationStatusResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetRegistrantVerificationStatusResult->Message."\r\n";
	} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
