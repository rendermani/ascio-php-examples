<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


//KeyValue

$keyValue =  new ascio\KeyValue("Title", "Mr");

//Extensions

$contactExtensions =  new ascio\Extensions(array($keyValue));

//Contact

$contact =  new ascio\Contact();
//$contact->setHandle("JD123"); // use the handle or full data
$contact->setFirstName("John");
$contact->setLastName("Doe");
$contact->setOrgName("Ascio");
$contact->setAddress1("Address1Test");
$contact->setAddress2("Address2Test");
$contact->setCity("CityTest");
$contact->setState("StateTest");
$contact->setPostalCode("888349");
$contact->setCountryCode("DK");
$contact->setPhone("+45.123456789");
$contact->setFax("+45.987654321");
$contact->setType("owner");
$contact->setDetails("DetailsTest");
$contact->setOrganisationNumber("OrganisationNumberTest");
$contact->setExtensions($contactExtensions);