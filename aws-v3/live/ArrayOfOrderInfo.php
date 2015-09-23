<?php

class ArrayOfOrderInfo
{

    /**
     * @var OrderInfo[] $OrderInfo
     */
    protected $OrderInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderInfo[]
     */
    public function getOrderInfo()
    {
      return $this->OrderInfo;
    }

    /**
     * @param OrderInfo[] $OrderInfo
     * @return ArrayOfOrderInfo
     */
    public function setOrderInfo(array $OrderInfo)
    {
      $this->OrderInfo = $OrderInfo;
      return $this;
    }

}
