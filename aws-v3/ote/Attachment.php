<?php

class Attachment
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var base64Binary $Content
     */
    protected $Content = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return Attachment
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param base64Binary $Content
     * @return Attachment
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
