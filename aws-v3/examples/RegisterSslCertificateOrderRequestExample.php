<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function registerSslCertificateOrderRequestExample()  {
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

	//SslCertificate

	$sslCertificate =  new ascio\SslCertificate();
	//$sslCertificate->setHandle("JD123"); // use the handle or full data
	$sslCertificate->setCommonName("ascio-test-domain.com");
	$sslCertificate->setProductCode("positivemdcwildcard");
	$sslCertificate->setWebServerType(ascio\WebServerType::ApacheSsl);
	$sslCertificate->setApproverEmail("administrator@ascio-test-domain.com");
	$sslCertificate->setCSR("-----BEGIN CERTIFICATE REQUEST-----MIIC2jCCAcICAQAwgZQxCzAJBgNVBAYTAkRFMRMwEQYDVQQIDApTb21lLVN0YXRlMQ8wDQYDVQQHDAZNdW5pY2gxEzARBgNVBAoMClRlc3RDb21hbnkxHjAcBgNVBAMMFWFzY2lvLXRlc3QtZG9tYWluLmNvbTEqMCgGCSqGSIb3DQEJARYbYWRtaW5AYXNjaW8tdGVzdC1kb21haW4uY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwQ9AgF9B381tELA3BsKkIwu4Ddg0hOSfyrtBnm895ELPYG4YcPYXmauTxPu0oD6WhudQh2tbnN/QTRsZpdVgahS6uz7065wUC6IrvlcuaCx+e08vp/1VOIUrKfyrxkZ1mjrv4FwQ38y+ITejL46JBbKbhqbeovQymA/DmHmKUylNY3eud6w/Dp+QOoa1jIZRdHv5ie+ranOx9aYl0WeuzrIOeIVI7UKVF9d1o5r2h60wThLPzky9hux5uisGYZsWjFKOJUFZxkX4riResOWmkFy9KUV82MLuScrSJ4cVfVPmhN3tEpOtYhkJVkS0PvR7LCdL4rOF0pqzL71m2ZoMdQIDAQABoAAwDQYJKoZIhvcNAQELBQADggEBAHcDTCtBQmGcIarD4NFmKt+Tw3l2p+tGRA8OiT7dSTvJ1TavZYdcobFKkBhp/3T9ko4wncBChp97YWNWtQT+hoIrOh85QIMHW14JeVFk8AiptI5pI+DPHnSwSq4XANwwrUI/3zAeRtV7bQmP9upebZ3POJ9Bl9oarge8J2SJ6yM5Dizq9wmGgQlhEG9HuuvJHFGjci86m8yqbqlS8JaIvO2dA4OpEM3cCcu7jY13RYN4DT06VAx2okMJmAyxvG9eu45MIB/NzeV4SrqsTNqCkrXKiC9/rAzhl7eP3XDRI6XZFRq7qmIAQoZJqWSyl1f4cq+rbLIJ9xE+yII+qt/CVbc=-----END CERTIFICATE REQUEST-----");
	$sslCertificate->setOwner($owner);
	$sslCertificate->setAdmin($admin);
	$sslCertificate->setTech($tech);
	$sslCertificate->setSanNames(array("m.ascio-test-domain.com"));

	//SslCertificateOrderRequest

	$request =  new ascio\SslCertificateOrderRequest(ascio\OrderType::Register);
	$request->setSslCertificate($sslCertificate);
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
registerSslCertificateOrderRequestExample();