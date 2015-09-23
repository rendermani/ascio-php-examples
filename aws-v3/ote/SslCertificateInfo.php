<?php

class SslCertificateInfo
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
     * @var string $CommonName
     */
    protected $CommonName = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var WebServerType $WebServerType
     */
    protected $WebServerType = null;

    /**
     * @var string $ApproverEmail
     */
    protected $ApproverEmail = null;

    /**
     * @var string $CSR
     */
    protected $CSR = null;

    /**
     * @var string $Certificate
     */
    protected $Certificate = null;

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
     * @param \DateTime $Created
     * @param WebServerType $WebServerType
     */
    public function __construct(\DateTime $Created, $WebServerType)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
      $this->WebServerType = $WebServerType;
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
     * @return SslCertificateInfo
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
     * @return SslCertificateInfo
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
     * @return SslCertificateInfo
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
     * @return SslCertificateInfo
     */
    public function setExpires(\DateTime $Expires)
    {
      $this->Expires = $Expires->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCommonName()
    {
      return $this->CommonName;
    }

    /**
     * @param string $CommonName
     * @return SslCertificateInfo
     */
    public function setCommonName($CommonName)
    {
      $this->CommonName = $CommonName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return SslCertificateInfo
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return WebServerType
     */
    public function getWebServerType()
    {
      return $this->WebServerType;
    }

    /**
     * @param WebServerType $WebServerType
     * @return SslCertificateInfo
     */
    public function setWebServerType($WebServerType)
    {
      $this->WebServerType = $WebServerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail()
    {
      return $this->ApproverEmail;
    }

    /**
     * @param string $ApproverEmail
     * @return SslCertificateInfo
     */
    public function setApproverEmail($ApproverEmail)
    {
      $this->ApproverEmail = $ApproverEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCSR()
    {
      return $this->CSR;
    }

    /**
     * @param string $CSR
     * @return SslCertificateInfo
     */
    public function setCSR($CSR)
    {
      $this->CSR = $CSR;
      return $this;
    }

    /**
     * @return string
     */
    public function getCertificate()
    {
      return $this->Certificate;
    }

    /**
     * @param string $Certificate
     * @return SslCertificateInfo
     */
    public function setCertificate($Certificate)
    {
      $this->Certificate = $Certificate;
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
     * @return SslCertificateInfo
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
     * @return SslCertificateInfo
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
     * @return SslCertificateInfo
     */
    public function setTech($Tech)
    {
      $this->Tech = $Tech;
      return $this;
    }

}
