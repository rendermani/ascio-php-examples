<?php

class GetMessageQueue
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var int $msgId
   * @access public
   */
  public $msgId = null;

  /**
   * 
   * @param string $sessionId
   * @param int $msgId
   * @access public
   */
  public function __construct($sessionId, $msgId)
  {
    $this->sessionId = $sessionId;
    $this->msgId = $msgId;
  }

}
