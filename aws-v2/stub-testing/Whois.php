<?php

class Whois
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $domainName
   * @access public
   */
  public $domainName = null;

  /**
   * 
   * @param string $sessionId
   * @param string $domainName
   * @access public
   */
  public function __construct($sessionId, $domainName)
  {
    $this->sessionId = $sessionId;
    $this->domainName = $domainName;
  }

}
