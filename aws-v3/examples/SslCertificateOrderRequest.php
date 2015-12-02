<?php
// Include the AWS-v3 classes
// please require ../live/autoload.php
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

$csr = "-----BEGIN CERTIFICATE REQUEST-----
MIICujCCAaICAQAwdTELMAkGA1UEBhMCREUxDzANBgNVBAgMBkJheWVybjEPMA0G
A1UEBwwGTXVuaWNoMRYwFAYDVQQKDA1MaXZpbmcgSW1hZ2VzMRQwEgYDVQQLDAtE
ZXZlbG9wbWVudDEWMBQGA1UEAwwNKi5jbG91ZHlhLm5ldDCCASIwDQYJKoZIhvcN
AQEBBQADggEPADCCAQoCggEBANGLfscVfFxsVAu6awtdxvh8KroHDY3lLhU4cfco
v5nFvigzpPQY51O0mUW0Jj3X5x95Yx5LVM8g2fQeJiQj5RGkJEUFJfYJrcgBZhVu
DtBLnzMe4nSJaKIa4Lxb6ZtD0+t5YXo3waOdS15O3bSWMuFY8w90FhT/sRxUZk0g
AL8uRm7kEm7kpar6agvEqvRKlMBFxVzQQrT5BABUsV1Y/CxyCRkqRTlxC1sqIWgd
fQSiRaFTFM42pZKdx7kl8iv4hv9Y6sfmZZ6hd5bACV6XjFvbAm/kdL2V4Qt7oQy8
8rvIGBvTFwupivFntnd1sIzhV2a93xv8kr84Q5Lu9olJZv8CAwEAAaAAMA0GCSqG
SIb3DQEBBQUAA4IBAQB5R7Agu8c1m6kSGxWo7zECfFU0WRmVh/6UXkehCbJUw+hf
9N4GAmzBDN1GsyRSjvCmT4B4/2nFfSamdxUHn2PZIfkcIa1Q/HzLdsSb5/j+omm3
sP37KQ7sy9xEdxMKSZlOamHBjvGvZSHb+CdwvUjLx6geeSzyIj/d/7ZzuwzRLgkY
oGtINHB5CjSJ5qaRwvC94JN+EUf+LXrWu3rH/P5gkb7u1MSlgSEa+Pqw9QZVH3Es
nnBGF5G7eMhbGlOHxY7qCKcUCillYufpI4/IZpmo5YNLBTgTop3UuMK6EK4y4oPa
eFWpWpghpaYClEwV4lZRtzZ8FraIhBoxiLVb0jQC
-----END CERTIFICATE REQUEST-----";


$orderRequest = new ascio\SslCertificateOrderRequest(ascio\OrderType::Register);
$orderRequest->setPeriod(1);

$sslCertificate = new ascio\SslCertificate();
$sslCertificate->setCommonName("*.cloudya.net");
$sslCertificate->setWebServerType(ascio\WebServerType::Apache2);
$sslCertificate->setProductCode("positivesslwildcard");
$sslCertificate->setApproverEmail("test@testme.com");
$sslCertificate->setCSR($csr);

$registrant = new ascio\Registrant();
$registrant->setFirstName("Manuel");
$registrant->setLastName("Lautenschlager");
$registrant->setOrgName("ACME");
$registrant->setAddress1("Downstreet 1");
$registrant->setPostalCode("55555");
$registrant->setCity("Munchen");
$registrant->setCountryCode("DE");
$registrant->setEmail("test@testme.com");
$registrant->setPhone("+49.00000");
$registrant->setFax("49.34555");

$admin = new ascio\Contact();
$admin->setFirstName("Stefan");
$admin->setLastName("Panten");
$admin->setOrgName("Partner Company");
$admin->setAddress1("Downstreet 1");
$admin->setPostalCode("55555");
$admin->setCity("Munchen");
$admin->setCountryCode("DE");
$admin->setEmail("test@testme.com");
$admin->setPhone("+49.00000");

$sslCertificate->setOwner($registrant);
$sslCertificate->setAdmin($admin);

$orderRequest->setSslCertificate($sslCertificate);
$validateOrder = new  ascio\ValidateOrder($orderRequest);
$response = $ascioClient->ValidateOrder($validateOrder);

if ($response->getValidateOrderResult()->getResultCode() == 200) {
    $response = $ascioClient->CreateOrder(new ascio\CreateOrder($orderRequest));
    echo "Order OK: ".$response->getCreateOrderResult()->getResultCode() . " " . $response->getCreateOrderResult()->getResultMessage() . "\r\n";
    if ($response->getCreateOrderResult()->getResultCode() == 200) {
        echo "OrderId : " . $response->getCreateOrderResult()->OrderInfo->getOrderId() . "\r\n";
        echo "Order Status : " . $response->getCreateOrderResult()->OrderInfo->getStatus() . "\r\n";
    }
} else {
    if ($response->getValidateOrderResult()->getErrors()) {
        foreach($response->getValidateOrderResult()->getErrors()->getString() as $error) {
            echo $error;
        }
    }
}

// here you can see the XML of the SOAP Request and Response.

//echo "------ REQUEST -------\n\n";
//echo $ascioClient->__getLastRequest();
//echo "------ RESPONSE -------\n\n";
//echo $ascioClient->__getLastResponse();