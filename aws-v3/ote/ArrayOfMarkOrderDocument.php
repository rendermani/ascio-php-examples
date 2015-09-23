<?php

class ArrayOfMarkOrderDocument
{

    /**
     * @var MarkOrderDocument[] $MarkOrderDocument
     */
    protected $MarkOrderDocument = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MarkOrderDocument[]
     */
    public function getMarkOrderDocument()
    {
      return $this->MarkOrderDocument;
    }

    /**
     * @param MarkOrderDocument[] $MarkOrderDocument
     * @return ArrayOfMarkOrderDocument
     */
    public function setMarkOrderDocument(array $MarkOrderDocument)
    {
      $this->MarkOrderDocument = $MarkOrderDocument;
      return $this;
    }

}
