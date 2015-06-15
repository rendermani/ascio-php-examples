<?php

class CreateDocumentation
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var Attachment[] $attachments
   * @access public
   */
  public $attachments = null;

  /**
   * 
   * @param string $sessionId
   * @param Attachment[] $attachments
   * @access public
   */
  public function __construct($sessionId, $attachments)
  {
    $this->sessionId = $sessionId;
    $this->attachments = $attachments;
  }

}
