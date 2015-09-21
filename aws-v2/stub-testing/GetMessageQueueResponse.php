<?php

class GetMessageQueueResponse
{

  /**
   * 
   * @var Response $GetMessageQueueResult
   * @access public
   */
  public $GetMessageQueueResult = null;

  /**
   * 
   * @var QueueItem $item
   * @access public
   */
  public $item = null;

  /**
   * 
   * @param Response $GetMessageQueueResult
   * @param QueueItem $item
   * @access public
   */
  public function __construct($GetMessageQueueResult, $item)
  {
    $this->GetMessageQueueResult = $GetMessageQueueResult;
    $this->item = $item;
  }

}
