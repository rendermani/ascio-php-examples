<?php

class WhoisResponse
{

  /**
   * 
   * @var Response $WhoisResult
   * @access public
   */
  public $WhoisResult = null;

  /**
   * 
   * @var string $whoisData
   * @access public
   */
  public $whoisData = null;

  /**
   * 
   * @param Response $WhoisResult
   * @param string $whoisData
   * @access public
   */
  public function __construct($WhoisResult, $whoisData)
  {
    $this->WhoisResult = $WhoisResult;
    $this->whoisData = $whoisData;
  }

}
