<?php

class AscioService extends \SoapClient
{

    /**
     * @var array $classmap The defined aws-classes
     */
    private static $classmap = array (
  'CreateOrder' => 'CreateOrder',
  'CreateOrderResponse' => 'CreateOrderResponse',
  'ValidateOrder' => 'ValidateOrder',
  'ValidateOrderResponse' => 'ValidateOrderResponse',
  'GetOrder' => 'GetOrder',
  'GetOrderResponse' => 'GetOrderResponse',
  'GetOrders' => 'GetOrders',
  'GetOrdersResponse' => 'GetOrdersResponse',
  'GetMark' => 'GetMark',
  'GetMarkResponse' => 'GetMarkResponse',
  'GetDefensive' => 'GetDefensive',
  'GetDefensiveResponse' => 'GetDefensiveResponse',
  'GetNameWatch' => 'GetNameWatch',
  'GetNameWatchResponse' => 'GetNameWatchResponse',
  'GetSslCertificate' => 'GetSslCertificate',
  'GetSslCertificateResponse' => 'GetSslCertificateResponse',
  'GetMessages' => 'GetMessages',
  'GetMessagesResponse' => 'GetMessagesResponse',
  'PollQueue' => 'PollQueue',
  'PollQueueResponse' => 'PollQueueResponse',
  'AckQueueMessage' => 'AckQueueMessage',
  'AckQueueMessageResponse' => 'AckQueueMessageResponse',
  'GetQueueMessage' => 'GetQueueMessage',
  'GetQueueMessageResponse' => 'GetQueueMessageResponse',
  'UploadDocumentation' => 'UploadDocumentation',
  'UploadDocumentationResponse' => 'UploadDocumentationResponse',
  'UploadMessage' => 'UploadMessage',
  'UploadMessageResponse' => 'UploadMessageResponse',
  'AbstractOrderRequest' => 'AbstractOrderRequest',
  'MarkOrderRequest' => 'MarkOrderRequest',
  'AbstractMark' => 'AbstractMark',
  'Registrant' => 'Registrant',
  'Contact' => 'Contact',
  'Extensions' => 'Extensions',
  'KeyValue' => 'KeyValue',
  'SslCertificateOrderRequest' => 'SslCertificateOrderRequest',
  'SslCertificate' => 'SslCertificate',
  'TreatyOrStatuteMark' => 'TreatyOrStatuteMark',
  'Trademark' => 'Trademark',
  'CourtValidatedMark' => 'CourtValidatedMark',
  'SecurityHeaderDetails' => 'SecurityHeaderDetails',
  'ArrayOfMarkOrderDocument' => 'ArrayOfMarkOrderDocument',
  'MarkOrderDocument' => 'MarkOrderDocument',
  'Attachment' => 'Attachment',
  'DefensiveOrderRequest' => 'DefensiveOrderRequest',
  'NameWatchOrderRequest' => 'NameWatchOrderRequest',
  'NameWatch' => 'NameWatch',
  'Defensive' => 'Defensive',
  'AbstractResponse' => 'AbstractResponse',
  'OrderInfo' => 'OrderInfo',
  'GetOrderRequest' => 'GetOrderRequest',
  'GetOrdersRequest' => 'GetOrdersRequest',
  'ArrayOfOrderStatusType' => 'ArrayOfOrderStatusType',
  'ArrayOfOrderType' => 'ArrayOfOrderType',
  'ArrayOfObjectType' => 'ArrayOfObjectType',
  'PagingInfo' => 'PagingInfo',
  'ArrayOfOrderInfo' => 'ArrayOfOrderInfo',
  'GetMarkRequest' => 'GetMarkRequest',
  'MarkInfo' => 'MarkInfo',
  'GetDefensiveRequest' => 'GetDefensiveRequest',
  'DefensiveInfo' => 'DefensiveInfo',
  'GetNameWatchRequest' => 'GetNameWatchRequest',
  'NameWatchInfo' => 'NameWatchInfo',
  'GetSslCertificateRequest' => 'GetSslCertificateRequest',
  'SslCertificateInfo' => 'SslCertificateInfo',
  'GetMessagesRequest' => 'GetMessagesRequest',
  'ArrayOfMessage' => 'ArrayOfMessage',
  'Message' => 'Message',
  'ArrayOfAttachment' => 'ArrayOfAttachment',
  'PollQueueRequest' => 'PollQueueRequest',
  'QueueMessage' => 'QueueMessage',
  'ArrayOfErrorCode' => 'ArrayOfErrorCode',
  'ErrorCode' => 'ErrorCode',
  'AckQueueMessageRequest' => 'AckQueueMessageRequest',
  'GetQueueMessageRequest' => 'GetQueueMessageRequest',
  'UploadDocumentationRequest' => 'UploadDocumentationRequest',
  'UploadMessageRequest' => 'UploadMessageRequest',
  'ArrayOfstring' => 'ArrayOfstring',
  'ArrayOfint' => 'ArrayOfint',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://awstest.ascio.com/v3/aws.wsdl')
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateOrder $parameters
     * @return CreateOrderResponse
     */
    public function CreateOrder(CreateOrder $parameters)
    {
      return $this->__soapCall('CreateOrder', array($parameters));
    }

    /**
     * @param ValidateOrder $parameters
     * @return ValidateOrderResponse
     */
    public function ValidateOrder(ValidateOrder $parameters)
    {
      return $this->__soapCall('ValidateOrder', array($parameters));
    }

    /**
     * @param GetOrder $parameters
     * @return GetOrderResponse
     */
    public function GetOrder(GetOrder $parameters)
    {
      return $this->__soapCall('GetOrder', array($parameters));
    }

    /**
     * @param GetOrders $parameters
     * @return GetOrdersResponse
     */
    public function GetOrders(GetOrders $parameters)
    {
      return $this->__soapCall('GetOrders', array($parameters));
    }

    /**
     * @param GetMark $parameters
     * @return GetMarkResponse
     */
    public function GetMark(GetMark $parameters)
    {
      return $this->__soapCall('GetMark', array($parameters));
    }

    /**
     * @param GetDefensive $parameters
     * @return GetDefensiveResponse
     */
    public function GetDefensive(GetDefensive $parameters)
    {
      return $this->__soapCall('GetDefensive', array($parameters));
    }

    /**
     * @param GetNameWatch $parameters
     * @return GetNameWatchResponse
     */
    public function GetNameWatch(GetNameWatch $parameters)
    {
      return $this->__soapCall('GetNameWatch', array($parameters));
    }

    /**
     * @param GetSslCertificate $parameters
     * @return GetSslCertificateResponse
     */
    public function GetSslCertificate(GetSslCertificate $parameters)
    {
      return $this->__soapCall('GetSslCertificate', array($parameters));
    }

    /**
     * @param GetMessages $parameters
     * @return GetMessagesResponse
     */
    public function GetMessages(GetMessages $parameters)
    {
      return $this->__soapCall('GetMessages', array($parameters));
    }

    /**
     * @param PollQueue $parameters
     * @return PollQueueResponse
     */
    public function PollQueue(PollQueue $parameters)
    {
      return $this->__soapCall('PollQueue', array($parameters));
    }

    /**
     * @param AckQueueMessage $parameters
     * @return AckQueueMessageResponse
     */
    public function AckQueueMessage(AckQueueMessage $parameters)
    {
      return $this->__soapCall('AckQueueMessage', array($parameters));
    }

    /**
     * @param GetQueueMessage $parameters
     * @return GetQueueMessageResponse
     */
    public function GetQueueMessage(GetQueueMessage $parameters)
    {
      return $this->__soapCall('GetQueueMessage', array($parameters));
    }

    /**
     * @param UploadDocumentation $parameters
     * @return UploadDocumentationResponse
     */
    public function UploadDocumentation(UploadDocumentation $parameters)
    {
      return $this->__soapCall('UploadDocumentation', array($parameters));
    }

    /**
     * @param UploadMessage $parameters
     * @return UploadMessageResponse
     */
    public function UploadMessage(UploadMessage $parameters)
    {
      return $this->__soapCall('UploadMessage', array($parameters));
    }

}
