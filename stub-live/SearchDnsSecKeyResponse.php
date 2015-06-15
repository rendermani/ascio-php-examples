<?php

class SearchDnsSecKeyResponse
{

  /**
   * 
   * @var Response $SearchDnsSecKeyResult
   * @access public
   */
  public $SearchDnsSecKeyResult = null;

  /**
   * 
   * @var DnsSecKey[] $dnsSecKeys
   * @access public
   */
  public $dnsSecKeys = null;

  /**
   * 
   * @param Response $SearchDnsSecKeyResult
   * @param DnsSecKey[] $dnsSecKeys
   * @access public
   */
  public function __construct($SearchDnsSecKeyResult, $dnsSecKeys)
  {
    $this->SearchDnsSecKeyResult = $SearchDnsSecKeyResult;
    $this->dnsSecKeys = $dnsSecKeys;
  }

}
