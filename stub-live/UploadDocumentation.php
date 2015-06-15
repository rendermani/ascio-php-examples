<?php

class UploadDocumentation
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @var string $orderId
   * @access public
   */
  public $orderId = null;

  /**
   * 
   * @var string $fileName
   * @access public
   */
  public $fileName = null;

  /**
   * 
   * @var base64Binary $content
   * @access public
   */
  public $content = null;

  /**
   * 
   * @param string $sessionId
   * @param string $orderId
   * @param string $fileName
   * @param base64Binary $content
   * @access public
   */
  public function __construct($sessionId, $orderId, $fileName, $content)
  {
    $this->sessionId = $sessionId;
    $this->orderId = $orderId;
    $this->fileName = $fileName;
    $this->content = $content;
  }

}
