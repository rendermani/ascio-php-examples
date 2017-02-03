<?php


 function autoload_56df005bc74c93e90325ca41a145ea39($class)
{
    $classes = array(
        'ascio\v2\AscioServices' => __DIR__ .'/AscioServices.php',
        'ascio\v2\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'ascio\v2\LogIn' => __DIR__ .'/LogIn.php',
        'ascio\v2\Session' => __DIR__ .'/Session.php',
        'ascio\v2\LogInResponse' => __DIR__ .'/LogInResponse.php',
        'ascio\v2\Response' => __DIR__ .'/Response.php',
        'ascio\v2\LogOut' => __DIR__ .'/LogOut.php',
        'ascio\v2\LogOutResponse' => __DIR__ .'/LogOutResponse.php',
        'ascio\v2\GetOrder' => __DIR__ .'/GetOrder.php',
        'ascio\v2\GetOrderResponse' => __DIR__ .'/GetOrderResponse.php',
        'ascio\v2\Order' => __DIR__ .'/Order.php',
        'ascio\v2\OrderType' => __DIR__ .'/OrderType.php',
        'ascio\v2\OrderStatusType' => __DIR__ .'/OrderStatusType.php',
        'ascio\v2\Domain' => __DIR__ .'/Domain.php',
        'ascio\v2\Registrant' => __DIR__ .'/Registrant.php',
        'ascio\v2\Contact' => __DIR__ .'/Contact.php',
        'ascio\v2\NameServers' => __DIR__ .'/NameServers.php',
        'ascio\v2\NameServer' => __DIR__ .'/NameServer.php',
        'ascio\v2\TradeMark' => __DIR__ .'/TradeMark.php',
        'ascio\v2\DnsSecKeys' => __DIR__ .'/DnsSecKeys.php',
        'ascio\v2\DnsSecKey' => __DIR__ .'/DnsSecKey.php',
        'ascio\v2\PrivacyProxy' => __DIR__ .'/PrivacyProxy.php',
        'ascio\v2\PrivacyProxyType' => __DIR__ .'/PrivacyProxyType.php',
        'ascio\v2\Extensions' => __DIR__ .'/Extensions.php',
        'ascio\v2\Extension' => __DIR__ .'/Extension.php',
        'ascio\v2\CreateOrder' => __DIR__ .'/CreateOrder.php',
        'ascio\v2\CreateOrderResponse' => __DIR__ .'/CreateOrderResponse.php',
        'ascio\v2\SearchOrder' => __DIR__ .'/SearchOrder.php',
        'ascio\v2\SearchOrderRequest' => __DIR__ .'/SearchOrderRequest.php',
        'ascio\v2\ArrayOfOrderType' => __DIR__ .'/ArrayOfOrderType.php',
        'ascio\v2\ArrayOfOrderStatusType' => __DIR__ .'/ArrayOfOrderStatusType.php',
        'ascio\v2\SearchOrderSortType' => __DIR__ .'/SearchOrderSortType.php',
        'ascio\v2\PagingInfo' => __DIR__ .'/PagingInfo.php',
        'ascio\v2\SearchOrderResponse' => __DIR__ .'/SearchOrderResponse.php',
        'ascio\v2\ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'ascio\v2\GetMessages' => __DIR__ .'/GetMessages.php',
        'ascio\v2\GetMessagesResponse' => __DIR__ .'/GetMessagesResponse.php',
        'ascio\v2\ArrayOfMessage' => __DIR__ .'/ArrayOfMessage.php',
        'ascio\v2\Message' => __DIR__ .'/Message.php',
        'ascio\v2\ArrayOfAttachment' => __DIR__ .'/ArrayOfAttachment.php',
        'ascio\v2\Attachment' => __DIR__ .'/Attachment.php',
        'ascio\v2\MessageType' => __DIR__ .'/MessageType.php',
        'ascio\v2\ValidateOrder' => __DIR__ .'/ValidateOrder.php',
        'ascio\v2\ValidateOrderResponse' => __DIR__ .'/ValidateOrderResponse.php',
        'ascio\v2\UploadDocumentation' => __DIR__ .'/UploadDocumentation.php',
        'ascio\v2\UploadDocumentationResponse' => __DIR__ .'/UploadDocumentationResponse.php',
        'ascio\v2\CreateSupportOrder' => __DIR__ .'/CreateSupportOrder.php',
        'ascio\v2\CreateSupportOrderResponse' => __DIR__ .'/CreateSupportOrderResponse.php',
        'ascio\v2\UploadMessage' => __DIR__ .'/UploadMessage.php',
        'ascio\v2\UploadMessageResponse' => __DIR__ .'/UploadMessageResponse.php',
        'ascio\v2\GetDomain' => __DIR__ .'/GetDomain.php',
        'ascio\v2\GetDomainResponse' => __DIR__ .'/GetDomainResponse.php',
        'ascio\v2\SearchDomain' => __DIR__ .'/SearchDomain.php',
        'ascio\v2\SearchCriteria' => __DIR__ .'/SearchCriteria.php',
        'ascio\v2\ArrayOfClause' => __DIR__ .'/ArrayOfClause.php',
        'ascio\v2\Clause' => __DIR__ .'/Clause.php',
        'ascio\v2\SearchOperatorType' => __DIR__ .'/SearchOperatorType.php',
        'ascio\v2\SearchModeType' => __DIR__ .'/SearchModeType.php',
        'ascio\v2\SearchDomainResponse' => __DIR__ .'/SearchDomainResponse.php',
        'ascio\v2\ArrayOfDomain' => __DIR__ .'/ArrayOfDomain.php',
        'ascio\v2\Whois' => __DIR__ .'/Whois.php',
        'ascio\v2\WhoisResponse' => __DIR__ .'/WhoisResponse.php',
        'ascio\v2\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'ascio\v2\AvailabilityCheck' => __DIR__ .'/AvailabilityCheck.php',
        'ascio\v2\QualityType' => __DIR__ .'/QualityType.php',
        'ascio\v2\AvailabilityCheckResponse' => __DIR__ .'/AvailabilityCheckResponse.php',
        'ascio\v2\ArrayOfAvailabilityCheckResult' => __DIR__ .'/ArrayOfAvailabilityCheckResult.php',
        'ascio\v2\AvailabilityCheckResult' => __DIR__ .'/AvailabilityCheckResult.php',
        'ascio\v2\GetRegistrant' => __DIR__ .'/GetRegistrant.php',
        'ascio\v2\GetRegistrantResponse' => __DIR__ .'/GetRegistrantResponse.php',
        'ascio\v2\CreateRegistrant' => __DIR__ .'/CreateRegistrant.php',
        'ascio\v2\CreateRegistrantResponse' => __DIR__ .'/CreateRegistrantResponse.php',
        'ascio\v2\DeleteRegistrant' => __DIR__ .'/DeleteRegistrant.php',
        'ascio\v2\DeleteRegistrantResponse' => __DIR__ .'/DeleteRegistrantResponse.php',
        'ascio\v2\SearchRegistrant' => __DIR__ .'/SearchRegistrant.php',
        'ascio\v2\SearchRegistrantResponse' => __DIR__ .'/SearchRegistrantResponse.php',
        'ascio\v2\ArrayOfRegistrant' => __DIR__ .'/ArrayOfRegistrant.php',
        'ascio\v2\GetContact' => __DIR__ .'/GetContact.php',
        'ascio\v2\GetRegistrantVerificationInfo' => __DIR__ .'/GetRegistrantVerificationInfo.php',
        'ascio\v2\GetRegistrantVerificationInfoResponse' => __DIR__ .'/GetRegistrantVerificationInfoResponse.php',
        'ascio\v2\RegistrantVerificationInfo' => __DIR__ .'/RegistrantVerificationInfo.php',
        'ascio\v2\RegistrantVerificationStatus' => __DIR__ .'/RegistrantVerificationStatus.php',
        'ascio\v2\RegistrantVerificationDetails' => __DIR__ .'/RegistrantVerificationDetails.php',
        'ascio\v2\DoRegistrantVerification' => __DIR__ .'/DoRegistrantVerification.php',
        'ascio\v2\DoRegistrantVerificationResponse' => __DIR__ .'/DoRegistrantVerificationResponse.php',
        'ascio\v2\GetRegistrantVerificationStatus' => __DIR__ .'/GetRegistrantVerificationStatus.php',
        'ascio\v2\GetRegistrantVerificationStatusResponse' => __DIR__ .'/GetRegistrantVerificationStatusResponse.php',
        'ascio\v2\UploadRegistrantVerificationMessage' => __DIR__ .'/UploadRegistrantVerificationMessage.php',
        'ascio\v2\UploadRegistrantVerificationMessageResponse' => __DIR__ .'/UploadRegistrantVerificationMessageResponse.php',
        'ascio\v2\GetContactResponse' => __DIR__ .'/GetContactResponse.php',
        'ascio\v2\CreateContact' => __DIR__ .'/CreateContact.php',
        'ascio\v2\CreateContactResponse' => __DIR__ .'/CreateContactResponse.php',
        'ascio\v2\UpdateContact' => __DIR__ .'/UpdateContact.php',
        'ascio\v2\UpdateContactResponse' => __DIR__ .'/UpdateContactResponse.php',
        'ascio\v2\DeleteContact' => __DIR__ .'/DeleteContact.php',
        'ascio\v2\DeleteContactResponse' => __DIR__ .'/DeleteContactResponse.php',
        'ascio\v2\SearchContact' => __DIR__ .'/SearchContact.php',
        'ascio\v2\SearchContactResponse' => __DIR__ .'/SearchContactResponse.php',
        'ascio\v2\ArrayOfContact' => __DIR__ .'/ArrayOfContact.php',
        'ascio\v2\GetNameServer' => __DIR__ .'/GetNameServer.php',
        'ascio\v2\GetNameServerResponse' => __DIR__ .'/GetNameServerResponse.php',
        'ascio\v2\CreateNameServer' => __DIR__ .'/CreateNameServer.php',
        'ascio\v2\CreateNameServerResponse' => __DIR__ .'/CreateNameServerResponse.php',
        'ascio\v2\DeleteNameServer' => __DIR__ .'/DeleteNameServer.php',
        'ascio\v2\DeleteNameServerResponse' => __DIR__ .'/DeleteNameServerResponse.php',
        'ascio\v2\SearchNameServer' => __DIR__ .'/SearchNameServer.php',
        'ascio\v2\SearchNameServerResponse' => __DIR__ .'/SearchNameServerResponse.php',
        'ascio\v2\ArrayOfNameServer' => __DIR__ .'/ArrayOfNameServer.php',
        'ascio\v2\PollMessage' => __DIR__ .'/PollMessage.php',
        'ascio\v2\PollMessageResponse' => __DIR__ .'/PollMessageResponse.php',
        'ascio\v2\QueueItem' => __DIR__ .'/QueueItem.php',
        'ascio\v2\ArrayOfCallbackStatus' => __DIR__ .'/ArrayOfCallbackStatus.php',
        'ascio\v2\CallbackStatus' => __DIR__ .'/CallbackStatus.php',
        'ascio\v2\AckMessage' => __DIR__ .'/AckMessage.php',
        'ascio\v2\AckMessageResponse' => __DIR__ .'/AckMessageResponse.php',
        'ascio\v2\GetMessageQueue' => __DIR__ .'/GetMessageQueue.php',
        'ascio\v2\GetMessageQueueResponse' => __DIR__ .'/GetMessageQueueResponse.php',
        'ascio\v2\GetDnsSecKey' => __DIR__ .'/GetDnsSecKey.php',
        'ascio\v2\GetDnsSecKeyResponse' => __DIR__ .'/GetDnsSecKeyResponse.php',
        'ascio\v2\CreateDnsSecKey' => __DIR__ .'/CreateDnsSecKey.php',
        'ascio\v2\CreateDnsSecKeyResponse' => __DIR__ .'/CreateDnsSecKeyResponse.php',
        'ascio\v2\SearchDnsSecKey' => __DIR__ .'/SearchDnsSecKey.php',
        'ascio\v2\SearchDnsSecKeyResponse' => __DIR__ .'/SearchDnsSecKeyResponse.php',
        'ascio\v2\ArrayOfDnsSecKey' => __DIR__ .'/ArrayOfDnsSecKey.php',
        'ascio\v2\CreateDocumentation' => __DIR__ .'/CreateDocumentation.php',
        'ascio\v2\CreateDocumentationResponse' => __DIR__ .'/CreateDocumentationResponse.php',
        'ascio\v2\CreateApprovalDocumentation' => __DIR__ .'/CreateApprovalDocumentation.php',
        'ascio\v2\ApprovalDocumentationType' => __DIR__ .'/ApprovalDocumentationType.php',
        'ascio\v2\ApprovalDocumentation' => __DIR__ .'/ApprovalDocumentation.php',
        'ascio\v2\CreateApprovalDocumentationResponse' => __DIR__ .'/CreateApprovalDocumentationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_56df005bc74c93e90325ca41a145ea39');

// Do nothing. The rest is just leftovers from the code generation.
{
}
