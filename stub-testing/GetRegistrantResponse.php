<?php

class GetRegistrantResponse
{

  /**
   * 
   * @var Response $GetRegistrantResult
   * @access public
   */
  public $GetRegistrantResult = null;

  /**
   * 
   * @var Registrant $registrant
   * @access public
   */
  public $registrant = null;

  /**
   * 
   * @param Response $GetRegistrantResult
   * @param Registrant $registrant
   * @access public
   */
  public function __construct($GetRegistrantResult, $registrant)
  {
    $this->GetRegistrantResult = $GetRegistrantResult;
    $this->registrant = $registrant;
  }

}
