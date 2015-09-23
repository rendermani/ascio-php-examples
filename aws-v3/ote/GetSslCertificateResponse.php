<?php

class GetSslCertificateResponse extends AbstractResponse
{

    /**
     * @var SslCertificateInfo $SslCertificateInfo
     */
    protected $SslCertificateInfo = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

    /**
     * @return SslCertificateInfo
     */
    public function getSslCertificateInfo()
    {
      return $this->SslCertificateInfo;
    }

    /**
     * @param SslCertificateInfo $SslCertificateInfo
     * @return GetSslCertificateResponse
     */
    public function setSslCertificateInfo($SslCertificateInfo)
    {
      $this->SslCertificateInfo = $SslCertificateInfo;
      return $this;
    }

}
