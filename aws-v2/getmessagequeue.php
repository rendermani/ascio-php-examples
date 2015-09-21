<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'mySessionId',
	'msgId' => 'myMessageId'
	);

try {
	$result = $client->GetMessageQueue($params);
	echo "ResultCode : ".$result->GetMessageQueueResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetMessageQueueResult->Message."\r\n";
	if ($result->GetMessageQueueResult->ResultCode == '200') {
		echo "MessageId to ack : ".$result->item->MsgId."\r\n";
		echo "Message : ".$result->item->Msg."\r\n";
		echo "MessageType : ".$result->item->MsgType."\r\n";
		echo "DomainName : ".$result->item->DomainName."\r\n";
		echo "DomainHandle : ".$result->item->DomainHandle."\r\n";
		echo "OrderId : ".$result->item->OrderId."\r\n";
		echo "OrderStatus : ".$result->item->OrderStatus."\r\n";
		if (isset($result->item->Attachments->Attachment)) {
			foreach($result->item->Attachments as $attachment) {
				if (isset($attachment)) {
					echo "FileName : ".$attachment->FileName."\r\n";
					echo "Data : ".$attachment->Data."\r\n";
				}
			}
		}
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}