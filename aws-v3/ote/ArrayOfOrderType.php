<?php

class ArrayOfOrderType
{

    /**
     * @var OrderType[] $OrderType
     */
    protected $OrderType = null;

    /**
     * @param OrderType[] $OrderType
     */
    public function __construct(array $OrderType)
    {
      $this->OrderType = $OrderType;
    }

    /**
     * @return OrderType[]
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param OrderType[] $OrderType
     * @return ArrayOfOrderType
     */
    public function setOrderType(array $OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

}
