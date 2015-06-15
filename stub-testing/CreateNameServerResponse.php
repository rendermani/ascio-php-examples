<?php

class CreateNameServerResponse
{

  /**
   * 
   * @var Response $CreateNameServerResult
   * @access public
   */
  public $CreateNameServerResult = null;

  /**
   * 
   * @var NameServer $nameServer
   * @access public
   */
  public $nameServer = null;

  /**
   * 
   * @param Response $CreateNameServerResult
   * @param NameServer $nameServer
   * @access public
   */
  public function __construct($CreateNameServerResult, $nameServer)
  {
    $this->CreateNameServerResult = $CreateNameServerResult;
    $this->nameServer = $nameServer;
  }

}
