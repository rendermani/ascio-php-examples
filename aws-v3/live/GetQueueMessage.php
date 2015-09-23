<?php

class GetQueueMessage
{

    /**
     * @var GetQueueMessageRequest $request
     */
    protected $request = null;

    /**
     * @param GetQueueMessageRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetQueueMessageRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetQueueMessageRequest $request
     * @return GetQueueMessage
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
