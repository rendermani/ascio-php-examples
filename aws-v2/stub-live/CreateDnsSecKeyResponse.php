<?php

class CreateDnsSecKeyResponse
{

  /**
   * 
   * @var Response $CreateDnsSecKeyResult
   * @access public
   */
  public $CreateDnsSecKeyResult = null;

  /**
   * 
   * @var DnsSecKey $dnsSecKey
   * @access public
   */
  public $dnsSecKey = null;

  /**
   * 
   * @param Response $CreateDnsSecKeyResult
   * @param DnsSecKey $dnsSecKey
   * @access public
   */
  public function __construct($CreateDnsSecKeyResult, $dnsSecKey)
  {
    $this->CreateDnsSecKeyResult = $CreateDnsSecKeyResult;
    $this->dnsSecKey = $dnsSecKey;
  }

}
