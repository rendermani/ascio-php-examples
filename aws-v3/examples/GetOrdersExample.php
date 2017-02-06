<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function getOrdersExample() : ascio\AbstractResponse  {
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);

	//PagingInfo

	$pageInfo =  new ascio\PagingInfo(1, 1);

	//GetOrdersRequest

	$request =  new ascio\GetOrdersRequest(ascio\SearchOrderSortType::CreatedAsc);
	$request->setTransactionComment("TransactionCommentTest");
	$request->setComments("CommentsTest");
	$request->setObjectName("ObjectNameTest");
	$request->setFromDate(new \DateTime());
	$request->setToDate(new \DateTime());
	$request->setOrderStatusTypes(array(OrderStatusType.Validated));
	$request->setOrderTypes(array(OrderType.Register));
	$request->setObjectTypes(array(ObjectType.SslCertificateType));
	$request->setPageInfo($pageInfo);
	$response = $ascioClient->GetOrders(new ascio\GetOrders($request));

	$result = $response->GetOrdersResult;
	echo "Code: ".$result->getResultCode()."\n";
	echo "Message: ".$result->getResultMessage()."\n";  
	return $result;
}
getOrdersExample();