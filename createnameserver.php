<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$nameserver = array(
	'HostName' => 'myHostName',
	'IpAddress' => 'myIpAddress'
	);
$params = array(
	'sessionId' => 'mySessionId',
	'nameServer' => $nameserver
	);
try{
	$result = $client->CreateNameServer($params);
	echo "ResultCode : ".$result->CreateNameServerResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->CreateNameServerResult->Message."\r\n";
	if ($result->CreateNameServerResult->ResultCode == '200') {
		echo "NameServer Handle : ".$result->nameServer->Handle."\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
