<?php

class Registrant extends Contact
{

    /**
     * @var string $VatNumber
     */
    protected $VatNumber = null;

    /**
     * @var string $NexusCategory
     */
    protected $NexusCategory = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
      return $this->VatNumber;
    }

    /**
     * @param string $VatNumber
     * @return Registrant
     */
    public function setVatNumber($VatNumber)
    {
      $this->VatNumber = $VatNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getNexusCategory()
    {
      return $this->NexusCategory;
    }

    /**
     * @param string $NexusCategory
     * @return Registrant
     */
    public function setNexusCategory($NexusCategory)
    {
      $this->NexusCategory = $NexusCategory;
      return $this;
    }

}
