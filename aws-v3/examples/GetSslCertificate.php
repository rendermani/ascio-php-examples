<?php
// Include the AWS-v3 classes
require("../ote/autoload.php");
use ascio\v3 as ascio;
// The ote credentials
$user = 'xxx';
$password = 'yyy';

$header = new SoapHeader('http://www.ascio.com/2013/02','SecurityHeaderDetails', array('Account'=>$user, 'Password'=>$password), false);

// Add the encoding of your system here. ISO-8859-1 means that your values will be converted from ISO-8859-1 to UTF-8.
// This setting depends on your underlying system
$ascioClient     = new ascio\AscioService(array("trace" => true, "encoding" => "ISO-8859-1"));
$ascioClient->__setSoapHeaders($header);

$getSslCertificateRequest = new ascio\GetSslCertificateRequest();
$getSslCertificateRequest->setHandle("CLOUDYAN53998");

$response = $ascioClient->GetSslCertificate(new ascio\GetSslCertificate($getSslCertificateRequest));

$result = $response->GetSslCertificateResult;
var_dump($result);


if($result->getErrors() && count($result->getErrors()) > 0) {
    echo "Errors:\n";
    foreach($result->getErrors()->getString() as $key => $error) {
        echo $error."\n";
    }
}

// here you can see the XML of the SOAP Request and Response.

//echo "------ REQUEST -------\n\n";
//echo $ascioClient->__getLastRequest();
//echo "------ RESPONSE -------\n\n";
//echo $ascioClient->__getLastResponse();
