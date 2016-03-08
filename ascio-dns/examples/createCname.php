<?php
require_once '../DnsService.php'; 
require_once 'config.php';

$dnsService = new DnsService($dnsConfig->account,$dnsConfig->password,false,$dnsConfig->impersonateUser);

$cName = new CNAME();
$cName->Source 		= "mail.mynewdomain.com";
$cName->Target 		= "www.mynewdomain.com";
$createRecord 			= new CreateRecord();
$createRecord->zoneName = "mynewdomain.com";
$createRecord->record    = $cName;
$result = $dnsService->CreateRecord($createRecord);

var_dump($result);