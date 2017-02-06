<?php
namespace ascio\v3\examples;
require("../service/autoload.php");
require("../../lib/AscioConfig.php");
use ascio\v3 as ascio;


//MarkOrderDocument

$markOrderDocument =  new ascio\MarkOrderDocument(ascio\MarkOrderDocType::TrademarkAssigneeDeclaration);
$markOrderDocument->setFileName("anything.jpg");
$markOrderDocument->setContent(base64_encode(123));