<?php

class Clause
{

  /**
   * 
   * @var string $Attribute
   * @access public
   */
  public $Attribute = null;

  /**
   * 
   * @var SearchOperatorType $Operator
   * @access public
   */
  public $Operator = null;

  /**
   * 
   * @var string $Value
   * @access public
   */
  public $Value = null;

  /**
   * 
   * @param string $Attribute
   * @param SearchOperatorType $Operator
   * @param string $Value
   * @access public
   */
  public function __construct($Attribute, $Operator, $Value)
  {
    $this->Attribute = $Attribute;
    $this->Operator = $Operator;
    $this->Value = $Value;
  }

}
