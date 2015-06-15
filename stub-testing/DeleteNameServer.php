<?php

class DeleteNameServer
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $nameServerHandle
   * @access public
   */
  public $nameServerHandle = null;

  /**
   * 
   * @param string $sessionId
   * @param string $nameServerHandle
   * @access public
   */
  public function __construct($sessionId, $nameServerHandle)
  {
    $this->sessionId = $sessionId;
    $this->nameServerHandle = $nameServerHandle;
  }

}
