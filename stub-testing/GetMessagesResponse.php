<?php

class GetMessagesResponse
{

  /**
   * 
   * @var Response $GetMessagesResult
   * @access public
   */
  public $GetMessagesResult = null;

  /**
   * 
   * @var Message[] $messages
   * @access public
   */
  public $messages = null;

  /**
   * 
   * @param Response $GetMessagesResult
   * @param Message[] $messages
   * @access public
   */
  public function __construct($GetMessagesResult, $messages)
  {
    $this->GetMessagesResult = $GetMessagesResult;
    $this->messages = $messages;
  }

}
