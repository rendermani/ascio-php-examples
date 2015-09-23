<?php

class CreateOrderResponse extends AbstractResponse
{

    /**
     * @var OrderInfo $OrderInfo
     */
    protected $OrderInfo = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

    /**
     * @return OrderInfo
     */
    public function getOrderInfo()
    {
      return $this->OrderInfo;
    }

    /**
     * @param OrderInfo $OrderInfo
     * @return CreateOrderResponse
     */
    public function setOrderInfo($OrderInfo)
    {
      $this->OrderInfo = $OrderInfo;
      return $this;
    }

}
