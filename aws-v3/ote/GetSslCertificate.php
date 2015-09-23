<?php

class GetSslCertificate
{

    /**
     * @var GetSslCertificateRequest $request
     */
    protected $request = null;

    /**
     * @param GetSslCertificateRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetSslCertificateRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetSslCertificateRequest $request
     * @return GetSslCertificate
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
