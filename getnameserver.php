<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'nameServerHandle' => 'MyNameServerHandle'
	);
try {
	$result = $client->GetNameServer($params);
	echo "ResultCode : ".$result->GetNameServerResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetNameServerResult->Message."\r\n";
	if ($result->GetNameServerResult->ResultCode == '200') {
		echo "Handle : ".$result->nameServer->Handle."\r\n";
		echo "HostName : ".$result->nameServer->HostName."\r\n";
		echo "IpAddress : ".$result->nameServer->IpAddress."\r\n";
		echo "Status : ".$result->nameServer->Status."\r\n";
	}	
}
?>