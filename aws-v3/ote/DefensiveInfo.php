<?php

class DefensiveInfo
{

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @var \DateTime $Expires
     */
    protected $Expires = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

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

    /**
     * @param \DateTime $Created
     */
    public function __construct(\DateTime $Created)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
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
     * @return DefensiveInfo
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return DefensiveInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->Created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Created
     * @return DefensiveInfo
     */
    public function setCreated(\DateTime $Created)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpires()
    {
      if ($this->Expires == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Expires);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Expires
     * @return DefensiveInfo
     */
    public function setExpires(\DateTime $Expires)
    {
      $this->Expires = $Expires->format(\DateTime::ATOM);
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
     * @return DefensiveInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return DefensiveInfo
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
     * @return DefensiveInfo
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
     * @return DefensiveInfo
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
     * @return DefensiveInfo
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
     * @return DefensiveInfo
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
     * @return DefensiveInfo
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
     * @return DefensiveInfo
     */
    public function setReseller($Reseller)
    {
      $this->Reseller = $Reseller;
      return $this;
    }

}
