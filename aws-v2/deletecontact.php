<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'contactHandle' => 'myContactHandle'
	);

try {
	$result = $client->DeleteContact($params);
	echo "ResultCode : ".$result->DeleteContactResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->DeleteContactResult->Message."\r\n";
	if ($result->DeleteContactResult->ResultCode] == '200') {
	echo "Contact has been deleted\r\n";
}catch(Exception $e) {
	echo $e->getMessage(); 
}

?>