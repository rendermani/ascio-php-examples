<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$params = array(
	'sessionId' => 'SessionId',
	'contactHandle' => 'myContactHandle'
	);
try {	
	$result = $client->GetContact($params);
	echo "ResultCode : ".$result->GetContactResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->GetContactResult->Message."\r\n";
	if ($result->GetContactResult->ResultCode == '200') {
		echo "Status : ".$result->contact->Status."\r\n";
		echo "Handle : ".$result->contact->Handle."\r\n";
		echo "Name : ".$result->contact->FirstName." ".$result->contact->LastName."\r\n";
		echo "OrgName : ".$result->contact->OrgName."\r\n";
		echo "Address : ".$result->contact->Address1."\r\n";
		echo "City : ".$result->contact->City."\r\n";
		echo "Phone : ".$result->contact->Phone."\r\n";
		echo "Fax : ".$result->contact->Fax."\r\n";
		echo "EMail : ".$result->contact->Email."\r\n";
		echo "State : ".$result->contact->State."\r\n";
		echo "CountryCode : ".$result->contact->CountryCode."\r\n";
		echo "ContactType : ".$result->contact->Type."\r\n";
		echo "Details : ".$result->contact->Details."\r\n";
	}
} catch(Exception $e) {
	echo $e->getMessage(); 
}