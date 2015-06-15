<?php

class DeleteRegistrantResponse
{

  /**
   * 
   * @var Response $DeleteRegistrantResult
   * @access public
   */
  public $DeleteRegistrantResult = null;

  /**
   * 
   * @param Response $DeleteRegistrantResult
   * @access public
   */
  public function __construct($DeleteRegistrantResult)
  {
    $this->DeleteRegistrantResult = $DeleteRegistrantResult;
  }

}
