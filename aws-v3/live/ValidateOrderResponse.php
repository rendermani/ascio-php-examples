<?php

namespace ascio\v3;

class ValidateOrderResponse extends AbstractResponse
{

    /**
     * @var ValidateOrderResponse $ValidateOrderResult
     */
    protected $ValidateOrderResult = null;

    /**
     * @param int $ResultCode
     * @param ValidateOrderResponse $ValidateOrderResult
     */
    public function __construct($ResultCode, $ValidateOrderResult)
    {
      parent::__construct($ResultCode);
      $this->ValidateOrderResult = $ValidateOrderResult;
    }

    /**
     * @return ValidateOrderResponse
     */
    public function getValidateOrderResult()
    {
      return $this->ValidateOrderResult;
    }

    /**
     * @param ValidateOrderResponse $ValidateOrderResult
     * @return \ascio\v3\ValidateOrderResponse
     */
    public function setValidateOrderResult($ValidateOrderResult)
    {
      $this->ValidateOrderResult = $ValidateOrderResult;
      return $this;
    }

}
