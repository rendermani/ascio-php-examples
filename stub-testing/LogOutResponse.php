<?php

class LogOutResponse
{

  /**
   * 
   * @var Response $LogOutResult
   * @access public
   */
  public $LogOutResult = null;

  /**
   * 
   * @param Response $LogOutResult
   * @access public
   */
  public function __construct($LogOutResult)
  {
    $this->LogOutResult = $LogOutResult;
  }

}
