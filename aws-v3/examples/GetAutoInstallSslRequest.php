<?php
// Include the AWS-v3 classes
require("../ote/autoload.php");
use ascio\v3 as ascio;
// The ote credentials
$user = 'username';
$password = 'password';

$header = new SoapHeader('http://www.ascio.com/2013/02','SecurityHeaderDetails', array('Account'=>$user, 'Password'=>$password), false);

// Add the encoding of your system here. ISO-8859-1 means that your values will be converted from ISO-8859-1 to UTF-8.
// This setting depends on your underlying system
$ascioClient     = new ascio\AscioService(array("trace" => true, "encoding" => "ISO-8859-1"));
$ascioClient->__setSoapHeaders($header);

$getSslCertificateRequest = new ascio\GetAutoInstallSslRequest();
$getSslCertificateRequest->setHandle("WEBRENDE11402");
$response = $ascioClient->GetAutoInstallSsl(new ascio\GetAutoInstallSsl($getSslCertificateRequest));
$token = $response->GetAutoInstallSslResult->GetAutoInstallSslInfo()->getToken();
var_dump($token);


// here you can see the XML of the SOAP Request and Response.

//echo "------ REQUEST -------\n\n";
//echo $ascioClient->__getLastRequest();
//echo "------ RESPONSE -------\n\n";
//echo $ascioClient->__getLastResponse();
