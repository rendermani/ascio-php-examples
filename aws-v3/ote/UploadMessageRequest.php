<?php

class UploadMessageRequest
{

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    /**
     * @var Message $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param string $OrderId
     * @return UploadMessageRequest
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param Message $Message
     * @return UploadMessageRequest
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
