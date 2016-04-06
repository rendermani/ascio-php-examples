<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

$email = "email-to@test.com";

$params = array(
	'sessionId' => '26a92b8671774625811cffba755e4e5c',
	'orderId' 	=> 'TEST234234',
	'Message' 	=>	array(						   					
			'Body'		  => 'body of the message sent to the customer',
			'Created'	  => '2016-02-26T09:47:51', //xs:dateTime
			'FromAddress' => 'robot@partner.com',
			'Subject'	  => 'Your domain will expire',
			'ToAddress'   =>  $email,
			'Type'		  => 'ExpiryReminder1' 				
	)
);
try {
	$result = $client->UploadMessage($params);
	var_dump($result);
	echo "ResultCode : ".$result->UploadMessageResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->UploadMessageResult->Message."\r\n";
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
