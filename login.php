<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$session = array(
	'Account'=>'myusername',
	'Password' => 'mypassword'
	);
$params = array('session' => $session );
try{	
	$result = $client->LogIn($params);
	//echo $client->__getLastRequest();  //see the SOAP request
	//echo $client->__getLastResponse(); //see the SOAP response
	echo 'ResultCode : '.$result->LogInResult->ResultCode."\r\n";
	echo 'ResultMessage : '.$result->LogInResult->Message."\r\n";
	if ($result->LogInResult->ResultCode == '200') {
		echo 'SessionId : ' . $sessionId = $result->sessionId;
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>