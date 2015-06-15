<?php

class Registrant
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
   * @var string $Name
   * @access public
   */
  public $Name = null;

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
   * @var string $PostalCode
   * @access public
   */
  public $PostalCode = null;

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
   * @var string $RegistrantType
   * @access public
   */
  public $RegistrantType = null;

  /**
   * 
   * @var string $VatNumber
   * @access public
   */
  public $VatNumber = null;

  /**
   * 
   * @var string $RegistrantDate
   * @access public
   */
  public $RegistrantDate = null;

  /**
   * 
   * @var string $NexusCategory
   * @access public
   */
  public $NexusCategory = null;

  /**
   * 
   * @var string $RegistrantNumber
   * @access public
   */
  public $RegistrantNumber = null;

  /**
   * 
   * @var string $Details
   * @access public
   */
  public $Details = null;

  /**
   * 
   * @param dateTime $CreDate
   * @param string $Status
   * @param string $Handle
   * @param string $Name
   * @param string $OrgName
   * @param string $Address1
   * @param string $Address2
   * @param string $City
   * @param string $State
   * @param string $PostalCode
   * @param string $CountryCode
   * @param string $Email
   * @param string $Phone
   * @param string $Fax
   * @param string $RegistrantType
   * @param string $VatNumber
   * @param string $RegistrantDate
   * @param string $NexusCategory
   * @param string $RegistrantNumber
   * @param string $Details
   * @access public
   */
  public function __construct($CreDate, $Status, $Handle, $Name, $OrgName, $Address1, $Address2, $City, $State, $PostalCode, $CountryCode, $Email, $Phone, $Fax, $RegistrantType, $VatNumber, $RegistrantDate, $NexusCategory, $RegistrantNumber, $Details)
  {
    $this->CreDate = $CreDate;
    $this->Status = $Status;
    $this->Handle = $Handle;
    $this->Name = $Name;
    $this->OrgName = $OrgName;
    $this->Address1 = $Address1;
    $this->Address2 = $Address2;
    $this->City = $City;
    $this->State = $State;
    $this->PostalCode = $PostalCode;
    $this->CountryCode = $CountryCode;
    $this->Email = $Email;
    $this->Phone = $Phone;
    $this->Fax = $Fax;
    $this->RegistrantType = $RegistrantType;
    $this->VatNumber = $VatNumber;
    $this->RegistrantDate = $RegistrantDate;
    $this->NexusCategory = $NexusCategory;
    $this->RegistrantNumber = $RegistrantNumber;
    $this->Details = $Details;
  }

}
