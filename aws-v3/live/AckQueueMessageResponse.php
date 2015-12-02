<?php

namespace ascio\v3;

class AckQueueMessageResponse extends AbstractResponse
{

    /**
     * @var AckQueueMessageResponse $AckQueueMessageResult
     */
    protected $AckQueueMessageResult = null;

    /**
     * @param int $ResultCode
     * @param AckQueueMessageResponse $AckQueueMessageResult
     */
    public function __construct($ResultCode, $AckQueueMessageResult)
    {
      parent::__construct($ResultCode);
      $this->AckQueueMessageResult = $AckQueueMessageResult;
    }

    /**
     * @return AckQueueMessageResponse
     */
    public function getAckQueueMessageResult()
    {
      return $this->AckQueueMessageResult;
    }

    /**
     * @param AckQueueMessageResponse $AckQueueMessageResult
     * @return \ascio\v3\AckQueueMessageResponse
     */
    public function setAckQueueMessageResult($AckQueueMessageResult)
    {
      $this->AckQueueMessageResult = $AckQueueMessageResult;
      return $this;
    }

}
