<?php

class PollQueueRequest
{

    /**
     * @var MessageType $MessageType
     */
    protected $MessageType = null;

    /**
     * @var ObjectType $ObjectType
     */
    protected $ObjectType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MessageType
     */
    public function getMessageType()
    {
      return $this->MessageType;
    }

    /**
     * @param MessageType $MessageType
     * @return PollQueueRequest
     */
    public function setMessageType($MessageType)
    {
      $this->MessageType = $MessageType;
      return $this;
    }

    /**
     * @return ObjectType
     */
    public function getObjectType()
    {
      return $this->ObjectType;
    }

    /**
     * @param ObjectType $ObjectType
     * @return PollQueueRequest
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

}
