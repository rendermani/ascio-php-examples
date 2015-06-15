<?php

class CreateContact
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var Contact $contact
   * @access public
   */
  public $contact = null;

  /**
   * 
   * @param string $sessionId
   * @param Contact $contact
   * @access public
   */
  public function __construct($sessionId, $contact)
  {
    $this->sessionId = $sessionId;
    $this->contact = $contact;
  }

}
