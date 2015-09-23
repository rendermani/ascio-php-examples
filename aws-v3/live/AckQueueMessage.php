<?php

class AckQueueMessage
{

    /**
     * @var AckQueueMessageRequest $request
     */
    protected $request = null;

    /**
     * @param AckQueueMessageRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return AckQueueMessageRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AckQueueMessageRequest $request
     * @return AckQueueMessage
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
