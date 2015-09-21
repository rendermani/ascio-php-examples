<?php

class DeleteNameServerResponse
{

  /**
   * 
   * @var Response $DeleteNameServerResult
   * @access public
   */
  public $DeleteNameServerResult = null;

  /**
   * 
   * @param Response $DeleteNameServerResult
   * @access public
   */
  public function __construct($DeleteNameServerResult)
  {
    $this->DeleteNameServerResult = $DeleteNameServerResult;
  }

}
