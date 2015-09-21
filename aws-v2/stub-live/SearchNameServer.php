<?php

class SearchNameServer
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var SearchCriteria $criteria
   * @access public
   */
  public $criteria = null;

  /**
   * 
   * @param string $sessionId
   * @param SearchCriteria $criteria
   * @access public
   */
  public function __construct($sessionId, $criteria)
  {
    $this->sessionId = $sessionId;
    $this->criteria = $criteria;
  }

}
