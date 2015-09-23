<?php

class GetMessagesResponse extends AbstractResponse
{

    /**
     * @var ArrayOfMessage $Messages
     */
    protected $Messages = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages()
    {
      return $this->Messages;
    }

    /**
     * @param ArrayOfMessage $Messages
     * @return GetMessagesResponse
     */
    public function setMessages($Messages)
    {
      $this->Messages = $Messages;
      return $this;
    }

}
