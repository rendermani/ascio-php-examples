<?php
require_once '../DnsService.php';
require_once 'config.php';

$dnsService = new DnsService($dnsConfig->account,$dnsConfig->password,false,$dnsConfig->impersonateUser);
$createZone = new CreateZone();
$createZone->zoneName = "mynewdomain.com";
$createZone->owner = "cvkd148";
$result = $dnsService->CreateZone($createZone);
var_dump($result);