<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'orderId' => 'myOrderId'
	);
try {
	$result = $client->GetMessages($params);
	echo "ResultCode : ".$result->GetMessagesResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetMessagesResult->Message."\r\n";
	if ($result->GetMessagesResult->ResultCode == '200') {
		if (isset($result->messages->Message)) {
			foreach($result->messages->Message as $message) {
				if (isset($message)) {
					echo "Created : ".$message->Created."\r\n";
					echo "Subject : ".$message->Subject."\r\n";
					echo "Body : ".$message->Body."\r\n";
				}
			}
		}
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>