<?php

namespace ascio\v3;

class GetQueueMessageResponse extends AbstractResponse
{

    /**
     * @var GetQueueMessageResponse $GetQueueMessageResult
     */
    protected $GetQueueMessageResult = null;

    /**
     * @param int $ResultCode
     * @param GetQueueMessageResponse $GetQueueMessageResult
     */
    public function __construct($ResultCode, $GetQueueMessageResult)
    {
      parent::__construct($ResultCode);
      $this->GetQueueMessageResult = $GetQueueMessageResult;
    }

    /**
     * @return GetQueueMessageResponse
     */
    public function getGetQueueMessageResult()
    {
      return $this->GetQueueMessageResult;
    }

    /**
     * @param GetQueueMessageResponse $GetQueueMessageResult
     * @return \ascio\v3\GetQueueMessageResponse
     */
    public function setGetQueueMessageResult($GetQueueMessageResult)
    {
      $this->GetQueueMessageResult = $GetQueueMessageResult;
      return $this;
    }

}
