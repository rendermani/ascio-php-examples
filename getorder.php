<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'orderId' => 'myOrderId'
	);
try {
	$result = $client->GetOrder($params);
	echo "ResultCode : ".$result->GetOrderResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetOrderResult->Message."\r\n";
	if ($result->GetOrderResult->ResultCode == '200') {
		echo "OrderId : ".$result->order->OrderId."\r\n";
		echo "OrderStatus : ".$result->order->Status."\r\n";
		echo "OrderType : ".$result->order->Type."\r\n";
		echo "DomainName : ".$result->order->Domain->DomainName."\r\n";
		echo "DomainHandle : ".$result->order->Domain->DomainHandle."\r\n";
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
