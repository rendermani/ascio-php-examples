<?php

class LogInResponse
{

  /**
   * 
   * @var Response $LogInResult
   * @access public
   */
  public $LogInResult = null;

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @param Response $LogInResult
   * @param string $sessionId
   * @access public
   */
  public function __construct($LogInResult, $sessionId)
  {
    $this->LogInResult = $LogInResult;
    $this->sessionId = $sessionId;
  }

}
