<?php

class SearchRegistrantResponse
{

  /**
   * 
   * @var Response $SearchRegistrantResult
   * @access public
   */
  public $SearchRegistrantResult = null;

  /**
   * 
   * @var Registrant[] $registrants
   * @access public
   */
  public $registrants = null;

  /**
   * 
   * @param Response $SearchRegistrantResult
   * @param Registrant[] $registrants
   * @access public
   */
  public function __construct($SearchRegistrantResult, $registrants)
  {
    $this->SearchRegistrantResult = $SearchRegistrantResult;
    $this->registrants = $registrants;
  }

}
