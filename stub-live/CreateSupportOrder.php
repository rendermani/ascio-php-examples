<?php

class CreateSupportOrder
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $subject
   * @access public
   */
  public $subject = null;

  /**
   * 
   * @var string $body
   * @access public
   */
  public $body = null;

  /**
   * 
   * @var Attachment[] $attachments
   * @access public
   */
  public $attachments = null;

  /**
   * 
   * @param string $sessionId
   * @param string $subject
   * @param string $body
   * @param Attachment[] $attachments
   * @access public
   */
  public function __construct($sessionId, $subject, $body, $attachments)
  {
    $this->sessionId = $sessionId;
    $this->subject = $subject;
    $this->body = $body;
    $this->attachments = $attachments;
  }

}
