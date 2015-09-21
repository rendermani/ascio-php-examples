<?php

class NameServer
{

  /**
   * 
   * @var dateTime $CreDate
   * @access public
   */
  public $CreDate = null;

  /**
   * 
   * @var string $Handle
   * @access public
   */
  public $Handle = null;

  /**
   * 
   * @var string $HostName
   * @access public
   */
  public $HostName = null;

  /**
   * 
   * @var string $IpAddress
   * @access public
   */
  public $IpAddress = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @var string $IpV6Address
   * @access public
   */
  public $IpV6Address = null;

  /**
   * 
   * @var string $Details
   * @access public
   */
  public $Details = null;

  /**
   * 
   * @param dateTime $CreDate
   * @param string $Handle
   * @param string $HostName
   * @param string $IpAddress
   * @param string $Status
   * @param string $IpV6Address
   * @param string $Details
   * @access public
   */
  public function __construct($CreDate, $Handle, $HostName, $IpAddress, $Status, $IpV6Address, $Details)
  {
    $this->CreDate = $CreDate;
    $this->Handle = $Handle;
    $this->HostName = $HostName;
    $this->IpAddress = $IpAddress;
    $this->Status = $Status;
    $this->IpV6Address = $IpV6Address;
    $this->Details = $Details;
  }

}
