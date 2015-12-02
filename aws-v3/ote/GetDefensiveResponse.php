<?php

namespace ascio\v3;

class GetDefensiveResponse extends AbstractResponse
{

    /**
     * @var GetDefensiveResponse $GetDefensiveResult
     */
    protected $GetDefensiveResult = null;

    /**
     * @param int $ResultCode
     * @param GetDefensiveResponse $GetDefensiveResult
     */
    public function __construct($ResultCode, $GetDefensiveResult)
    {
      parent::__construct($ResultCode);
      $this->GetDefensiveResult = $GetDefensiveResult;
    }

    /**
     * @return GetDefensiveResponse
     */
    public function getGetDefensiveResult()
    {
      return $this->GetDefensiveResult;
    }

    /**
     * @param GetDefensiveResponse $GetDefensiveResult
     * @return \ascio\v3\GetDefensiveResponse
     */
    public function setGetDefensiveResult($GetDefensiveResult)
    {
      $this->GetDefensiveResult = $GetDefensiveResult;
      return $this;
    }

}
