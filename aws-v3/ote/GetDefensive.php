<?php

class GetDefensive
{

    /**
     * @var GetDefensiveRequest $request
     */
    protected $request = null;

    /**
     * @param GetDefensiveRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetDefensiveRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetDefensiveRequest $request
     * @return GetDefensive
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
