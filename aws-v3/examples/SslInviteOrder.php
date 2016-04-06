<?php
// Include the AWS-v3 classes
// please require ../live/autoload.php
require("../ote/autoload.php");
use ascio\v3 as ascio;
// The ote credentials
$user = 'username';
$password = 'password';

$header = new SoapHeader('http://www.ascio.com/2013/02','SecurityHeaderDetails', array('Account'=> $user, 'Password'=>$password), false);

// Add the encoding of your system here. ISO-8859-1 means that your values will be converted from ISO-8859-1 to UTF-8.
// This setting depends on your underlying system
$ascioClient     = new ascio\AscioService(array("trace" => true, "encoding" => "ISO-8859-1"));
$ascioClient->__setSoapHeaders($header);

  
$orderRequest = new ascio\AutoInstallSslOrderRequest(ascio\OrderType::Register);
$orderRequest->setPeriod(1); 

$autoInstallSsl = new ascio\AutoInstallSsl(0);
$autoInstallSsl->setCommonName("webrender.de");
$autoInstallSsl->setProductCode("positivesslwildcard");
$autoInstallSsl->setEmail("admin@webrende5r.de");

$orderRequest->setAutoInstallSsl($autoInstallSsl);

$createOrder = new ascio\CreateOrder($orderRequest);
$response = $ascioClient->createOrder($createOrder); 

var_dump($response);