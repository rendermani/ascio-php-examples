<?php

class GetDomain
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $domainHandle
   * @access public
   */
  public $domainHandle = null;

  /**
   * 
   * @param string $sessionId
   * @param string $domainHandle
   * @access public
   */
  public function __construct($sessionId, $domainHandle)
  {
    $this->sessionId = $sessionId;
    $this->domainHandle = $domainHandle;
  }

}
