<?php

class TradeMark
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Country
   * @access public
   */
  public $Country = null;

  /**
   * 
   * @var dateTime $Date
   * @access public
   */
  public $Date = null;

  /**
   * 
   * @var string $Number
   * @access public
   */
  public $Number = null;

  /**
   * 
   * @var string $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var string $Contact
   * @access public
   */
  public $Contact = null;

  /**
   * 
   * @var string $ContactLanguage
   * @access public
   */
  public $ContactLanguage = null;

  /**
   * 
   * @var string $DocumentationLanguage
   * @access public
   */
  public $DocumentationLanguage = null;

  /**
   * 
   * @var string $SecondContact
   * @access public
   */
  public $SecondContact = null;

  /**
   * 
   * @var string $ThirdContact
   * @access public
   */
  public $ThirdContact = null;

  /**
   * 
   * @var dateTime $RegDate
   * @access public
   */
  public $RegDate = null;

  /**
   * 
   * @param string $Name
   * @param string $Country
   * @param dateTime $Date
   * @param string $Number
   * @param string $Type
   * @param string $Contact
   * @param string $ContactLanguage
   * @param string $DocumentationLanguage
   * @param string $SecondContact
   * @param string $ThirdContact
   * @param dateTime $RegDate
   * @access public
   */
  public function __construct($Name, $Country, $Date, $Number, $Type, $Contact, $ContactLanguage, $DocumentationLanguage, $SecondContact, $ThirdContact, $RegDate)
  {
    $this->Name = $Name;
    $this->Country = $Country;
    $this->Date = $Date;
    $this->Number = $Number;
    $this->Type = $Type;
    $this->Contact = $Contact;
    $this->ContactLanguage = $ContactLanguage;
    $this->DocumentationLanguage = $DocumentationLanguage;
    $this->SecondContact = $SecondContact;
    $this->ThirdContact = $ThirdContact;
    $this->RegDate = $RegDate;
  }

}
