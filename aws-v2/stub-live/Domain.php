<?php

class Domain
{

  /**
   * 
   * @var string $DomainName
   * @access public
   */
  public $DomainName = null;

  /**
   * 
   * @var string $DomainHandle
   * @access public
   */
  public $DomainHandle = null;

  /**
   * 
   * @var int $RegPeriod
   * @access public
   */
  public $RegPeriod = null;

  /**
   * 
   * @var int $RenewPeriod
   * @access public
   */
  public $RenewPeriod = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @var string $AuthInfo
   * @access public
   */
  public $AuthInfo = null;

  /**
   * 
   * @var dateTime $CreDate
   * @access public
   */
  public $CreDate = null;

  /**
   * 
   * @var dateTime $ExpDate
   * @access public
   */
  public $ExpDate = null;

  /**
   * 
   * @var string $EncodingType
   * @access public
   */
  public $EncodingType = null;

  /**
   * 
   * @var string $DomainPurpose
   * @access public
   */
  public $DomainPurpose = null;

  /**
   * 
   * @var string $Comment
   * @access public
   */
  public $Comment = null;

  /**
   * 
   * @var string $TransferLock
   * @access public
   */
  public $TransferLock = null;

  /**
   * 
   * @var string $DeleteLock
   * @access public
   */
  public $DeleteLock = null;

  /**
   * 
   * @var string $UpdateLock
   * @access public
   */
  public $UpdateLock = null;

  /**
   * 
   * @var string $QueueType
   * @access public
   */
  public $QueueType = null;

  /**
   * 
   * @var Registrant $Registrant
   * @access public
   */
  public $Registrant = null;

  /**
   * 
   * @var Contact $AdminContact
   * @access public
   */
  public $AdminContact = null;

  /**
   * 
   * @var Contact $TechContact
   * @access public
   */
  public $TechContact = null;

  /**
   * 
   * @var Contact $BillingContact
   * @access public
   */
  public $BillingContact = null;

  /**
   * 
   * @var Contact $ResellerContact
   * @access public
   */
  public $ResellerContact = null;

  /**
   * 
   * @var NameServers $NameServers
   * @access public
   */
  public $NameServers = null;

  /**
   * 
   * @var TradeMark $Trademark
   * @access public
   */
  public $Trademark = null;

  /**
   * 
   * @var DnsSecKeys $DnsSecKeys
   * @access public
   */
  public $DnsSecKeys = null;

  /**
   * 
   * @param string $DomainName
   * @param string $DomainHandle
   * @param int $RegPeriod
   * @param int $RenewPeriod
   * @param string $Status
   * @param string $AuthInfo
   * @param dateTime $CreDate
   * @param dateTime $ExpDate
   * @param string $EncodingType
   * @param string $DomainPurpose
   * @param string $Comment
   * @param string $TransferLock
   * @param string $DeleteLock
   * @param string $UpdateLock
   * @param string $QueueType
   * @param Registrant $Registrant
   * @param Contact $AdminContact
   * @param Contact $TechContact
   * @param Contact $BillingContact
   * @param Contact $ResellerContact
   * @param NameServers $NameServers
   * @param TradeMark $Trademark
   * @param DnsSecKeys $DnsSecKeys
   * @access public
   */
  public function __construct($DomainName, $DomainHandle, $RegPeriod, $RenewPeriod, $Status, $AuthInfo, $CreDate, $ExpDate, $EncodingType, $DomainPurpose, $Comment, $TransferLock, $DeleteLock, $UpdateLock, $QueueType, $Registrant, $AdminContact, $TechContact, $BillingContact, $ResellerContact, $NameServers, $Trademark, $DnsSecKeys)
  {
    $this->DomainName = $DomainName;
    $this->DomainHandle = $DomainHandle;
    $this->RegPeriod = $RegPeriod;
    $this->RenewPeriod = $RenewPeriod;
    $this->Status = $Status;
    $this->AuthInfo = $AuthInfo;
    $this->CreDate = $CreDate;
    $this->ExpDate = $ExpDate;
    $this->EncodingType = $EncodingType;
    $this->DomainPurpose = $DomainPurpose;
    $this->Comment = $Comment;
    $this->TransferLock = $TransferLock;
    $this->DeleteLock = $DeleteLock;
    $this->UpdateLock = $UpdateLock;
    $this->QueueType = $QueueType;
    $this->Registrant = $Registrant;
    $this->AdminContact = $AdminContact;
    $this->TechContact = $TechContact;
    $this->BillingContact = $BillingContact;
    $this->ResellerContact = $ResellerContact;
    $this->NameServers = $NameServers;
    $this->Trademark = $Trademark;
    $this->DnsSecKeys = $DnsSecKeys;
  }

}
