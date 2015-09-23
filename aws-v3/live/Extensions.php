<?php

class Extensions
{

    /**
     * @var KeyValue[] $KeyValue
     */
    protected $KeyValue = null;

    /**
     * @param KeyValue[] $KeyValue
     */
    public function __construct(array $KeyValue)
    {
      $this->KeyValue = $KeyValue;
    }

    /**
     * @return KeyValue[]
     */
    public function getKeyValue()
    {
      return $this->KeyValue;
    }

    /**
     * @param KeyValue[] $KeyValue
     * @return Extensions
     */
    public function setKeyValue(array $KeyValue)
    {
      $this->KeyValue = $KeyValue;
      return $this;
    }

}
