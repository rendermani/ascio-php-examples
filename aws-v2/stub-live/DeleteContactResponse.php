<?php

class DeleteContactResponse
{

  /**
   * 
   * @var Response $DeleteContactResult
   * @access public
   */
  public $DeleteContactResult = null;

  /**
   * 
   * @param Response $DeleteContactResult
   * @access public
   */
  public function __construct($DeleteContactResult)
  {
    $this->DeleteContactResult = $DeleteContactResult;
  }

}
