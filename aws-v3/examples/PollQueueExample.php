<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function pollQueueExample() : ascio\AbstractResponse  {
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);

	//PollQueueRequest

	$request =  new ascio\PollQueueRequest();
	$request->setMessageType(ascio\MessageType::OrderMail);
	$request->setObjectType(ascio\ObjectType::DomainType);
	$response = $ascioClient->PollQueue(new ascio\PollQueue($request));

	$result = $response->PollQueueResult;
	echo "Code: ".$result->getResultCode()."\n";
	echo "Message: ".$result->getResultMessage()."\n";  
	return $result;
}
pollQueueExample();