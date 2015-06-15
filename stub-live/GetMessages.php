<?php

class GetMessages
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
   * @param string $sessionId
   * @param string $orderId
   * @access public
   */
  public function __construct($sessionId, $orderId)
  {
    $this->sessionId = $sessionId;
    $this->orderId = $orderId;
  }

}
