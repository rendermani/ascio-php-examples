<?php

class UpdateContactResponse
{

  /**
   * 
   * @var Response $UpdateContactResult
   * @access public
   */
  public $UpdateContactResult = null;

  /**
   * 
   * @param Response $UpdateContactResult
   * @access public
   */
  public function __construct($UpdateContactResult)
  {
    $this->UpdateContactResult = $UpdateContactResult;
  }

}
