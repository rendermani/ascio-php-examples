<?php

class ArrayOfMessage
{

    /**
     * @var Message[] $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Message[]
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param Message[] $Message
     * @return ArrayOfMessage
     */
    public function setMessage(array $Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
