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

// Register domain

echo "* Register *\n";
$registrant = Array(
		'Name'          => 'John Doe',
		'OrgName'       => 'Ascio',
		'Address1'      => '10 Main Street',
		'Address2'      => '',
		'City'          => 'Munich',
		'State'         => 'Bavaria',
		'PostalCode'    => '808080',
		'CountryCode'   => 'DE',
		'Email'         => 'john.doe@ascio.com',
		'Phone'         => '+49.12341234',
		'Fax'           => '+49.12341234'
		);

$admin = Array(
		'FirstName'     => 'John',
		'LastName'      => 'Doe',
		'OrgName'       => 'Ascio Contact',
		'Address1'      => '10 Main Street',
		'Address2'      => '',
		'PostalCode'    => '808080',
		'City'          => 'Munich',
		'State'         => 'Bavaria',
		'CountryCode'   => 'DE',
		'Email'         => 'john.doe@ascio.com',
		'Phone'         => '+49.12341234',
		'Fax'           => '+49.12341234'
		);

// In PHP you should create a clone of the contact object
// Otherwise the soap-client will create a soap-reference instead of using the full data.
// That won't work
$tech =  array_merge(array(), $admin);
$billing =  array_merge(array(), $admin);

$order = array(
		'Type' => 'Register_Domain',
		'Comments' => 'Order Test',
		'Domain' => Array(
				'DomainName'    => 'example-domain-'.rand(1,10000000).".com",
				'RegPeriod'     => '1',
				'Registrant'    => $registrant,
				'AdminContact'  => $admin,
				'TechContact'   => $tech,
				'BillingContact'=> $billing,
				'NameServers' => Array(
						'NameServer1' => Array('HostName' => 'ns1.ascio.com'),
						'NameServer2' => Array('HostName' => 'ns2.ascio.com')
						)
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