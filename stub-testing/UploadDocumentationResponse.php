<?php

class UploadDocumentationResponse
{

  /**
   * 
   * @var Response $UploadDocumentationResult
   * @access public
   */
  public $UploadDocumentationResult = null;

  /**
   * 
   * @param Response $UploadDocumentationResult
   * @access public
   */
  public function __construct($UploadDocumentationResult)
  {
    $this->UploadDocumentationResult = $UploadDocumentationResult;
  }

}
