<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'msgId' => 'myOrderId'
	);
try {
	$result = $client->AckMessage($params);
	echo "ResultCode : ".$result->AckMessageResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->AckMessageResult->Message."\r\n";	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
