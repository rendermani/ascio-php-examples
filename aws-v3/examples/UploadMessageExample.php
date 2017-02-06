<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function uploadMessageExample() : ascio\AbstractResponse  {
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);

	//Attachment

	$attachment =  new ascio\Attachment();
	$attachment->setFileName("anything.jpg");
	$attachment->setContent(base64_encode(123));

	//ArrayOfAttachment

	$attachments = array($attachment);


	//Message

	$message =  new ascio\Message(new \DateTime(), ascio\MessageType::OrderMail);
	$message->setAttachments($attachments);
	$message->setBody("BodyTest");
	$message->setFromAddress("administrator@ascio-test-domain.com");
	$message->setSubject("SubjectTest");
	$message->setToAddress("ToAddressTest");

	//UploadMessageRequest

	$request =  new ascio\UploadMessageRequest();
	$request->setOrderId("TEST123456");
	$request->setMessage($message);
	$response = $ascioClient->UploadMessage(new ascio\UploadMessage($request));

	$result = $response->UploadMessageResult;
	echo "Code: ".$result->getResultCode()."\n";
	echo "Message: ".$result->getResultMessage()."\n";  
	return $result;
}
uploadMessageExample();