<?php

class SearchOrderResponse
{

  /**
   * 
   * @var Response $SearchOrderResult
   * @access public
   */
  public $SearchOrderResult = null;

  /**
   * 
   * @var int $totalOrders
   * @access public
   */
  public $totalOrders = null;

  /**
   * 
   * @var Order[] $orders
   * @access public
   */
  public $orders = null;

  /**
   * 
   * @param Response $SearchOrderResult
   * @param int $totalOrders
   * @param Order[] $orders
   * @access public
   */
  public function __construct($SearchOrderResult, $totalOrders, $orders)
  {
    $this->SearchOrderResult = $SearchOrderResult;
    $this->totalOrders = $totalOrders;
    $this->orders = $orders;
  }

}
