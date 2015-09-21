<?php

class GetDomainResponse
{

  /**
   * 
   * @var Response $GetDomainResult
   * @access public
   */
  public $GetDomainResult = null;

  /**
   * 
   * @var Domain $domain
   * @access public
   */
  public $domain = null;

  /**
   * 
   * @param Response $GetDomainResult
   * @param Domain $domain
   * @access public
   */
  public function __construct($GetDomainResult, $domain)
  {
    $this->GetDomainResult = $GetDomainResult;
    $this->domain = $domain;
  }

}
