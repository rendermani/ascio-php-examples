<?php

class UploadMessage
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $orderId
   * @access public
   */
  public $orderId = null;

  /**
   * 
   * @var Message $message
   * @access public
   */
  public $message = null;

  /**
   * 
   * @param string $sessionId
   * @param string $orderId
   * @param Message $message
   * @access public
   */
  public function __construct($sessionId, $orderId, $message)
  {
    $this->sessionId = $sessionId;
    $this->orderId = $orderId;
    $this->message = $message;
  }

}
