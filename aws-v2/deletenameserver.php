<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'MySessionId',
	'nameServerHandle' => 'MyNameServerHandle'
	);
try {	
	$result = $client->DeleteNameServer($params);
	echo "ResultCode : ".$result->DeleteNameServerResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->DeleteNameServerResult->Message."\r\n";
	if ($result->DeleteNameServerResult->ResultCode == '200') {
		echo "NameServer has been deleted\r\n";
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>