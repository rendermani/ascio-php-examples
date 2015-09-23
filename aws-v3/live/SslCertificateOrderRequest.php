<?php

class SslCertificateOrderRequest extends AbstractOrderRequest
{

    /**
     * @var SslCertificate $SslCertificate
     */
    protected $SslCertificate = null;

    /**
     * @param OrderType $Type
     */
    public function __construct($Type)
    {
      parent::__construct($Type);
    }

    /**
     * @return SslCertificate
     */
    public function getSslCertificate()
    {
      return $this->SslCertificate;
    }

    /**
     * @param SslCertificate $SslCertificate
     * @return SslCertificateOrderRequest
     */
    public function setSslCertificate($SslCertificate)
    {
      $this->SslCertificate = $SslCertificate;
      return $this;
    }

}
