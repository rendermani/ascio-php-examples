<?php

namespace ascio\v3;

class GetOrderResponse extends AbstractResponse
{

    /**
     * @var GetOrderResponse $GetOrderResult
     */
    protected $GetOrderResult = null;

    /**
     * @param int $ResultCode
     * @param GetOrderResponse $GetOrderResult
     */
    public function __construct($ResultCode, $GetOrderResult)
    {
      parent::__construct($ResultCode);
      $this->GetOrderResult = $GetOrderResult;
    }

    /**
     * @return GetOrderResponse
     */
    public function getGetOrderResult()
    {
      return $this->GetOrderResult;
    }

    /**
     * @param GetOrderResponse $GetOrderResult
     * @return \ascio\v3\GetOrderResponse
     */
    public function setGetOrderResult($GetOrderResult)
    {
      $this->GetOrderResult = $GetOrderResult;
      return $this;
    }

}
