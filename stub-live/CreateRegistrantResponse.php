<?php

class CreateRegistrantResponse
{

  /**
   * 
   * @var Response $CreateRegistrantResult
   * @access public
   */
  public $CreateRegistrantResult = null;

  /**
   * 
   * @var Registrant $registrant
   * @access public
   */
  public $registrant = null;

  /**
   * 
   * @param Response $CreateRegistrantResult
   * @param Registrant $registrant
   * @access public
   */
  public function __construct($CreateRegistrantResult, $registrant)
  {
    $this->CreateRegistrantResult = $CreateRegistrantResult;
    $this->registrant = $registrant;
  }

}
