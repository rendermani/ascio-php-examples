<?php

class GetDnsSecKey
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $dnsSecKeyHandle
   * @access public
   */
  public $dnsSecKeyHandle = null;

  /**
   * 
   * @param string $sessionId
   * @param string $dnsSecKeyHandle
   * @access public
   */
  public function __construct($sessionId, $dnsSecKeyHandle)
  {
    $this->sessionId = $sessionId;
    $this->dnsSecKeyHandle = $dnsSecKeyHandle;
  }

}
