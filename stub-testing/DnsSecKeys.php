<?php

class DnsSecKeys
{

  /**
   * 
   * @var DnsSecKey $DnsSecKey1
   * @access public
   */
  public $DnsSecKey1 = null;

  /**
   * 
   * @var DnsSecKey $DnsSecKey2
   * @access public
   */
  public $DnsSecKey2 = null;

  /**
   * 
   * @var DnsSecKey $DnsSecKey3
   * @access public
   */
  public $DnsSecKey3 = null;

  /**
   * 
   * @var DnsSecKey $DnsSecKey4
   * @access public
   */
  public $DnsSecKey4 = null;

  /**
   * 
   * @var DnsSecKey $DnsSecKey5
   * @access public
   */
  public $DnsSecKey5 = null;

  /**
   * 
   * @param DnsSecKey $DnsSecKey1
   * @param DnsSecKey $DnsSecKey2
   * @param DnsSecKey $DnsSecKey3
   * @param DnsSecKey $DnsSecKey4
   * @param DnsSecKey $DnsSecKey5
   * @access public
   */
  public function __construct($DnsSecKey1, $DnsSecKey2, $DnsSecKey3, $DnsSecKey4, $DnsSecKey5)
  {
    $this->DnsSecKey1 = $DnsSecKey1;
    $this->DnsSecKey2 = $DnsSecKey2;
    $this->DnsSecKey3 = $DnsSecKey3;
    $this->DnsSecKey4 = $DnsSecKey4;
    $this->DnsSecKey5 = $DnsSecKey5;
  }

}
