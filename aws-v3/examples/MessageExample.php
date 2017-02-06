<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


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