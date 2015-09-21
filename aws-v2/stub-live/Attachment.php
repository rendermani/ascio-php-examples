<?php

class Attachment
{

  /**
   * 
   * @var base64Binary $Data
   * @access public
   */
  public $Data = null;

  /**
   * 
   * @var string $FileName
   * @access public
   */
  public $FileName = null;

  /**
   * 
   * @param base64Binary $Data
   * @param string $FileName
   * @access public
   */
  public function __construct($Data, $FileName)
  {
    $this->Data = $Data;
    $this->FileName = $FileName;
  }

}
