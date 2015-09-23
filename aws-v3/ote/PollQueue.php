<?php

class PollQueue
{

    /**
     * @var PollQueueRequest $request
     */
    protected $request = null;

    /**
     * @param PollQueueRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return PollQueueRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param PollQueueRequest $request
     * @return PollQueue
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
