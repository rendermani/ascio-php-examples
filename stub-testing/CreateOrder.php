<?php

class CreateOrder
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var Order $order
   * @access public
   */
  public $order = null;

  /**
   * 
   * @param string $sessionId
   * @param Order $order
   * @access public
   */
  public function __construct($sessionId, $order)
  {
    $this->sessionId = $sessionId;
    $this->order = $order;
  }

}
