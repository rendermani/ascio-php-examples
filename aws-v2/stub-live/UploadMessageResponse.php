<?php

class UploadMessageResponse
{

  /**
   * 
   * @var Response $UploadMessageResult
   * @access public
   */
  public $UploadMessageResult = null;

  /**
   * 
   * @param Response $UploadMessageResult
   * @access public
   */
  public function __construct($UploadMessageResult)
  {
    $this->UploadMessageResult = $UploadMessageResult;
  }

}
