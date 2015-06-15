<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$contact = array(
	'Handle' => 'J43',
	'Address1' => '10 Main Street',
	'Address2' => 'XXXXXX',
	'City' => 'Copenhagen',
	'CountryCode' => 'DK',
	'State' => 'CPH',
	'Phone' => '+45.12345678',
	'Fax' => '+45.12345679',
	'Email' => 'jd@doe.com',
	'Contact' => 'person',
	'Details' => 'None'
	);
$params = array(
	'sessionId' => 'mySessionId',
	'contact' => $contact
	);
try {
	$result = $client->UpdateContact($params);
	echo "ResultCode : ".$result->UpdateContactResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->UpdateContactResult->Message."\r\n";
	if ($result->UpdateContactResult->ResultCode == '200') {
		echo "Contact has been updated\r\n";
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>

