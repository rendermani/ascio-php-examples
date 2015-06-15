<?php

class SearchOrder
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var SearchOrderRequest $orderRequest
   * @access public
   */
  public $orderRequest = null;

  /**
   * 
   * @param string $sessionId
   * @param SearchOrderRequest $orderRequest
   * @access public
   */
  public function __construct($sessionId, $orderRequest)
  {
    $this->sessionId = $sessionId;
    $this->orderRequest = $orderRequest;
  }

}
