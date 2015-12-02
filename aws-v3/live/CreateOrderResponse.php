<?php

namespace ascio\v3;

class CreateOrderResponse extends AbstractResponse
{

    /**
     * @var CreateOrderResponse $CreateOrderResult
     */
    protected $CreateOrderResult = null;

    /**
     * @param int $ResultCode
     * @param CreateOrderResponse $CreateOrderResult
     */
    public function __construct($ResultCode, $CreateOrderResult)
    {
      parent::__construct($ResultCode);
      $this->CreateOrderResult = $CreateOrderResult;
    }

    /**
     * @return CreateOrderResponse
     */
    public function getCreateOrderResult()
    {
      return $this->CreateOrderResult;
    }

    /**
     * @param CreateOrderResponse $CreateOrderResult
     * @return \ascio\v3\CreateOrderResponse
     */
    public function setCreateOrderResult($CreateOrderResult)
    {
      $this->CreateOrderResult = $CreateOrderResult;
      return $this;
    }

}
