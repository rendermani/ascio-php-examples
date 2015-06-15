<?php

class SearchContactResponse
{

  /**
   * 
   * @var Response $SearchContactResult
   * @access public
   */
  public $SearchContactResult = null;

  /**
   * 
   * @var Contact[] $contacts
   * @access public
   */
  public $contacts = null;

  /**
   * 
   * @param Response $SearchContactResult
   * @param Contact[] $contacts
   * @access public
   */
  public function __construct($SearchContactResult, $contacts)
  {
    $this->SearchContactResult = $SearchContactResult;
    $this->contacts = $contacts;
  }

}
