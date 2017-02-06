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

//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$markExtensions =  new ascio\Extensions(array($keyValue));

//TreatyOrStatuteMark

$mark =  new ascio\TreatyOrStatuteMark();
$mark->setTitle("TitleTest");
$mark->setReferenceNumber("ReferenceNumberTest");
$mark->setCountry("DK");
$mark->setRegion("RegionTest");
$mark->setProtectionDate(new \DateTime());
$mark->setExecutionDate(new \DateTime());
//$mark->setHandle("JD123"); // use the handle or full data
$mark->setMarkName("MarkNameTest");
$mark->setMarkId("MarkIdTest");
$mark->setAuthInfo("X4FF!zu");
$mark->setServiceType(ascio\MarkServiceType::Standard);
$mark->setGoodsAndServicesDescription("GoodsAndServicesDescriptionTest");
$mark->setLabels(array("LabelsTest"));
$mark->setClaimEmailNotification1("ClaimEmailNotification1Test");
$mark->setClaimEmailNotification2("ClaimEmailNotification2Test");
$mark->setClaimEmailNotification3("ClaimEmailNotification3Test");
$mark->setClaimEmailNotification4("ClaimEmailNotification4Test");
$mark->setClaimEmailNotification5("ClaimEmailNotification5Test");
$mark->setNotificationFrequency(ascio\NotificationFrequencyType::Daily);
$mark->setOwner($owner);
$mark->setReseller($reseller);
$mark->setExtensions($markExtensions);

//MarkInfo

$markInfo =  new ascio\MarkInfo(new \DateTime());
$markInfo->setExpires(new \DateTime());
$markInfo->setMark($mark);
$markInfo->setSmd("SmdTest");