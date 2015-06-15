<?php

include_once('LogIn.php');
include_once('Session.php');
include_once('LogInResponse.php');
include_once('Response.php');
include_once('LogOut.php');
include_once('LogOutResponse.php');
include_once('GetOrder.php');
include_once('GetOrderResponse.php');
include_once('Order.php');
include_once('Domain.php');
include_once('Registrant.php');
include_once('Contact.php');
include_once('NameServers.php');
include_once('NameServer.php');
include_once('TradeMark.php');
include_once('DnsSecKeys.php');
include_once('DnsSecKey.php');
include_once('CreateOrder.php');
include_once('CreateOrderResponse.php');
include_once('SearchOrder.php');
include_once('SearchOrderRequest.php');
include_once('PagingInfo.php');
include_once('SearchOrderResponse.php');
include_once('GetMessages.php');
include_once('GetMessagesResponse.php');
include_once('Message.php');
include_once('Attachment.php');
include_once('ValidateOrder.php');
include_once('ValidateOrderResponse.php');
include_once('UploadDocumentation.php');
include_once('UploadDocumentationResponse.php');
include_once('CreateSupportOrder.php');
include_once('CreateSupportOrderResponse.php');
include_once('UploadMessage.php');
include_once('UploadMessageResponse.php');
include_once('GetDomain.php');
include_once('GetDomainResponse.php');
include_once('SearchDomain.php');
include_once('SearchCriteria.php');
include_once('Clause.php');
include_once('SearchDomainResponse.php');
include_once('Whois.php');
include_once('WhoisResponse.php');
include_once('AvailabilityCheck.php');
include_once('AvailabilityCheckResponse.php');
include_once('AvailabilityCheckResult.php');
include_once('GetRegistrant.php');
include_once('GetRegistrantResponse.php');
include_once('CreateRegistrant.php');
include_once('CreateRegistrantResponse.php');
include_once('DeleteRegistrant.php');
include_once('DeleteRegistrantResponse.php');
include_once('SearchRegistrant.php');
include_once('SearchRegistrantResponse.php');
include_once('GetContact.php');
include_once('GetContactResponse.php');
include_once('CreateContact.php');
include_once('CreateContactResponse.php');
include_once('UpdateContact.php');
include_once('UpdateContactResponse.php');
include_once('DeleteContact.php');
include_once('DeleteContactResponse.php');
include_once('SearchContact.php');
include_once('SearchContactResponse.php');
include_once('GetNameServer.php');
include_once('GetNameServerResponse.php');
include_once('CreateNameServer.php');
include_once('CreateNameServerResponse.php');
include_once('DeleteNameServer.php');
include_once('DeleteNameServerResponse.php');
include_once('SearchNameServer.php');
include_once('SearchNameServerResponse.php');
include_once('PollMessage.php');
include_once('PollMessageResponse.php');
include_once('QueueItem.php');
include_once('CallbackStatus.php');
include_once('AckMessage.php');
include_once('AckMessageResponse.php');
include_once('GetMessageQueue.php');
include_once('GetMessageQueueResponse.php');
include_once('GetDnsSecKey.php');
include_once('GetDnsSecKeyResponse.php');
include_once('CreateDnsSecKey.php');
include_once('CreateDnsSecKeyResponse.php');
include_once('SearchDnsSecKey.php');
include_once('SearchDnsSecKeyResponse.php');
include_once('CreateDocumentation.php');
include_once('CreateDocumentationResponse.php');


/**
 * 
 */
class AscioServices extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'LogIn' => '\\LogIn',
    'Session' => '\\Session',
    'LogInResponse' => '\\LogInResponse',
    'Response' => '\\Response',
    'LogOut' => '\\LogOut',
    'LogOutResponse' => '\\LogOutResponse',
    'GetOrder' => '\\GetOrder',
    'GetOrderResponse' => '\\GetOrderResponse',
    'Order' => '\\Order',
    'Domain' => '\\Domain',
    'Registrant' => '\\Registrant',
    'Contact' => '\\Contact',
    'NameServers' => '\\NameServers',
    'NameServer' => '\\NameServer',
    'TradeMark' => '\\TradeMark',
    'DnsSecKeys' => '\\DnsSecKeys',
    'DnsSecKey' => '\\DnsSecKey',
    'CreateOrder' => '\\CreateOrder',
    'CreateOrderResponse' => '\\CreateOrderResponse',
    'SearchOrder' => '\\SearchOrder',
    'SearchOrderRequest' => '\\SearchOrderRequest',
    'PagingInfo' => '\\PagingInfo',
    'SearchOrderResponse' => '\\SearchOrderResponse',
    'GetMessages' => '\\GetMessages',
    'GetMessagesResponse' => '\\GetMessagesResponse',
    'Message' => '\\Message',
    'Attachment' => '\\Attachment',
    'ValidateOrder' => '\\ValidateOrder',
    'ValidateOrderResponse' => '\\ValidateOrderResponse',
    'UploadDocumentation' => '\\UploadDocumentation',
    'UploadDocumentationResponse' => '\\UploadDocumentationResponse',
    'CreateSupportOrder' => '\\CreateSupportOrder',
    'CreateSupportOrderResponse' => '\\CreateSupportOrderResponse',
    'UploadMessage' => '\\UploadMessage',
    'UploadMessageResponse' => '\\UploadMessageResponse',
    'GetDomain' => '\\GetDomain',
    'GetDomainResponse' => '\\GetDomainResponse',
    'SearchDomain' => '\\SearchDomain',
    'SearchCriteria' => '\\SearchCriteria',
    'Clause' => '\\Clause',
    'SearchDomainResponse' => '\\SearchDomainResponse',
    'Whois' => '\\Whois',
    'WhoisResponse' => '\\WhoisResponse',
    'AvailabilityCheck' => '\\AvailabilityCheck',
    'AvailabilityCheckResponse' => '\\AvailabilityCheckResponse',
    'AvailabilityCheckResult' => '\\AvailabilityCheckResult',
    'GetRegistrant' => '\\GetRegistrant',
    'GetRegistrantResponse' => '\\GetRegistrantResponse',
    'CreateRegistrant' => '\\CreateRegistrant',
    'CreateRegistrantResponse' => '\\CreateRegistrantResponse',
    'DeleteRegistrant' => '\\DeleteRegistrant',
    'DeleteRegistrantResponse' => '\\DeleteRegistrantResponse',
    'SearchRegistrant' => '\\SearchRegistrant',
    'SearchRegistrantResponse' => '\\SearchRegistrantResponse',
    'GetContact' => '\\GetContact',
    'GetContactResponse' => '\\GetContactResponse',
    'CreateContact' => '\\CreateContact',
    'CreateContactResponse' => '\\CreateContactResponse',
    'UpdateContact' => '\\UpdateContact',
    'UpdateContactResponse' => '\\UpdateContactResponse',
    'DeleteContact' => '\\DeleteContact',
    'DeleteContactResponse' => '\\DeleteContactResponse',
    'SearchContact' => '\\SearchContact',
    'SearchContactResponse' => '\\SearchContactResponse',
    'GetNameServer' => '\\GetNameServer',
    'GetNameServerResponse' => '\\GetNameServerResponse',
    'CreateNameServer' => '\\CreateNameServer',
    'CreateNameServerResponse' => '\\CreateNameServerResponse',
    'DeleteNameServer' => '\\DeleteNameServer',
    'DeleteNameServerResponse' => '\\DeleteNameServerResponse',
    'SearchNameServer' => '\\SearchNameServer',
    'SearchNameServerResponse' => '\\SearchNameServerResponse',
    'PollMessage' => '\\PollMessage',
    'PollMessageResponse' => '\\PollMessageResponse',
    'QueueItem' => '\\QueueItem',
    'CallbackStatus' => '\\CallbackStatus',
    'AckMessage' => '\\AckMessage',
    'AckMessageResponse' => '\\AckMessageResponse',
    'GetMessageQueue' => '\\GetMessageQueue',
    'GetMessageQueueResponse' => '\\GetMessageQueueResponse',
    'GetDnsSecKey' => '\\GetDnsSecKey',
    'GetDnsSecKeyResponse' => '\\GetDnsSecKeyResponse',
    'CreateDnsSecKey' => '\\CreateDnsSecKey',
    'CreateDnsSecKeyResponse' => '\\CreateDnsSecKeyResponse',
    'SearchDnsSecKey' => '\\SearchDnsSecKey',
    'SearchDnsSecKeyResponse' => '\\SearchDnsSecKeyResponse',
    'CreateDocumentation' => '\\CreateDocumentation',
    'CreateDocumentationResponse' => '\\CreateDocumentationResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'https://aws.ascio.com/2012/01/01/AscioService.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param LogIn $parameters
   * @access public
   * @return LogInResponse
   */
  public function LogIn(LogIn $parameters)
  {
    return $this->__soapCall('LogIn', array($parameters));
  }

  /**
   * 
   * @param LogOut $parameters
   * @access public
   * @return LogOutResponse
   */
  public function LogOut(LogOut $parameters)
  {
    return $this->__soapCall('LogOut', array($parameters));
  }

  /**
   * 
   * @param GetOrder $parameters
   * @access public
   * @return GetOrderResponse
   */
  public function GetOrder(GetOrder $parameters)
  {
    return $this->__soapCall('GetOrder', array($parameters));
  }

  /**
   * 
   * @param CreateOrder $parameters
   * @access public
   * @return CreateOrderResponse
   */
  public function CreateOrder(CreateOrder $parameters)
  {
    return $this->__soapCall('CreateOrder', array($parameters));
  }

  /**
   * 
   * @param SearchOrder $parameters
   * @access public
   * @return SearchOrderResponse
   */
  public function SearchOrder(SearchOrder $parameters)
  {
    return $this->__soapCall('SearchOrder', array($parameters));
  }

  /**
   * 
   * @param GetMessages $parameters
   * @access public
   * @return GetMessagesResponse
   */
  public function GetMessages(GetMessages $parameters)
  {
    return $this->__soapCall('GetMessages', array($parameters));
  }

  /**
   * 
   * @param ValidateOrder $parameters
   * @access public
   * @return ValidateOrderResponse
   */
  public function ValidateOrder(ValidateOrder $parameters)
  {
    return $this->__soapCall('ValidateOrder', array($parameters));
  }

  /**
   * 
   * @param UploadDocumentation $parameters
   * @access public
   * @return UploadDocumentationResponse
   */
  public function UploadDocumentation(UploadDocumentation $parameters)
  {
    return $this->__soapCall('UploadDocumentation', array($parameters));
  }

  /**
   * 
   * @param CreateSupportOrder $parameters
   * @access public
   * @return CreateSupportOrderResponse
   */
  public function CreateSupportOrder(CreateSupportOrder $parameters)
  {
    return $this->__soapCall('CreateSupportOrder', array($parameters));
  }

  /**
   * 
   * @param UploadMessage $parameters
   * @access public
   * @return UploadMessageResponse
   */
  public function UploadMessage(UploadMessage $parameters)
  {
    return $this->__soapCall('UploadMessage', array($parameters));
  }

  /**
   * 
   * @param GetDomain $parameters
   * @access public
   * @return GetDomainResponse
   */
  public function GetDomain(GetDomain $parameters)
  {
    return $this->__soapCall('GetDomain', array($parameters));
  }

  /**
   * 
   * @param SearchDomain $parameters
   * @access public
   * @return SearchDomainResponse
   */
  public function SearchDomain(SearchDomain $parameters)
  {
    return $this->__soapCall('SearchDomain', array($parameters));
  }

  /**
   * 
   * @param Whois $parameters
   * @access public
   * @return WhoisResponse
   */
  public function Whois(Whois $parameters)
  {
    return $this->__soapCall('Whois', array($parameters));
  }

  /**
   * 
   * @param AvailabilityCheck $parameters
   * @access public
   * @return AvailabilityCheckResponse
   */
  public function AvailabilityCheck(AvailabilityCheck $parameters)
  {
    return $this->__soapCall('AvailabilityCheck', array($parameters));
  }

  /**
   * 
   * @param GetRegistrant $parameters
   * @access public
   * @return GetRegistrantResponse
   */
  public function GetRegistrant(GetRegistrant $parameters)
  {
    return $this->__soapCall('GetRegistrant', array($parameters));
  }

  /**
   * 
   * @param CreateRegistrant $parameters
   * @access public
   * @return CreateRegistrantResponse
   */
  public function CreateRegistrant(CreateRegistrant $parameters)
  {
    return $this->__soapCall('CreateRegistrant', array($parameters));
  }

  /**
   * 
   * @param DeleteRegistrant $parameters
   * @access public
   * @return DeleteRegistrantResponse
   */
  public function DeleteRegistrant(DeleteRegistrant $parameters)
  {
    return $this->__soapCall('DeleteRegistrant', array($parameters));
  }

  /**
   * 
   * @param SearchRegistrant $parameters
   * @access public
   * @return SearchRegistrantResponse
   */
  public function SearchRegistrant(SearchRegistrant $parameters)
  {
    return $this->__soapCall('SearchRegistrant', array($parameters));
  }

  /**
   * 
   * @param GetContact $parameters
   * @access public
   * @return GetContactResponse
   */
  public function GetContact(GetContact $parameters)
  {
    return $this->__soapCall('GetContact', array($parameters));
  }

  /**
   * 
   * @param CreateContact $parameters
   * @access public
   * @return CreateContactResponse
   */
  public function CreateContact(CreateContact $parameters)
  {
    return $this->__soapCall('CreateContact', array($parameters));
  }

  /**
   * 
   * @param UpdateContact $parameters
   * @access public
   * @return UpdateContactResponse
   */
  public function UpdateContact(UpdateContact $parameters)
  {
    return $this->__soapCall('UpdateContact', array($parameters));
  }

  /**
   * 
   * @param DeleteContact $parameters
   * @access public
   * @return DeleteContactResponse
   */
  public function DeleteContact(DeleteContact $parameters)
  {
    return $this->__soapCall('DeleteContact', array($parameters));
  }

  /**
   * 
   * @param SearchContact $parameters
   * @access public
   * @return SearchContactResponse
   */
  public function SearchContact(SearchContact $parameters)
  {
    return $this->__soapCall('SearchContact', array($parameters));
  }

  /**
   * 
   * @param GetNameServer $parameters
   * @access public
   * @return GetNameServerResponse
   */
  public function GetNameServer(GetNameServer $parameters)
  {
    return $this->__soapCall('GetNameServer', array($parameters));
  }

  /**
   * 
   * @param CreateNameServer $parameters
   * @access public
   * @return CreateNameServerResponse
   */
  public function CreateNameServer(CreateNameServer $parameters)
  {
    return $this->__soapCall('CreateNameServer', array($parameters));
  }

  /**
   * 
   * @param DeleteNameServer $parameters
   * @access public
   * @return DeleteNameServerResponse
   */
  public function DeleteNameServer(DeleteNameServer $parameters)
  {
    return $this->__soapCall('DeleteNameServer', array($parameters));
  }

  /**
   * 
   * @param SearchNameServer $parameters
   * @access public
   * @return SearchNameServerResponse
   */
  public function SearchNameServer(SearchNameServer $parameters)
  {
    return $this->__soapCall('SearchNameServer', array($parameters));
  }

  /**
   * 
   * @param PollMessage $parameters
   * @access public
   * @return PollMessageResponse
   */
  public function PollMessage(PollMessage $parameters)
  {
    return $this->__soapCall('PollMessage', array($parameters));
  }

  /**
   * 
   * @param AckMessage $parameters
   * @access public
   * @return AckMessageResponse
   */
  public function AckMessage(AckMessage $parameters)
  {
    return $this->__soapCall('AckMessage', array($parameters));
  }

  /**
   * 
   * @param GetMessageQueue $parameters
   * @access public
   * @return GetMessageQueueResponse
   */
  public function GetMessageQueue(GetMessageQueue $parameters)
  {
    return $this->__soapCall('GetMessageQueue', array($parameters));
  }

  /**
   * 
   * @param GetDnsSecKey $parameters
   * @access public
   * @return GetDnsSecKeyResponse
   */
  public function GetDnsSecKey(GetDnsSecKey $parameters)
  {
    return $this->__soapCall('GetDnsSecKey', array($parameters));
  }

  /**
   * 
   * @param CreateDnsSecKey $parameters
   * @access public
   * @return CreateDnsSecKeyResponse
   */
  public function CreateDnsSecKey(CreateDnsSecKey $parameters)
  {
    return $this->__soapCall('CreateDnsSecKey', array($parameters));
  }

  /**
   * 
   * @param SearchDnsSecKey $parameters
   * @access public
   * @return SearchDnsSecKeyResponse
   */
  public function SearchDnsSecKey(SearchDnsSecKey $parameters)
  {
    return $this->__soapCall('SearchDnsSecKey', array($parameters));
  }

  /**
   * 
   * @param CreateDocumentation $parameters
   * @access public
   * @return CreateDocumentationResponse
   */
  public function CreateDocumentation(CreateDocumentation $parameters)
  {
    return $this->__soapCall('CreateDocumentation', array($parameters));
  }

}
