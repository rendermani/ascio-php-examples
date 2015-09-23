<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$contact = array(
	'FirstName' => 'John',
	'LastName' => 'Doe',
	'OrgName' => 'ASCIO',
	'Address1' => '10 Main Street',
	'Address2' => 'XXXXXX',
	'City' => 'Copenhagen',
	'CountryCode' => 'DK',
	'State' => 'CPH',
	'Phone' => '+45.12345678',
	'Fax' => '+45.12345679',
	'Email' => 'jd@doe.com'
	);
$params = array(
	'sessionId' => 'mySessionId',
	'contact' => $contact
	);
$result = $client->CreateContact($params);
try {
	echo "ResultCode : ".$result->CreateContactResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->CreateContactResult->Message."\r\n";
	if ($result->CreateContactResult->ResultCode == '200') {
		echo "Contact Handle : ".$result->contact->Handle."\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
