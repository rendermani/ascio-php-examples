<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params =
array(
	'sessionId' => $sessionId,
	'orderRequest' =>
	array(
		'DomainName' => "a*",
		'OrderTypes' => array("OrderType"=>	array("Register_Domain","Support")),
		'PageInfo' => array('PageSize' => '5','PageIndex' => '1')
		)
	);
try {
	$result = $client->SearchOrder($params);
	foreach ($result->orders->Order as $key => $order) {
		echo $order->Domain->DomainName."<br>\n";
	}
	return $result;	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>