<?php

class AckQueueMessageRequest
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
     * @return AckQueueMessageRequest
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

}
