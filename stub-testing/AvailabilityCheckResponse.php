<?php

class AvailabilityCheckResponse
{

  /**
   * 
   * @var Response $AvailabilityCheckResult
   * @access public
   */
  public $AvailabilityCheckResult = null;

  /**
   * 
   * @var AvailabilityCheckResult[] $results
   * @access public
   */
  public $results = null;

  /**
   * 
   * @param Response $AvailabilityCheckResult
   * @param AvailabilityCheckResult[] $results
   * @access public
   */
  public function __construct($AvailabilityCheckResult, $results)
  {
    $this->AvailabilityCheckResult = $AvailabilityCheckResult;
    $this->results = $results;
  }

}
