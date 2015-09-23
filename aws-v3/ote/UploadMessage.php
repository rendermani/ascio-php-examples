<?php

class UploadMessage
{

    /**
     * @var UploadMessageRequest $request
     */
    protected $request = null;

    /**
     * @param UploadMessageRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return UploadMessageRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param UploadMessageRequest $request
     * @return UploadMessage
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
