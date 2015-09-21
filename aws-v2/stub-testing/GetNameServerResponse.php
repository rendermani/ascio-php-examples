<?php

class GetNameServerResponse
{

  /**
   * 
   * @var Response $GetNameServerResult
   * @access public
   */
  public $GetNameServerResult = null;

  /**
   * 
   * @var NameServer $nameServer
   * @access public
   */
  public $nameServer = null;

  /**
   * 
   * @param Response $GetNameServerResult
   * @param NameServer $nameServer
   * @access public
   */
  public function __construct($GetNameServerResult, $nameServer)
  {
    $this->GetNameServerResult = $GetNameServerResult;
    $this->nameServer = $nameServer;
  }

}
