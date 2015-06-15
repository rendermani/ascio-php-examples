<?php

class SearchNameServerResponse
{

  /**
   * 
   * @var Response $SearchNameServerResult
   * @access public
   */
  public $SearchNameServerResult = null;

  /**
   * 
   * @var NameServer[] $nameServers
   * @access public
   */
  public $nameServers = null;

  /**
   * 
   * @param Response $SearchNameServerResult
   * @param NameServer[] $nameServers
   * @access public
   */
  public function __construct($SearchNameServerResult, $nameServers)
  {
    $this->SearchNameServerResult = $SearchNameServerResult;
    $this->nameServers = $nameServers;
  }

}
