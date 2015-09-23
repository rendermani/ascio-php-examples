<?php

class GetMarkResponse extends AbstractResponse
{

    /**
     * @var MarkInfo $MarkInfo
     */
    protected $MarkInfo = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

    /**
     * @return MarkInfo
     */
    public function getMarkInfo()
    {
      return $this->MarkInfo;
    }

    /**
     * @param MarkInfo $MarkInfo
     * @return GetMarkResponse
     */
    public function setMarkInfo($MarkInfo)
    {
      $this->MarkInfo = $MarkInfo;
      return $this;
    }

}
