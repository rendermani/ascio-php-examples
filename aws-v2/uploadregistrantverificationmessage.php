<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

$email = "email-to@test.com";

$params = array(
	'sessionId' => '26a92b8671774625811cffba755e4e5c',
	'value' 	=> $email,
	'details' 	=> array(
			'VerifiedBy'	=> '5.6.7.8', //ip-address
			'VerificationDate' => '2016-02-26T09:47:51',  //xs:dateTime
			'Messages'	=>	array(
					'Message' 	=>	array(						   					
							'Body'		  => 'body of the message sent to the customer',
							'Created'	  => '2016-02-26T09:47:51', //xs:dateTime
							'FromAddress' => 'robot@partner.com',
							'Subject'	  => 'Please confirm your email address',
							'ToAddress'   =>  $email,
							'Type'		  => 'Message_to_Registrant'
							
					)
			)
	)
);
try {
	$result = $client->UploadRegistrantVerificationMessage($params);
	var_dump($result);
	echo "ResultCode : ".$result->UploadRegistrantVerificationMessageResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->UploadRegistrantVerificationMessageResult->Message."\r\n";
	} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
