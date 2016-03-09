<?php

require_once '../DnsService.php';
require_once 'config.php';

$dnsService = new DnsService($dnsConfig->account,$dnsConfig->password,false,$dnsConfig->impersonateUser);
$deleteZone = new DeleteZone();
$deleteZone->zoneName = "mynewdomain.com";

$result = $dnsService->DeleteZone($deleteZone);
var_dump($result);