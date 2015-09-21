<?php

class ValidateOrderResponse
{

  /**
   * 
   * @var Response $ValidateOrderResult
   * @access public
   */
  public $ValidateOrderResult = null;

  /**
   * 
   * @param Response $ValidateOrderResult
   * @access public
   */
  public function __construct($ValidateOrderResult)
  {
    $this->ValidateOrderResult = $ValidateOrderResult;
  }

}
