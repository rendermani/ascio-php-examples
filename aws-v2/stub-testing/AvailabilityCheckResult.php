<?php

class AvailabilityCheckResult
{

  /**
   * 
   * @var string $DomainName
   * @access public
   */
  public $DomainName = null;

  /**
   * 
   * @var QualityType $Quality
   * @access public
   */
  public $Quality = null;

  /**
   * 
   * @var int $StatusCode
   * @access public
   */
  public $StatusCode = null;

  /**
   * 
   * @var string $StatusMessage
   * @access public
   */
  public $StatusMessage = null;

  /**
   * 
   * @param string $DomainName
   * @param QualityType $Quality
   * @param int $StatusCode
   * @param string $StatusMessage
   * @access public
   */
  public function __construct($DomainName, $Quality, $StatusCode, $StatusMessage)
  {
    $this->DomainName = $DomainName;
    $this->Quality = $Quality;
    $this->StatusCode = $StatusCode;
    $this->StatusMessage = $StatusMessage;
  }

}
