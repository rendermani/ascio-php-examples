<?php

class Response
{

  /**
   * 
   * @var string $Message
   * @access public
   */
  public $Message = null;

  /**
   * 
   * @var int $ResultCode
   * @access public
   */
  public $ResultCode = null;

  /**
   * 
   * @var string[] $Values
   * @access public
   */
  public $Values = null;

  /**
   * 
   * @param string $Message
   * @param int $ResultCode
   * @param string[] $Values
   * @access public
   */
  public function __construct($Message, $ResultCode, $Values)
  {
    $this->Message = $Message;
    $this->ResultCode = $ResultCode;
    $this->Values = $Values;
  }

}
