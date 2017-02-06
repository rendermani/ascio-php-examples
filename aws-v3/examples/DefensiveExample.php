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

//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$billingExtensions =  new ascio\Extensions(array($keyValue));

//Contact

$billing =  new ascio\Contact();
//$billing->setHandle("JD123"); // use the handle or full data
$billing->setFirstName("John");
$billing->setLastName("Doe");
$billing->setOrgName("Ascio");
$billing->setAddress1("Address1Test");
$billing->setAddress2("Address2Test");
$billing->setCity("CityTest");
$billing->setState("StateTest");
$billing->setPostalCode("888349");
$billing->setCountryCode("DK");
$billing->setPhone("+45.123456789");
$billing->setFax("+45.987654321");
$billing->setType("owner");
$billing->setDetails("DetailsTest");
$billing->setOrganisationNumber("OrganisationNumberTest");
$billing->setExtensions($billingExtensions);

//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$resellerExtensions =  new ascio\Extensions(array($keyValue));

//Contact

$reseller =  new ascio\Contact();
//$reseller->setHandle("JD123"); // use the handle or full data
$reseller->setFirstName("John");
$reseller->setLastName("Doe");
$reseller->setOrgName("Ascio");
$reseller->setAddress1("Address1Test");
$reseller->setAddress2("Address2Test");
$reseller->setCity("CityTest");
$reseller->setState("StateTest");
$reseller->setPostalCode("888349");
$reseller->setCountryCode("DK");
$reseller->setPhone("+45.123456789");
$reseller->setFax("+45.987654321");
$reseller->setType("owner");
$reseller->setDetails("DetailsTest");
$reseller->setOrganisationNumber("OrganisationNumberTest");
$reseller->setExtensions($resellerExtensions);

//Defensive

$defensive =  new ascio\Defensive();
//$defensive->setHandle("JD123"); // use the handle or full data
$defensive->setName("my.name");
//$defensive->setMarkHandle("MarkHandleTest"); // use the handle or full data
$defensive->setAuthInfo("X4FF!zu");
$defensive->setEncoding("EncodingTest");
$defensive->setOwner($owner);
$defensive->setAdmin($admin);
$defensive->setTech($tech);
$defensive->setBilling($billing);
$defensive->setReseller($reseller);