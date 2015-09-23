<?php

class MarkOrderDocument extends Attachment
{

    /**
     * @var MarkOrderDocType $DocType
     */
    protected $DocType = null;

    /**
     * @param MarkOrderDocType $DocType
     */
    public function __construct($DocType)
    {
      parent::__construct();
      $this->DocType = $DocType;
    }

    /**
     * @return MarkOrderDocType
     */
    public function getDocType()
    {
      return $this->DocType;
    }

    /**
     * @param MarkOrderDocType $DocType
     * @return MarkOrderDocument
     */
    public function setDocType($DocType)
    {
      $this->DocType = $DocType;
      return $this;
    }

}
