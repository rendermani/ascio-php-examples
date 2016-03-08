<?php
require_once '../DnsService.php'; 
require_once 'config.php';

$dnsService = new DnsService($dnsConfig->account,$dnsConfig->password,false,$dnsConfig->impersonateUser);

$aRecord = new A();
$aRecord->Source 		= "www.mynewdomain.com";
$aRecord->Target 		= "1.1.1.1";
$createRecord 			= new CreateRecord();
$createRecord->zoneName = "mynewdomain.com";
$createRecord->record    = $aRecord;
$result = $dnsService->CreateRecord($createRecord);

var_dump($result);