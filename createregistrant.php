<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$registrant = array(
	'Name' => 'John Doe',
	'OrgName' => 'ASCIO',
	'Address1' => '10 Main Street',
	'Address2' => 'XXXXXX',
	'City' => 'Copenhagen',
	'CountryCode' => 'DK',
	'State' => 'CPH',
	'Phone' => '+45.00000000',
	'Fax' => '+45.11111111',
	'Email' => 'jd@doe.com'
	);
$params = array(
	'sessionId' => 'mySessionId',
	'registrant' => $registrant
	);
try {
	$result = $client->CreateRegistrant($params);
	echo "ResultCode : ".$result->CreateRegistrantResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->CreateRegistrantResult->Message."\r\n";
	if ($result->CreateRegistrantResult->ResultCode == '200') {
		echo "Registrant Handle : ".$result->registrant->Handle."\r\n";
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>