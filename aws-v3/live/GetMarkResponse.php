<?php

namespace ascio\v3;

class GetMarkResponse extends AbstractResponse
{

    /**
     * @var GetMarkResponse $GetMarkResult
     */
    protected $GetMarkResult = null;

    /**
     * @param int $ResultCode
     * @param GetMarkResponse $GetMarkResult
     */
    public function __construct($ResultCode, $GetMarkResult)
    {
      parent::__construct($ResultCode);
      $this->GetMarkResult = $GetMarkResult;
    }

    /**
     * @return GetMarkResponse
     */
    public function getGetMarkResult()
    {
      return $this->GetMarkResult;
    }

    /**
     * @param GetMarkResponse $GetMarkResult
     * @return \ascio\v3\GetMarkResponse
     */
    public function setGetMarkResult($GetMarkResult)
    {
      $this->GetMarkResult = $GetMarkResult;
      return $this;
    }

}
