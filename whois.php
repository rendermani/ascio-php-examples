<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ))
$params = array(
	'sessionId' => 'mySessionId',
	'domainName' => 'myDomain.com'
	);
try {
	$result = $client->Whois($params);
	echo "ResultCode : ".$result->WhoisResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->WhoisResult->Message."\r\n";
	if ($result->WhoisResult->ResultCode == '200') {
		$whoisData = $result->whoisData;
		echo "$whoisData\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
