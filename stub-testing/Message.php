<?php

class Message
{

  /**
   * 
   * @var Attachment[] $Attachments
   * @access public
   */
  public $Attachments = null;

  /**
   * 
   * @var string $Body
   * @access public
   */
  public $Body = null;

  /**
   * 
   * @var dateTime $Created
   * @access public
   */
  public $Created = null;

  /**
   * 
   * @var string $FromAddress
   * @access public
   */
  public $FromAddress = null;

  /**
   * 
   * @var string $Subject
   * @access public
   */
  public $Subject = null;

  /**
   * 
   * @var string $ToAddress
   * @access public
   */
  public $ToAddress = null;

  /**
   * 
   * @var MessageType $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param Attachment[] $Attachments
   * @param string $Body
   * @param dateTime $Created
   * @param string $FromAddress
   * @param string $Subject
   * @param string $ToAddress
   * @param MessageType $Type
   * @access public
   */
  public function __construct($Attachments, $Body, $Created, $FromAddress, $Subject, $ToAddress, $Type)
  {
    $this->Attachments = $Attachments;
    $this->Body = $Body;
    $this->Created = $Created;
    $this->FromAddress = $FromAddress;
    $this->Subject = $Subject;
    $this->ToAddress = $ToAddress;
    $this->Type = $Type;
  }

}
