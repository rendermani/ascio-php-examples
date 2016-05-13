<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));


$order = array(
    'Type' => 'Register_Domain',
    'Comments' => 'Order Test',
    'Domain' => Array(
        'DomainName'    => 'myDomainName',
        'RegPeriod'     => '1',
        'AuthInfo'  	=> "myAuthCode"

        
    )
);

$params = array(
    'sessionId' => 'sessionid',
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