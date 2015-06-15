<?php

class GetDnsSecKeyResponse
{

  /**
   * 
   * @var Response $GetDnsSecKeyResult
   * @access public
   */
  public $GetDnsSecKeyResult = null;

  /**
   * 
   * @var DnsSecKey $dnsSecKey
   * @access public
   */
  public $dnsSecKey = null;

  /**
   * 
   * @param Response $GetDnsSecKeyResult
   * @param DnsSecKey $dnsSecKey
   * @access public
   */
  public function __construct($GetDnsSecKeyResult, $dnsSecKey)
  {
    $this->GetDnsSecKeyResult = $GetDnsSecKeyResult;
    $this->dnsSecKey = $dnsSecKey;
  }

}
