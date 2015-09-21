<?php

class PagingInfo
{

  /**
   * 
   * @var int $PageIndex
   * @access public
   */
  public $PageIndex = null;

  /**
   * 
   * @var int $PageSize
   * @access public
   */
  public $PageSize = null;

  /**
   * 
   * @param int $PageIndex
   * @param int $PageSize
   * @access public
   */
  public function __construct($PageIndex, $PageSize)
  {
    $this->PageIndex = $PageIndex;
    $this->PageSize = $PageSize;
  }

}
