<?php

class UploadDocumentation
{

    /**
     * @var UploadDocumentationRequest $request
     */
    protected $request = null;

    /**
     * @param UploadDocumentationRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return UploadDocumentationRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param UploadDocumentationRequest $request
     * @return UploadDocumentation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
