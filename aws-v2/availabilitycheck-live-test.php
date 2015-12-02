<?php
$wsdl = 'https://aws.ascio.com/2012/01/01/AscioService.wsdl';
$client = new SoapClient($wsdl,array( "trace" => 1 ));

function testAvtest ($client, $tld) {
	$params = array(
			'sessionId' => 'xxxx',
			'domains' => 
			array('string' => array('test1')),
			'tlds' => array('string' => array($tld)),
			'quality' => 'Live'
	);
	try {
		$start = microtime(true);
		$result = $client->AvailabilityCheck($params);
		$end = microtime(true);
		echo $tld.": ".($end - $start )."s\r\n";
	} catch(Exception $e) {
		echo $e->getMessage();
	}	
}

testAvtest($client,"se");
testAvtest($client,"com");
testAvtest($client,"net");
testAvtest($client,"es");
testAvtest($client,"de");
testAvtest($client,"dk");
testAvtest($client,"at");
testAvtest($client,"guru");
testAvtest($client,"ru");

?>
