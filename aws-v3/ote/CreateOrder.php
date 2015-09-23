<?php

class CreateOrder
{

    /**
     * @var AbstractOrderRequest $request
     */
    protected $request = null;

    /**
     * @param AbstractOrderRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return AbstractOrderRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AbstractOrderRequest $request
     * @return CreateOrder
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
