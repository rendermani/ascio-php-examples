<?php

class SearchDomainResponse
{

  /**
   * 
   * @var Response $SearchDomainResult
   * @access public
   */
  public $SearchDomainResult = null;

  /**
   * 
   * @var Domain[] $domains
   * @access public
   */
  public $domains = null;

  /**
   * 
   * @param Response $SearchDomainResult
   * @param Domain[] $domains
   * @access public
   */
  public function __construct($SearchDomainResult, $domains)
  {
    $this->SearchDomainResult = $SearchDomainResult;
    $this->domains = $domains;
  }

}
