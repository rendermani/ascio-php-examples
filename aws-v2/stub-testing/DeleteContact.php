<?php

class DeleteContact
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $contactHandle
   * @access public
   */
  public $contactHandle = null;

  /**
   * 
   * @param string $sessionId
   * @param string $contactHandle
   * @access public
   */
  public function __construct($sessionId, $contactHandle)
  {
    $this->sessionId = $sessionId;
    $this->contactHandle = $contactHandle;
  }

}
