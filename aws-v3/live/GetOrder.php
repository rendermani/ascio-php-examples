<?php

class GetOrder
{

    /**
     * @var GetOrderRequest $request
     */
    protected $request = null;

    /**
     * @param GetOrderRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetOrderRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetOrderRequest $request
     * @return GetOrder
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
