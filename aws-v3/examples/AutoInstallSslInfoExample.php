<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


//AutoInstallSslInfo

$autoInstallSslInfo =  new ascio\AutoInstallSslInfo(new \DateTime(), 1);
//$autoInstallSslInfo->setHandle("JD123"); // use the handle or full data
$autoInstallSslInfo->setCommonName("ascio-test-domain.com");
$autoInstallSslInfo->setProductCode("positivemdcwildcard");
$autoInstallSslInfo->setToken("TokenTest");