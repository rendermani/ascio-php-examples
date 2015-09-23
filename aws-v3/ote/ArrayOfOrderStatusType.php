<?php

class ArrayOfOrderStatusType
{

    /**
     * @var OrderStatusType[] $OrderStatusType
     */
    protected $OrderStatusType = null;

    /**
     * @param OrderStatusType[] $OrderStatusType
     */
    public function __construct(array $OrderStatusType)
    {
      $this->OrderStatusType = $OrderStatusType;
    }

    /**
     * @return OrderStatusType[]
     */
    public function getOrderStatusType()
    {
      return $this->OrderStatusType;
    }

    /**
     * @param OrderStatusType[] $OrderStatusType
     * @return ArrayOfOrderStatusType
     */
    public function setOrderStatusType(array $OrderStatusType)
    {
      $this->OrderStatusType = $OrderStatusType;
      return $this;
    }

}
