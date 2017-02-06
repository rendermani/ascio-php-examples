<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function registerCourtValidatedMarkExample() : ascio\AbstractResponse  {
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);

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

	//CourtValidatedMark

	$mark =  new ascio\CourtValidatedMark();
	$mark->setCourtName("CourtNameTest");
	$mark->setReferenceNumber("ReferenceNumberTest");
	$mark->setCountry("DK");
	$mark->setRegion("RegionTest");
	$mark->setProtectionDate(new \DateTime());
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

	//MarkOrderDocument

	$markOrderDocument =  new ascio\MarkOrderDocument(ascio\MarkOrderDocType::TrademarkAssigneeDeclaration);
	$markOrderDocument->setFileName("anything.jpg");
	$markOrderDocument->setContent(base64_encode(123));

	//ArrayOfMarkOrderDocument

	$documents = array($markOrderDocument);


	//MarkOrderRequest

	$request =  new ascio\MarkOrderRequest(ascio\OrderType::Register);
	$request->setMark($mark);
	$request->setDocuments($documents);
	$request->setPeriod(1);
	$request->setTransactionComment("TransactionCommentTest");
	$request->setComments("CommentsTest");
	$request->setOptions("OptionsTest");

	echo "start validate\n";
	$validateOrder = new  ascio\ValidateOrder($request);
	$response = $ascioClient->ValidateOrder($validateOrder);
	echo "end validate\n";
	
	if ($response->ValidateOrderResult->getResultCode() == 200) {
		echo "Validation: OK\r\n";
		$createOrderResponse = $ascioClient->CreateOrder(new ascio\CreateOrder($request));
		echo "Create Order: ".$createOrderResponse->CreateOrderResult->getResultCode() . " " . $createOrderResponse->CreateOrderResult->getResultMessage() . "\r\n";
		if ($createOrderResponse->CreateOrderResult->getResultCode() == 200) {
			echo "OrderId : " . $createOrderResponse->CreateOrderResult->getOrderInfo()->getOrderId() . "\r\n";
			echo "Order Status : " . $createOrderResponse->CreateOrderResult->getOrderInfo()->getStatus() . "\r\n";
		} else {
			echo ($response->CreateOrderResult->getResultMessage()."\n");
			foreach($createOrderResponse->CreateOrderResult->getErrors() as $error) {
				echo $error."\n";
				return $response;
			}
		}
		return $createOrderResponse;
	} else {
		echo ($response->ValidateOrderResult->getResultMessage()."\n");
		if ($response->ValidateOrderResult->getErrors()) {
			foreach($response->ValidateOrderResult->getErrors()->getString() as $error) {
				 echo $error."\n";
			}
		}
		return $response;
	}
}
registerCourtValidatedMarkExample();