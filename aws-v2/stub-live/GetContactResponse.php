<?php

class GetContactResponse
{

  /**
   * 
   * @var Response $GetContactResult
   * @access public
   */
  public $GetContactResult = null;

  /**
   * 
   * @var Contact $contact
   * @access public
   */
  public $contact = null;

  /**
   * 
   * @param Response $GetContactResult
   * @param Contact $contact
   * @access public
   */
  public function __construct($GetContactResult, $contact)
  {
    $this->GetContactResult = $GetContactResult;
    $this->contact = $contact;
  }

}
