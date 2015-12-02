<?php

namespace ascio\v3;

class GetMessagesResponse extends AbstractResponse
{

    /**
     * @var GetMessagesResponse $GetMessagesResult
     */
    protected $GetMessagesResult = null;

    /**
     * @param int $ResultCode
     * @param GetMessagesResponse $GetMessagesResult
     */
    public function __construct($ResultCode, $GetMessagesResult)
    {
      parent::__construct($ResultCode);
      $this->GetMessagesResult = $GetMessagesResult;
    }

    /**
     * @return GetMessagesResponse
     */
    public function getGetMessagesResult()
    {
      return $this->GetMessagesResult;
    }

    /**
     * @param GetMessagesResponse $GetMessagesResult
     * @return \ascio\v3\GetMessagesResponse
     */
    public function setGetMessagesResult($GetMessagesResult)
    {
      $this->GetMessagesResult = $GetMessagesResult;
      return $this;
    }

}
