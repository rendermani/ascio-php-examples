<?php

class ArrayOfErrorCode
{

    /**
     * @var ErrorCode[] $ErrorCode
     */
    protected $ErrorCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ErrorCode[]
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param ErrorCode[] $ErrorCode
     * @return ArrayOfErrorCode
     */
    public function setErrorCode(array $ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

}
