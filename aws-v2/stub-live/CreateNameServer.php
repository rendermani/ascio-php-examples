<?php

class CreateNameServer
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var NameServer $nameServer
   * @access public
   */
  public $nameServer = null;

  /**
   * 
   * @param string $sessionId
   * @param NameServer $nameServer
   * @access public
   */
  public function __construct($sessionId, $nameServer)
  {
    $this->sessionId = $sessionId;
    $this->nameServer = $nameServer;
  }

}
