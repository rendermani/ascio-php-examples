<?php

class Order
{

  /**
   * 
   * @var string $OrderId
   * @access public
   */
  public $OrderId = null;

  /**
   * 
   * @var OrderType $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var string $AccountReference
   * @access public
   */
  public $AccountReference = null;

  /**
   * 
   * @var OrderStatusType $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @var string $TransactionComment
   * @access public
   */
  public $TransactionComment = null;

  /**
   * 
   * @var string $Comments
   * @access public
   */
  public $Comments = null;

  /**
   * 
   * @var string $Options
   * @access public
   */
  public $Options = null;

  /**
   * 
   * @var string $LocalPresence
   * @access public
   */
  public $LocalPresence = null;

  /**
   * 
   * @var string $Batch
   * @access public
   */
  public $Batch = null;

  /**
   * 
   * @var string $Documentation
   * @access public
   */
  public $Documentation = null;

  /**
   * 
   * @var Domain $Domain
   * @access public
   */
  public $Domain = null;

  /**
   * 
   * @var dateTime $CreDate
   * @access public
   */
  public $CreDate = null;

  /**
   * 
   * @param string $OrderId
   * @param OrderType $Type
   * @param string $AccountReference
   * @param OrderStatusType $Status
   * @param string $TransactionComment
   * @param string $Comments
   * @param string $Options
   * @param string $LocalPresence
   * @param string $Batch
   * @param string $Documentation
   * @param Domain $Domain
   * @param dateTime $CreDate
   * @access public
   */
  public function __construct($OrderId, $Type, $AccountReference, $Status, $TransactionComment, $Comments, $Options, $LocalPresence, $Batch, $Documentation, $Domain, $CreDate)
  {
    $this->OrderId = $OrderId;
    $this->Type = $Type;
    $this->AccountReference = $AccountReference;
    $this->Status = $Status;
    $this->TransactionComment = $TransactionComment;
    $this->Comments = $Comments;
    $this->Options = $Options;
    $this->LocalPresence = $LocalPresence;
    $this->Batch = $Batch;
    $this->Documentation = $Documentation;
    $this->Domain = $Domain;
    $this->CreDate = $CreDate;
  }

}
