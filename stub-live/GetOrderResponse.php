<?php

class GetOrderResponse
{

  /**
   * 
   * @var Response $GetOrderResult
   * @access public
   */
  public $GetOrderResult = null;

  /**
   * 
   * @var Order $order
   * @access public
   */
  public $order = null;

  /**
   * 
   * @param Response $GetOrderResult
   * @param Order $order
   * @access public
   */
  public function __construct($GetOrderResult, $order)
  {
    $this->GetOrderResult = $GetOrderResult;
    $this->order = $order;
  }

}
