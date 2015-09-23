<?php

class GetQueueMessageResponse extends AbstractResponse
{

    /**
     * @var QueueMessage $Message
     */
    protected $Message = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
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
     * @return GetQueueMessageResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
