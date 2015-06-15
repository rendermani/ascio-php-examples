<?php

class SearchCriteria
{

  /**
   * 
   * @var Clause[] $Clauses
   * @access public
   */
  public $Clauses = null;

  /**
   * 
   * @var SearchModeType $Mode
   * @access public
   */
  public $Mode = null;

  /**
   * 
   * @var string[] $Withoutstates
   * @access public
   */
  public $Withoutstates = null;

  /**
   * 
   * @var string[] $Withstates
   * @access public
   */
  public $Withstates = null;

  /**
   * 
   * @param Clause[] $Clauses
   * @param SearchModeType $Mode
   * @param string[] $Withoutstates
   * @param string[] $Withstates
   * @access public
   */
  public function __construct($Clauses, $Mode, $Withoutstates, $Withstates)
  {
    $this->Clauses = $Clauses;
    $this->Mode = $Mode;
    $this->Withoutstates = $Withoutstates;
    $this->Withstates = $Withstates;
  }

}
