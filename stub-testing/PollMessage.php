<?php

class PollMessage
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var MessageType $msgType
   * @access public
   */
  public $msgType = null;

  /**
   * 
   * @param string $sessionId
   * @param MessageType $msgType
   * @access public
   */
  public function __construct($sessionId, $msgType)
  {
    $this->sessionId = $sessionId;
    $this->msgType = $msgType;
  }

}
