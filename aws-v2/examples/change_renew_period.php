<?php
require("../config.php");

$client = new SoapClient($configV2->getWsdl(),array( "trace" => 1 ));
$session = $configV2->getSession();

/* Login */

$params = array('session' => $session );
try{	
	$result = $client->LogIn($params);
	echo "* Login *\n";
	echo 'ResultCode : '.$result->LogInResult->ResultCode."\r\n";
	echo 'ResultMessage : '.$result->LogInResult->Message."\r\n";
	if ($result->LogInResult->ResultCode == '200') {
		echo 'SessionId : ' . $sessionId = $result->sessionId;
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}

$domainName = "example-domain-2266541.com";

/* Domain Details Updat */
echo "* Domain Details Update *\n";	

$order = array(
		'Type' => 'Domain_Details_Update',
		'Comments' => 'Order Test',
		'Domain' => Array(
				'DomainName'    => $domainName,
				'RenewPeriod'     => '2'		
		)
);

$params = array(
		'sessionId' => $sessionId,
		'order' => $order
);
try {
	$result = $client->CreateOrder($params);

	echo "ResultCode : ".$result->CreateOrderResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->CreateOrderResult->Message."\r\n";

	if ($result->CreateOrderResult->ResultCode == '200') {
		echo "OrderId : ".$result->order->OrderId."\r\n";
	}
} catch(Exception $e) {
	echo $e->getMessage();
}
