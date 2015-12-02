<?php

namespace ascio\v3;

class UploadMessageResponse extends AbstractResponse
{

    /**
     * @var UploadMessageResponse $UploadMessageResult
     */
    protected $UploadMessageResult = null;

    /**
     * @param int $ResultCode
     * @param UploadMessageResponse $UploadMessageResult
     */
    public function __construct($ResultCode, $UploadMessageResult)
    {
      parent::__construct($ResultCode);
      $this->UploadMessageResult = $UploadMessageResult;
    }

    /**
     * @return UploadMessageResponse
     */
    public function getUploadMessageResult()
    {
      return $this->UploadMessageResult;
    }

    /**
     * @param UploadMessageResponse $UploadMessageResult
     * @return \ascio\v3\UploadMessageResponse
     */
    public function setUploadMessageResult($UploadMessageResult)
    {
      $this->UploadMessageResult = $UploadMessageResult;
      return $this;
    }

}
