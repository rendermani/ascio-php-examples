<?php

class GetNameWatch
{

    /**
     * @var GetNameWatchRequest $request
     */
    protected $request = null;

    /**
     * @param GetNameWatchRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetNameWatchRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetNameWatchRequest $request
     * @return GetNameWatch
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
