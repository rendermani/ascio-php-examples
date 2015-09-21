<?php

class SearchOrderRequest
{

  /**
   * 
   * @var OrderType[] $OrderTypes
   * @access public
   */
  public $OrderTypes = null;

  /**
   * 
   * @var OrderStatusType[] $OrderStatusTypes
   * @access public
   */
  public $OrderStatusTypes = null;

  /**
   * 
   * @var dateTime $FromDate
   * @access public
   */
  public $FromDate = null;

  /**
   * 
   * @var dateTime $ToDate
   * @access public
   */
  public $ToDate = null;

  /**
   * 
   * @var string $DomainName
   * @access public
   */
  public $DomainName = null;

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
   * @var boolean $IncludeDomainDetails
   * @access public
   */
  public $IncludeDomainDetails = null;

  /**
   * 
   * @var PagingInfo $PageInfo
   * @access public
   */
  public $PageInfo = null;

  /**
   * 
   * @var SearchOrderSortType $OrderSort
   * @access public
   */
  public $OrderSort = null;

  /**
   * 
   * @param OrderType[] $OrderTypes
   * @param OrderStatusType[] $OrderStatusTypes
   * @param dateTime $FromDate
   * @param dateTime $ToDate
   * @param string $DomainName
   * @param string $TransactionComment
   * @param string $Comments
   * @param boolean $IncludeDomainDetails
   * @param PagingInfo $PageInfo
   * @param SearchOrderSortType $OrderSort
   * @access public
   */
  public function __construct($OrderTypes, $OrderStatusTypes, $FromDate, $ToDate, $DomainName, $TransactionComment, $Comments, $IncludeDomainDetails, $PageInfo, $OrderSort)
  {
    $this->OrderTypes = $OrderTypes;
    $this->OrderStatusTypes = $OrderStatusTypes;
    $this->FromDate = $FromDate;
    $this->ToDate = $ToDate;
    $this->DomainName = $DomainName;
    $this->TransactionComment = $TransactionComment;
    $this->Comments = $Comments;
    $this->IncludeDomainDetails = $IncludeDomainDetails;
    $this->PageInfo = $PageInfo;
    $this->OrderSort = $OrderSort;
  }

}
