<?php

class QueueItem
{

  /**
   * 
   * @var Attachment[] $Attachments
   * @access public
   */
  public $Attachments = null;

  /**
   * 
   * @var string $DomainHandle
   * @access public
   */
  public $DomainHandle = null;

  /**
   * 
   * @var string $DomainName
   * @access public
   */
  public $DomainName = null;

  /**
   * 
   * @var string $Msg
   * @access public
   */
  public $Msg = null;

  /**
   * 
   * @var int $MsgId
   * @access public
   */
  public $MsgId = null;

  /**
   * 
   * @var MessageType $MsgType
   * @access public
   */
  public $MsgType = null;

  /**
   * 
   * @var string $OrderId
   * @access public
   */
  public $OrderId = null;

  /**
   * 
   * @var OrderStatusType $OrderStatus
   * @access public
   */
  public $OrderStatus = null;

  /**
   * 
   * @var CallbackStatus[] $StatusList
   * @access public
   */
  public $StatusList = null;

  /**
   * 
   * @param Attachment[] $Attachments
   * @param string $DomainHandle
   * @param string $DomainName
   * @param string $Msg
   * @param int $MsgId
   * @param MessageType $MsgType
   * @param string $OrderId
   * @param OrderStatusType $OrderStatus
   * @param CallbackStatus[] $StatusList
   * @access public
   */
  public function __construct($Attachments, $DomainHandle, $DomainName, $Msg, $MsgId, $MsgType, $OrderId, $OrderStatus, $StatusList)
  {
    $this->Attachments = $Attachments;
    $this->DomainHandle = $DomainHandle;
    $this->DomainName = $DomainName;
    $this->Msg = $Msg;
    $this->MsgId = $MsgId;
    $this->MsgType = $MsgType;
    $this->OrderId = $OrderId;
    $this->OrderStatus = $OrderStatus;
    $this->StatusList = $StatusList;
  }

}
