<?php

class GetQueueMessageRequest
{

    /**
     * @var int $MessageId
     */
    protected $MessageId = null;

    /**
     * @param int $MessageId
     */
    public function __construct($MessageId)
    {
      $this->MessageId = $MessageId;
    }

    /**
     * @return int
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param int $MessageId
     * @return GetQueueMessageRequest
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
