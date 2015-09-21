<?php

class CreateSupportOrderResponse
{

  /**
   * 
   * @var Response $CreateSupportOrderResult
   * @access public
   */
  public $CreateSupportOrderResult = null;

  /**
   * 
   * @var string $orderId
   * @access public
   */
  public $orderId = null;

  /**
   * 
   * @param Response $CreateSupportOrderResult
   * @param string $orderId
   * @access public
   */
  public function __construct($CreateSupportOrderResult, $orderId)
  {
    $this->CreateSupportOrderResult = $CreateSupportOrderResult;
    $this->orderId = $orderId;
  }

}
