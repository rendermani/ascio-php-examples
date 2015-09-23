<?php

class SslCertificate
{

    /**
     * @var string $Handle
     */
    protected $Handle = null;

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
     * @return SslCertificate
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
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
     * @return SslCertificate
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
     * @return SslCertificate
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
     * @return SslCertificate
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
     * @return SslCertificate
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
     * @return SslCertificate
     */
    public function setCSR($CSR)
    {
      $this->CSR = $CSR;
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
     * @return SslCertificate
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
     * @return SslCertificate
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
     * @return SslCertificate
     */
    public function setTech($Tech)
    {
      $this->Tech = $Tech;
      return $this;
    }

}
