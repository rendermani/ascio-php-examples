<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


//AutoInstallSsl

$autoInstallSsl =  new ascio\AutoInstallSsl(1);
//$autoInstallSsl->setHandle("JD123"); // use the handle or full data
$autoInstallSsl->setCommonName("ascio-test-domain.com");
$autoInstallSsl->setProductCode("positivemdcwildcard");