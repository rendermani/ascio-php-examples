<?php

class PollMessageResponse
{

  /**
   * 
   * @var Response $PollMessageResult
   * @access public
   */
  public $PollMessageResult = null;

  /**
   * 
   * @var int $msgCount
   * @access public
   */
  public $msgCount = null;

  /**
   * 
   * @var QueueItem $item
   * @access public
   */
  public $item = null;

  /**
   * 
   * @param Response $PollMessageResult
   * @param int $msgCount
   * @param QueueItem $item
   * @access public
   */
  public function __construct($PollMessageResult, $msgCount, $item)
  {
    $this->PollMessageResult = $PollMessageResult;
    $this->msgCount = $msgCount;
    $this->item = $item;
  }

}
