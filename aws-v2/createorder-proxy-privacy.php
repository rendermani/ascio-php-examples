<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

$order = array(
    'Type' => 'Domain_Details_Update',
    'Comments' => 'Order Test',
    'Domain' => Array(
        'DomainName'    => 'domain.name',
        'PrivacyProxy' => Array(
            'Type' => 'Privacy', //Privacy | Proxy | None 
            'PrivacyAdmin' 		=> true,
        	'PrivacyTech'   	=> true,
        	'PrivacyBilling'    => true
        		
            )
        )
    );

$params = array(
    'sessionId' => 'mySessionId',
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
