<?php

class GetOrderRequest
{

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param string $OrderId
     * @return GetOrderRequest
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

}
