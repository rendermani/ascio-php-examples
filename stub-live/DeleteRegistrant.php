<?php

class DeleteRegistrant
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $registrantHandle
   * @access public
   */
  public $registrantHandle = null;

  /**
   * 
   * @param string $sessionId
   * @param string $registrantHandle
   * @access public
   */
  public function __construct($sessionId, $registrantHandle)
  {
    $this->sessionId = $sessionId;
    $this->registrantHandle = $registrantHandle;
  }

}
