<?php

namespace ascio\v2;

class ArrayOfstring
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
      return $this->string;
    }

    /**
     * @param string[] $string
     * @return \ascio\v2\ArrayOfstring
     */
    public function setString(array $string)
    {
      $this->string = $string;
      return $this;
    }

}
