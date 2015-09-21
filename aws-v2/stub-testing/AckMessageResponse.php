<?php

class AckMessageResponse
{

  /**
   * 
   * @var Response $AckMessageResult
   * @access public
   */
  public $AckMessageResult = null;

  /**
   * 
   * @param Response $AckMessageResult
   * @access public
   */
  public function __construct($AckMessageResult)
  {
    $this->AckMessageResult = $AckMessageResult;
  }

}
