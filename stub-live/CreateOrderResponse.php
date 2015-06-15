<?php

class CreateOrderResponse
{

  /**
   * 
   * @var Response $CreateOrderResult
   * @access public
   */
  public $CreateOrderResult = null;

  /**
   * 
   * @var Order $order
   * @access public
   */
  public $order = null;

  /**
   * 
   * @param Response $CreateOrderResult
   * @param Order $order
   * @access public
   */
  public function __construct($CreateOrderResult, $order)
  {
    $this->CreateOrderResult = $CreateOrderResult;
    $this->order = $order;
  }

}
