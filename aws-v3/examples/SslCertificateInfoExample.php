<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$ownerExtensions =  new ascio\Extensions(array($keyValue));

//Registrant

$owner =  new ascio\Registrant();
$owner->setVatNumber("VatNumberTest");
$owner->setNexusCategory("NexusCategoryTest");
//$owner->setHandle("JD123"); // use the handle or full data
$owner->setFirstName("John");
$owner->setLastName("Doe");
$owner->setOrgName("Ascio");
$owner->setAddress1("Address1Test");
$owner->setAddress2("Address2Test");
$owner->setCity("CityTest");
$owner->setState("StateTest");
$owner->setPostalCode("888349");
$owner->setCountryCode("DK");
$owner->setPhone("+45.123456789");
$owner->setFax("+45.987654321");
$owner->setType("owner");
$owner->setDetails("DetailsTest");
$owner->setOrganisationNumber("OrganisationNumberTest");
$owner->setExtensions($ownerExtensions);

//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$adminExtensions =  new ascio\Extensions(array($keyValue));

//Contact

$admin =  new ascio\Contact();
//$admin->setHandle("JD123"); // use the handle or full data
$admin->setFirstName("John");
$admin->setLastName("Doe");
$admin->setOrgName("Ascio");
$admin->setAddress1("Address1Test");
$admin->setAddress2("Address2Test");
$admin->setCity("CityTest");
$admin->setState("StateTest");
$admin->setPostalCode("888349");
$admin->setCountryCode("DK");
$admin->setPhone("+45.123456789");
$admin->setFax("+45.987654321");
$admin->setType("owner");
$admin->setDetails("DetailsTest");
$admin->setOrganisationNumber("OrganisationNumberTest");
$admin->setExtensions($adminExtensions);

//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$techExtensions =  new ascio\Extensions(array($keyValue));

//Contact

$tech =  new ascio\Contact();
//$tech->setHandle("JD123"); // use the handle or full data
$tech->setFirstName("John");
$tech->setLastName("Doe");
$tech->setOrgName("Ascio");
$tech->setAddress1("Address1Test");
$tech->setAddress2("Address2Test");
$tech->setCity("CityTest");
$tech->setState("StateTest");
$tech->setPostalCode("888349");
$tech->setCountryCode("DK");
$tech->setPhone("+45.123456789");
$tech->setFax("+45.987654321");
$tech->setType("owner");
$tech->setDetails("DetailsTest");
$tech->setOrganisationNumber("OrganisationNumberTest");
$tech->setExtensions($techExtensions);

//SslCertificateInfo

$sslCertificateInfo =  new ascio\SslCertificateInfo(new \DateTime(), ascio\WebServerType::ApacheSsl);
//$sslCertificateInfo->setHandle("JD123"); // use the handle or full data
$sslCertificateInfo->setExpires(new \DateTime());
$sslCertificateInfo->setCommonName("ascio-test-domain.com");
$sslCertificateInfo->setProductCode("positivemdcwildcard");
$sslCertificateInfo->setApproverEmail("administrator@ascio-test-domain.com");
$sslCertificateInfo->setCSR("-----BEGIN CERTIFICATE REQUEST-----MIIC2jCCAcICAQAwgZQxCzAJBgNVBAYTAkRFMRMwEQYDVQQIDApTb21lLVN0YXRlMQ8wDQYDVQQHDAZNdW5pY2gxEzARBgNVBAoMClRlc3RDb21hbnkxHjAcBgNVBAMMFWFzY2lvLXRlc3QtZG9tYWluLmNvbTEqMCgGCSqGSIb3DQEJARYbYWRtaW5AYXNjaW8tdGVzdC1kb21haW4uY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwQ9AgF9B381tELA3BsKkIwu4Ddg0hOSfyrtBnm895ELPYG4YcPYXmauTxPu0oD6WhudQh2tbnN/QTRsZpdVgahS6uz7065wUC6IrvlcuaCx+e08vp/1VOIUrKfyrxkZ1mjrv4FwQ38y+ITejL46JBbKbhqbeovQymA/DmHmKUylNY3eud6w/Dp+QOoa1jIZRdHv5ie+ranOx9aYl0WeuzrIOeIVI7UKVF9d1o5r2h60wThLPzky9hux5uisGYZsWjFKOJUFZxkX4riResOWmkFy9KUV82MLuScrSJ4cVfVPmhN3tEpOtYhkJVkS0PvR7LCdL4rOF0pqzL71m2ZoMdQIDAQABoAAwDQYJKoZIhvcNAQELBQADggEBAHcDTCtBQmGcIarD4NFmKt+Tw3l2p+tGRA8OiT7dSTvJ1TavZYdcobFKkBhp/3T9ko4wncBChp97YWNWtQT+hoIrOh85QIMHW14JeVFk8AiptI5pI+DPHnSwSq4XANwwrUI/3zAeRtV7bQmP9upebZ3POJ9Bl9oarge8J2SJ6yM5Dizq9wmGgQlhEG9HuuvJHFGjci86m8yqbqlS8JaIvO2dA4OpEM3cCcu7jY13RYN4DT06VAx2okMJmAyxvG9eu45MIB/NzeV4SrqsTNqCkrXKiC9/rAzhl7eP3XDRI6XZFRq7qmIAQoZJqWSyl1f4cq+rbLIJ9xE+yII+qt/CVbc=-----END CERTIFICATE REQUEST-----");
$sslCertificateInfo->setCertificate("CertificateTest");
$sslCertificateInfo->setOwner($owner);
$sslCertificateInfo->setAdmin($admin);
$sslCertificateInfo->setTech($tech);
$sslCertificateInfo->setSanNames(array("m.ascio-test-domain.com"));