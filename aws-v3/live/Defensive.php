<?php

class Defensive
{

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $MarkHandle
     */
    protected $MarkHandle = null;

    /**
     * @var string $AuthInfo
     */
    protected $AuthInfo = null;

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var Registrant $Owner
     */
    protected $Owner = null;

    /**
     * @var Contact $Admin
     */
    protected $Admin = null;

    /**
     * @var Contact $Tech
     */
    protected $Tech = null;

    /**
     * @var Contact $Billing
     */
    protected $Billing = null;

    /**
     * @var Contact $Reseller
     */
    protected $Reseller = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param string $Handle
     * @return Defensive
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return Defensive
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarkHandle()
    {
      return $this->MarkHandle;
    }

    /**
     * @param string $MarkHandle
     * @return Defensive
     */
    public function setMarkHandle($MarkHandle)
    {
      $this->MarkHandle = $MarkHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthInfo()
    {
      return $this->AuthInfo;
    }

    /**
     * @param string $AuthInfo
     * @return Defensive
     */
    public function setAuthInfo($AuthInfo)
    {
      $this->AuthInfo = $AuthInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param string $Encoding
     * @return Defensive
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return Registrant
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param Registrant $Owner
     * @return Defensive
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getAdmin()
    {
      return $this->Admin;
    }

    /**
     * @param Contact $Admin
     * @return Defensive
     */
    public function setAdmin($Admin)
    {
      $this->Admin = $Admin;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getTech()
    {
      return $this->Tech;
    }

    /**
     * @param Contact $Tech
     * @return Defensive
     */
    public function setTech($Tech)
    {
      $this->Tech = $Tech;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param Contact $Billing
     * @return Defensive
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getReseller()
    {
      return $this->Reseller;
    }

    /**
     * @param Contact $Reseller
     * @return Defensive
     */
    public function setReseller($Reseller)
    {
      $this->Reseller = $Reseller;
      return $this;
    }

}
