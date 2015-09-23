<?php

class PollQueueResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var QueueMessage $Message
     */
    protected $Message = null;

    /**
     * @param int $ResultCode
     * @param int $TotalCount
     */
    public function __construct($ResultCode, $TotalCount)
    {
      parent::__construct($ResultCode);
      $this->TotalCount = $TotalCount;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return PollQueueResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return QueueMessage
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param QueueMessage $Message
     * @return PollQueueResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
