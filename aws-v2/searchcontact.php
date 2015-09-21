<?php
$wsdl = 'https://awstest.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));
$criteria = array(
	'Withstates' => Array('string' => 'active', 'string' => 'deleted'),
	'Mode' => 'Strict',
	'Clauses' => Array(
		'Clause' => Array(
			Array('Attribute' => 'City', 'Value' => 'Copenhagen', 'Operator' => 'Is'),
			Array('Attribute' => 'Country', 'Value' => 'DK', 'Operator' => 'Is')
			)
)
);
$params = array(
	'sessionId' => 'mySessionId',
	'criteria' => $criteria
	);
try {
	$result = $client->SearchContact($params);
	echo "ResultCode : ".$result->SearchContactResult->ResultCode."\r\n";
	echo "ResultMessage : ".$result->SearchContactResult->Message."\r\n";
	if ($result->SearchContactResult->ResultCode == '200') {
		if (isset($result->contacts->Contact)) {
			foreach($result->contacts->Contact as $contact) {
				if (isset($contact)) {
					echo "Handle : ".$contact->Handle."\r\n";
					echo "Name : ".$contact->Name."\r\n";
					echo "OrgName : ".$contact->OrgName."\r\n";
					echo "Address : ".$contact->Address1."\r\n";
					echo "City : ".$contact->City."\r\n";
					echo "Phone : ".$contact->Phone."\r\n";
					echo "Fax : ".$contact->Fax."\r\n";
					echo "EMail : ".$contact->Email."\r\n";
					echo "State : ".$contact->State."\r\n";
					echo "CountryCode : ".$contact->CountryCode."\r\n";
					echo "ContactType : ".$contact->Type."\r\n";
					echo "Details : ".$contact->Details."\r\n";
					echo "****************************************************\r\n";
				}
			}
		}
	}	
} catch(Exception $e) {
	echo $e->getMessage(); 
}
?>
