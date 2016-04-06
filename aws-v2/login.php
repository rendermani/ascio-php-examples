<?php
require("config.php");
$client = new SoapClient($configV2->getWsdl(),array( "trace" => 1 ));
$session = $configV2->getSession();
$params = array('session' => $session );
try{	
	$result = $client->LogIn($params);
	echo "*Login*\n";
	echo 'ResultCode : '.$result->LogInResult->ResultCode."\r\n";
	echo 'ResultMessage : '.$result->LogInResult->Message."\r\n";
	if ($result->LogInResult->ResultCode == '200') {
		echo 'SessionId : ' . $sessionId = $result->sessionId;
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>