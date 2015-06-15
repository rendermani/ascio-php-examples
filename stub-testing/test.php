<?php
//display_errors("1");
error_reporting(E_ALL);
ini_set('display_errors','On');

require("AscioServices.php");

$ascio = new AscioServices();
$session = new Session("testing-user","testing-password");
$result = $ascio->LogIn(new LogIn($session));
$sessionId = $result->sessionId;

$registrant = new Registrant(null,null,null,"Manuel Lautenschlager","Ascio","test str.1",null,"Munich",null,"99999","DE","ml@webrender.de","+49.3333",null,null,null,null,null,null,null);
$contact = new Contact(	null,null,null,"Manuel","Lautenschlager","Ascio","test str.1",null,"99999","Munich",null,"DE","ml@webrender.de","+49.3333",null,null,null,null,null,null,null);
$ns1 = new Nameserver(null,null,"ns1.ascio.com",null,null,null,null);
$ns2 = new Nameserver(null,null,"ns2.ascio.com",null,null,null,null);
$nameservers = new Nameservers($ns1,$ns2,null,null,null,null,null,null,null,null,null,null,null,null);
$domainName = "test-m-".rand(1,10000).".com";
$domain = new Domain($domainName, null, 1, null, null, null, null, null,null, null, null, null, null, null, null, $registrant, $contact, clone $contact, clone $contact, null, $nameservers,null,null);
$order = new Order(null, "Register_Domain", null, null, null, null, null, null, null, null, $domain, null);
$result = $ascio->CreateOrder(new CreateOrder($sessionId,$order));
var_dump($result)
?>

