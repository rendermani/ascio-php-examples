<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;
use ascio\lib as lib;
function getNameWatchExample() : ascio\AbstractResponse  {
	$config = new lib\Config();
	$env = $config->get("testing"); //testing or live
	$credentials = array("Account"=>$env->getAccount(), "Password" => $env->getPassword());
	$header = new \SoapHeader("http://www.ascio.com/2013/02","SecurityHeaderDetails", $credentials, false);
	$ascioClient	 = new ascio\AscioService(array("trace" => true),$env->getWsdl("v3"));
	$ascioClient->__setSoapHeaders($header);

	//GetNameWatchRequest

	$request =  new ascio\GetNameWatchRequest();
	$request->setHandle("JD123");
	$response = $ascioClient->GetNameWatch(new ascio\GetNameWatch($request));

	$result = $response->GetNameWatchResult;
	echo "Code: ".$result->getResultCode()."\n";
	echo "Message: ".$result->getResultMessage()."\n";  
	return $result;
}
getNameWatchExample();