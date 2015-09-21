<?php

class CallbackStatus
{

  /**
   * 
   * @var string $Message
   * @access public
   */
  public $Message = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @param string $Message
   * @param string $Status
   * @access public
   */
  public function __construct($Message, $Status)
  {
    $this->Message = $Message;
    $this->Status = $Status;
  }

}
