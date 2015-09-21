<?php

class CreateContactResponse
{

  /**
   * 
   * @var Response $CreateContactResult
   * @access public
   */
  public $CreateContactResult = null;

  /**
   * 
   * @var Contact $contact
   * @access public
   */
  public $contact = null;

  /**
   * 
   * @param Response $CreateContactResult
   * @param Contact $contact
   * @access public
   */
  public function __construct($CreateContactResult, $contact)
  {
    $this->CreateContactResult = $CreateContactResult;
    $this->contact = $contact;
  }

}
