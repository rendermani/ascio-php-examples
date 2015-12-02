<?php

namespace ascio\v3;

class GetNameWatchResponse extends AbstractResponse
{

    /**
     * @var GetNameWatchResponse $GetNameWatchResult
     */
    protected $GetNameWatchResult = null;

    /**
     * @param int $ResultCode
     * @param GetNameWatchResponse $GetNameWatchResult
     */
    public function __construct($ResultCode, $GetNameWatchResult)
    {
      parent::__construct($ResultCode);
      $this->GetNameWatchResult = $GetNameWatchResult;
    }

    /**
     * @return GetNameWatchResponse
     */
    public function getGetNameWatchResult()
    {
      return $this->GetNameWatchResult;
    }

    /**
     * @param GetNameWatchResponse $GetNameWatchResult
     * @return \ascio\v3\GetNameWatchResponse
     */
    public function setGetNameWatchResult($GetNameWatchResult)
    {
      $this->GetNameWatchResult = $GetNameWatchResult;
      return $this;
    }

}
