<?php

class AvailabilityCheck
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var String[] $domains
   * @access public
   */
  public $domains = null;

  /**
   * 
   * @var String[] $tlds
   * @access public
   */
  public $tlds = null;

  /**
   * 
   * @var QualityType $quality
   * @access public
   */
  public $quality = null;

  /**
   * 
   * @param string $sessionId
   * @param String[] $domains
   * @param String[] $tlds
   * @param QualityType $quality
   * @access public
   */
  public function __construct($sessionId, $domains, $tlds, $quality)
  {
    $this->sessionId = $sessionId;
    $this->domains = $domains;
    $this->tlds = $tlds;
    $this->quality = $quality;
  }

}
