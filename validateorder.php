<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$order = array(
	'Type' => 'Register_Domain',
	'Domain' => Array(
		'DomainName' => 'myDomainName.com',
		'RegPeriod' => '1',
		'Registrant' => Array('Handle' => 'myRegistrantHandle'),
		'AdminContact' => Array('Handle' => 'myContactHandle'),
		'TechContact' => Array('Handle' => 'myContactHandle'),
		'BillingContact' => Array('Handle' => 'myContactHandle'),
		'NameServers' => Array(
			'NameServer1' => Array('HostName' => 'ns1.ascio.com'),
			'NameServer2' => Array('HostName' => 'ns2.ascio.com')
			)
		)
	);
$params = array(
	'sessionId' => 'mySessionId',
	'order' => $order
	);
try {
	$result = $client->ValidateOrder($params);
	echo "ResultCode : ".$result->ValidateOrderResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->ValidateOrderResult->Message."\r\n";
	if ($result->ValidateOrderResult->ResultCode == '200') {
		echo "Order validated\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
