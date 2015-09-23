<?php

class GetOrders
{

    /**
     * @var GetOrdersRequest $request
     */
    protected $request = null;

    /**
     * @param GetOrdersRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetOrdersRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetOrdersRequest $request
     * @return GetOrders
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
