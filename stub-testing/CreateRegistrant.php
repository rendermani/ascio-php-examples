<?php

class CreateRegistrant
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var Registrant $registrant
   * @access public
   */
  public $registrant = null;

  /**
   * 
   * @param string $sessionId
   * @param Registrant $registrant
   * @access public
   */
  public function __construct($sessionId, $registrant)
  {
    $this->sessionId = $sessionId;
    $this->registrant = $registrant;
  }

}
