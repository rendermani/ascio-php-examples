<?php

class CreateDocumentationResponse
{

  /**
   * 
   * @var Response $CreateDocumentationResult
   * @access public
   */
  public $CreateDocumentationResult = null;

  /**
   * 
   * @var int $documentationId
   * @access public
   */
  public $documentationId = null;

  /**
   * 
   * @param Response $CreateDocumentationResult
   * @param int $documentationId
   * @access public
   */
  public function __construct($CreateDocumentationResult, $documentationId)
  {
    $this->CreateDocumentationResult = $CreateDocumentationResult;
    $this->documentationId = $documentationId;
  }

}
