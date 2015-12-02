<?php

namespace ascio\v3;

class UploadDocumentationResponse extends AbstractResponse
{

    /**
     * @var UploadDocumentationResponse $UploadDocumentationResult
     */
    protected $UploadDocumentationResult = null;

    /**
     * @param int $ResultCode
     * @param UploadDocumentationResponse $UploadDocumentationResult
     */
    public function __construct($ResultCode, $UploadDocumentationResult)
    {
      parent::__construct($ResultCode);
      $this->UploadDocumentationResult = $UploadDocumentationResult;
    }

    /**
     * @return UploadDocumentationResponse
     */
    public function getUploadDocumentationResult()
    {
      return $this->UploadDocumentationResult;
    }

    /**
     * @param UploadDocumentationResponse $UploadDocumentationResult
     * @return \ascio\v3\UploadDocumentationResponse
     */
    public function setUploadDocumentationResult($UploadDocumentationResult)
    {
      $this->UploadDocumentationResult = $UploadDocumentationResult;
      return $this;
    }

}
