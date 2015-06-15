<?php

class DnsSecKey
{

  /**
   * 
   * @var string $Handle
   * @access public
   */
  public $Handle = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @var string $DigestAlgorithm
   * @access public
   */
  public $DigestAlgorithm = null;

  /**
   * 
   * @var string $DigestType
   * @access public
   */
  public $DigestType = null;

  /**
   * 
   * @var string $Digest
   * @access public
   */
  public $Digest = null;

  /**
   * 
   * @var string $Protocol
   * @access public
   */
  public $Protocol = null;

  /**
   * 
   * @var string $KeyType
   * @access public
   */
  public $KeyType = null;

  /**
   * 
   * @var string $KeyAlgorithm
   * @access public
   */
  public $KeyAlgorithm = null;

  /**
   * 
   * @var string $KeyTag
   * @access public
   */
  public $KeyTag = null;

  /**
   * 
   * @var string $PublicKey
   * @access public
   */
  public $PublicKey = null;

  /**
   * 
   * @var string $CreDate
   * @access public
   */
  public $CreDate = null;

  /**
   * 
   * @param string $Handle
   * @param string $Status
   * @param string $DigestAlgorithm
   * @param string $DigestType
   * @param string $Digest
   * @param string $Protocol
   * @param string $KeyType
   * @param string $KeyAlgorithm
   * @param string $KeyTag
   * @param string $PublicKey
   * @param string $CreDate
   * @access public
   */
  public function __construct($Handle, $Status, $DigestAlgorithm, $DigestType, $Digest, $Protocol, $KeyType, $KeyAlgorithm, $KeyTag, $PublicKey, $CreDate)
  {
    $this->Handle = $Handle;
    $this->Status = $Status;
    $this->DigestAlgorithm = $DigestAlgorithm;
    $this->DigestType = $DigestType;
    $this->Digest = $Digest;
    $this->Protocol = $Protocol;
    $this->KeyType = $KeyType;
    $this->KeyAlgorithm = $KeyAlgorithm;
    $this->KeyTag = $KeyTag;
    $this->PublicKey = $PublicKey;
    $this->CreDate = $CreDate;
  }

}
