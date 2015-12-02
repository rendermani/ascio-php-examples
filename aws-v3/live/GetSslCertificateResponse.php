<?php

namespace ascio\v3;

class GetSslCertificateResponse extends AbstractResponse
{

    /**
     * @var GetSslCertificateResponse $GetSslCertificateResult
     */
    protected $GetSslCertificateResult = null;

    /**
     * @param int $ResultCode
     * @param GetSslCertificateResponse $GetSslCertificateResult
     */
    public function __construct($ResultCode, $GetSslCertificateResult)
    {
      parent::__construct($ResultCode);
      $this->GetSslCertificateResult = $GetSslCertificateResult;
    }

    /**
     * @return GetSslCertificateResponse
     */
    public function getGetSslCertificateResult()
    {
      return $this->GetSslCertificateResult;
    }

    /**
     * @param GetSslCertificateResponse $GetSslCertificateResult
     * @return \ascio\v3\GetSslCertificateResponse
     */
    public function setGetSslCertificateResult($GetSslCertificateResult)
    {
      $this->GetSslCertificateResult = $GetSslCertificateResult;
      return $this;
    }

}
