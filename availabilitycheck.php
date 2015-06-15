<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'domains' => array('string' => array('test', 'test1')),
	'tlds' => array('string' => array('com', 'net')),
	'quality' => 'Live'
	);
try {
	$result = $client->AvailabilityCheck($params);
	echo "ResultCode : ".$result->AvailabilityCheckResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->AvailabilityCheckResult->Message."\r\n";
	if ($result->AvailabilityCheckResult->ResultCode == '200') {
		if (isset($result->results->AvailabilityCheckResult)) {
			foreach($result->results->AvailabilityCheckResult as $availCheckResult) {
				if (isset($availCheckResult)) {
					echo "DomainName : ".$availCheckResult->DomainName."\r\n";
					echo "Code : ".$availCheckResult->StatusCode."\r\n";
					echo "Message : ".$availCheckResult->StatusMessage."\r\n";
				}
			}
		}
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
