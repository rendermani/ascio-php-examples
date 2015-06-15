<?php

class Contact
{

  /**
   * 
   * @var dateTime $CreDate
   * @access public
   */
  public $CreDate = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @var string $Handle
   * @access public
   */
  public $Handle = null;

  /**
   * 
   * @var string $FirstName
   * @access public
   */
  public $FirstName = null;

  /**
   * 
   * @var string $LastName
   * @access public
   */
  public $LastName = null;

  /**
   * 
   * @var string $OrgName
   * @access public
   */
  public $OrgName = null;

  /**
   * 
   * @var string $Address1
   * @access public
   */
  public $Address1 = null;

  /**
   * 
   * @var string $Address2
   * @access public
   */
  public $Address2 = null;

  /**
   * 
   * @var string $PostalCode
   * @access public
   */
  public $PostalCode = null;

  /**
   * 
   * @var string $City
   * @access public
   */
  public $City = null;

  /**
   * 
   * @var string $State
   * @access public
   */
  public $State = null;

  /**
   * 
   * @var string $CountryCode
   * @access public
   */
  public $CountryCode = null;

  /**
   * 
   * @var string $Email
   * @access public
   */
  public $Email = null;

  /**
   * 
   * @var string $Phone
   * @access public
   */
  public $Phone = null;

  /**
   * 
   * @var string $Fax
   * @access public
   */
  public $Fax = null;

  /**
   * 
   * @var string $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var string $Details
   * @access public
   */
  public $Details = null;

  /**
   * 
   * @var string $OrganisationNumber
   * @access public
   */
  public $OrganisationNumber = null;

  /**
   * 
   * @param dateTime $CreDate
   * @param string $Status
   * @param string $Handle
   * @param string $FirstName
   * @param string $LastName
   * @param string $OrgName
   * @param string $Address1
   * @param string $Address2
   * @param string $PostalCode
   * @param string $City
   * @param string $State
   * @param string $CountryCode
   * @param string $Email
   * @param string $Phone
   * @param string $Fax
   * @param string $Type
   * @param string $Details
   * @param string $OrganisationNumber
   * @access public
   */
  public function __construct($CreDate, $Status, $Handle, $FirstName, $LastName, $OrgName, $Address1, $Address2, $PostalCode, $City, $State, $CountryCode, $Email, $Phone, $Fax, $Type, $Details, $OrganisationNumber)
  {
    $this->CreDate = $CreDate;
    $this->Status = $Status;
    $this->Handle = $Handle;
    $this->FirstName = $FirstName;
    $this->LastName = $LastName;
    $this->OrgName = $OrgName;
    $this->Address1 = $Address1;
    $this->Address2 = $Address2;
    $this->PostalCode = $PostalCode;
    $this->City = $City;
    $this->State = $State;
    $this->CountryCode = $CountryCode;
    $this->Email = $Email;
    $this->Phone = $Phone;
    $this->Fax = $Fax;
    $this->Type = $Type;
    $this->Details = $Details;
    $this->OrganisationNumber = $OrganisationNumber;
  }

}
