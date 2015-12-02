<?php

namespace ascio\v3;

class GetOrdersResponse extends AbstractResponse
{

    /**
     * @var GetOrdersResponse $GetOrdersResult
     */
    protected $GetOrdersResult = null;

    /**
     * @param int $ResultCode
     * @param GetOrdersResponse $GetOrdersResult
     */
    public function __construct($ResultCode, $GetOrdersResult)
    {
      parent::__construct($ResultCode);
      $this->GetOrdersResult = $GetOrdersResult;
    }

    /**
     * @return GetOrdersResponse
     */
    public function getGetOrdersResult()
    {
      return $this->GetOrdersResult;
    }

    /**
     * @param GetOrdersResponse $GetOrdersResult
     * @return \ascio\v3\GetOrdersResponse
     */
    public function setGetOrdersResult($GetOrdersResult)
    {
      $this->GetOrdersResult = $GetOrdersResult;
      return $this;
    }

}
