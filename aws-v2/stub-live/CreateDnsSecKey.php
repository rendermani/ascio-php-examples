<?php

class CreateDnsSecKey
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var DnsSecKey $dnsSecKey
   * @access public
   */
  public $dnsSecKey = null;

  /**
   * 
   * @param string $sessionId
   * @param DnsSecKey $dnsSecKey
   * @access public
   */
  public function __construct($sessionId, $dnsSecKey)
  {
    $this->sessionId = $sessionId;
    $this->dnsSecKey = $dnsSecKey;
  }

}
