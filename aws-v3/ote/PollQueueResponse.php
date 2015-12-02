<?php

namespace ascio\v3;

class PollQueueResponse extends AbstractResponse
{

    /**
     * @var PollQueueResponse $PollQueueResult
     */
    protected $PollQueueResult = null;

    /**
     * @param int $ResultCode
     * @param PollQueueResponse $PollQueueResult
     */
    public function __construct($ResultCode, $PollQueueResult)
    {
      parent::__construct($ResultCode);
      $this->PollQueueResult = $PollQueueResult;
    }

    /**
     * @return PollQueueResponse
     */
    public function getPollQueueResult()
    {
      return $this->PollQueueResult;
    }

    /**
     * @param PollQueueResponse $PollQueueResult
     * @return \ascio\v3\PollQueueResponse
     */
    public function setPollQueueResult($PollQueueResult)
    {
      $this->PollQueueResult = $PollQueueResult;
      return $this;
    }

}
