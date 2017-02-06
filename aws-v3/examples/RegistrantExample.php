<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$registrantExtensions =  new ascio\Extensions(array($keyValue));

//Registrant

$registrant =  new ascio\Registrant();
$registrant->setVatNumber("VatNumberTest");
$registrant->setNexusCategory("NexusCategoryTest");
//$registrant->setHandle("JD123"); // use the handle or full data
$registrant->setFirstName("John");
$registrant->setLastName("Doe");
$registrant->setOrgName("Ascio");
$registrant->setAddress1("Address1Test");
$registrant->setAddress2("Address2Test");
$registrant->setCity("CityTest");
$registrant->setState("StateTest");
$registrant->setPostalCode("888349");
$registrant->setCountryCode("DK");
$registrant->setPhone("+45.123456789");
$registrant->setFax("+45.987654321");
$registrant->setType("owner");
$registrant->setDetails("DetailsTest");
$registrant->setOrganisationNumber("OrganisationNumberTest");
$registrant->setExtensions($registrantExtensions);