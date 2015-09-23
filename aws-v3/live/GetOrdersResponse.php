<?php

class GetOrdersResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfOrderInfo $OrdersInfo
     */
    protected $OrdersInfo = null;

    /**
     * @param int $ResultCode
     * @param int $TotalCount
     */
    public function __construct($ResultCode, $TotalCount)
    {
      parent::__construct($ResultCode);
      $this->TotalCount = $TotalCount;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return GetOrdersResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfOrderInfo
     */
    public function getOrdersInfo()
    {
      return $this->OrdersInfo;
    }

    /**
     * @param ArrayOfOrderInfo $OrdersInfo
     * @return GetOrdersResponse
     */
    public function setOrdersInfo($OrdersInfo)
    {
      $this->OrdersInfo = $OrdersInfo;
      return $this;
    }

}
