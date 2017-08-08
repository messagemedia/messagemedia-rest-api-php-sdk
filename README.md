# MessageMedia REST API PHP SDK
Australia's Leading Messaging Solutions for Business and Enterprise.


- API version: 1.0.0
- Build date: 2017-06-07T05:13:52.481Z
For more information, please visit [https://www.messagemedia.com/contact-us](https://www.messagemedia.com/contact-us)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/messagemedia/messagemedia-rest-api-php-sdk.git"
    }
  ],
  "require": {
    "messagemedia/messagemedia-rest-api-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\DeliveryReportsApi();

try {
    $result = $api_instance->checkReports();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportsApi->checkReports: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.messagemedia.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeliveryReportsApi* | [**checkReports**](docs/Api/DeliveryReportsApi.md#checkreports) | **GET** /delivery_reports | Check delivery reports
*DeliveryReportsApi* | [**confirmReports**](docs/Api/DeliveryReportsApi.md#confirmreports) | **POST** /delivery_reports/confirmed | Confirm delivery reports as received
*MessagingApi* | [**getMessageStatus**](docs/Api/MessagingApi.md#getmessagestatus) | **GET** /messages/{messageId} | Get the status of a submitted message
*MessagingApi* | [**sendMessages**](docs/Api/MessagingApi.md#sendmessages) | **POST** /messages | Send one or more messages
*MessagingApi* | [**updateMessageStatus**](docs/Api/MessagingApi.md#updatemessagestatus) | **PUT** /messages/{messageId} | Cancel a scheduled message
*MessagingReportsApi* | [**getAsyncReportById**](docs/Api/MessagingReportsApi.md#getasyncreportbyid) | **GET** /reporting/async_reports/{report_id} | Gets a single asynchronous report.
*MessagingReportsApi* | [**getAsyncReportDataById**](docs/Api/MessagingReportsApi.md#getasyncreportdatabyid) | **GET** /reporting/async_reports/{report_id}/data | Gets the data of an asynchronous report.
*MessagingReportsApi* | [**getAsyncReports**](docs/Api/MessagingReportsApi.md#getasyncreports) | **GET** /reporting/async_reports | Lists asynchronous reports.
*MessagingReportsApi* | [**getDeliveryReportsDetail**](docs/Api/MessagingReportsApi.md#getdeliveryreportsdetail) | **GET** /reporting/delivery_reports/detail | Returns a list of delivery reports
*MessagingReportsApi* | [**getDeliveryReportsSummary**](docs/Api/MessagingReportsApi.md#getdeliveryreportssummary) | **GET** /reporting/delivery_reports/summary | Returns a summarised report of delivery reports
*MessagingReportsApi* | [**getMetadataKeys**](docs/Api/MessagingReportsApi.md#getmetadatakeys) | **GET** /reporting/{messageType}/metadata/keys | Returns a list of metadata keys
*MessagingReportsApi* | [**getReceivedMessagesDetail**](docs/Api/MessagingReportsApi.md#getreceivedmessagesdetail) | **GET** /reporting/received_messages/detail | Returns a list message received
*MessagingReportsApi* | [**getReceivedMessagesSummary**](docs/Api/MessagingReportsApi.md#getreceivedmessagessummary) | **GET** /reporting/received_messages/summary | Returns a summarised report of messages received
*MessagingReportsApi* | [**getSentMessagesDetail**](docs/Api/MessagingReportsApi.md#getsentmessagesdetail) | **GET** /reporting/sent_messages/detail | Returns a list of message sent
*MessagingReportsApi* | [**getSentMessagesSummary**](docs/Api/MessagingReportsApi.md#getsentmessagessummary) | **GET** /reporting/sent_messages/summary | Returns a summarised report of messages sent
*MessagingReportsApi* | [**submitAsyncDeliveryReportsDetail**](docs/Api/MessagingReportsApi.md#submitasyncdeliveryreportsdetail) | **POST** /reporting/delivery_reports/detail/async | Submits a request to generate an async detail report
*MessagingReportsApi* | [**submitDeliveryReportsSummary**](docs/Api/MessagingReportsApi.md#submitdeliveryreportssummary) | **POST** /reporting/delivery_reports/summary/async | Submits a summarised report of delivery reports
*MessagingReportsApi* | [**submitReceivedMessagesDetail**](docs/Api/MessagingReportsApi.md#submitreceivedmessagesdetail) | **POST** /reporting/received_messages/detail/async | Submits a request to generate an async detail report
*MessagingReportsApi* | [**submitReceivedMessagesSummary**](docs/Api/MessagingReportsApi.md#submitreceivedmessagessummary) | **POST** /reporting/received_messages/summary/async | Submits a summarised report of received messages
*MessagingReportsApi* | [**submitSentMessagesDetail**](docs/Api/MessagingReportsApi.md#submitsentmessagesdetail) | **POST** /reporting/sent_messages/detail/async | Submits a request to generate an async detail report
*MessagingReportsApi* | [**submitSentMessagesSummary**](docs/Api/MessagingReportsApi.md#submitsentmessagessummary) | **POST** /reporting/sent_messages/summary/async | Submits a summarised report of sent messages
*RepliesApi* | [**checkReplies**](docs/Api/RepliesApi.md#checkreplies) | **GET** /replies | Check replies
*RepliesApi* | [**confirmReplies**](docs/Api/RepliesApi.md#confirmreplies) | **POST** /replies/confirmed | Confirm replies as received


## Documentation For Models

 - [AccountsBody](docs/Model/AccountsBody.md)
 - [ActionBody](docs/Model/ActionBody.md)
 - [AsyncDeliveryReportDetailRequest](docs/Model/AsyncDeliveryReportDetailRequest.md)
 - [AsyncDeliveryReportsSummaryRequest](docs/Model/AsyncDeliveryReportsSummaryRequest.md)
 - [AsyncDeliverySentMessagesRequest](docs/Model/AsyncDeliverySentMessagesRequest.md)
 - [AsyncReceivedMessagesDetailRequest](docs/Model/AsyncReceivedMessagesDetailRequest.md)
 - [AsyncReceivedMessagesSummaryRequest](docs/Model/AsyncReceivedMessagesSummaryRequest.md)
 - [AsyncReport](docs/Model/AsyncReport.md)
 - [AsyncReportResponse](docs/Model/AsyncReportResponse.md)
 - [AsyncSentMessagesDetailRequest](docs/Model/AsyncSentMessagesDetailRequest.md)
 - [DeliveryOptionsBody](docs/Model/DeliveryOptionsBody.md)
 - [DeliveryOptionsBodyInner](docs/Model/DeliveryOptionsBodyInner.md)
 - [DeliveryReport](docs/Model/DeliveryReport.md)
 - [DeliveryReportBody](docs/Model/DeliveryReportBody.md)
 - [DeliveryReportId](docs/Model/DeliveryReportId.md)
 - [DeliveryReports](docs/Model/DeliveryReports.md)
 - [DestinationAddressBody](docs/Model/DestinationAddressBody.md)
 - [DestinationAddressCountryBody](docs/Model/DestinationAddressCountryBody.md)
 - [EndDateBody](docs/Model/EndDateBody.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [MessageFormatBody](docs/Model/MessageFormatBody.md)
 - [Messages](docs/Model/Messages.md)
 - [MetadataKeyBody](docs/Model/MetadataKeyBody.md)
 - [MetadataKeysResponse](docs/Model/MetadataKeysResponse.md)
 - [MetadataKeysResponseProperties](docs/Model/MetadataKeysResponseProperties.md)
 - [MetadataValueBody](docs/Model/MetadataValueBody.md)
 - [NewMessage](docs/Model/NewMessage.md)
 - [Pagination](docs/Model/Pagination.md)
 - [ReceivedMessage](docs/Model/ReceivedMessage.md)
 - [ReceivedMessages](docs/Model/ReceivedMessages.md)
 - [Replies](docs/Model/Replies.md)
 - [Reply](docs/Model/Reply.md)
 - [ReplyId](docs/Model/ReplyId.md)
 - [ReplyVendorAccountId](docs/Model/ReplyVendorAccountId.md)
 - [Report](docs/Model/Report.md)
 - [ReportingDetailProperties](docs/Model/ReportingDetailProperties.md)
 - [ReportingDetailPropertiesFilters](docs/Model/ReportingDetailPropertiesFilters.md)
 - [ReportingDetailPropertiesSorting](docs/Model/ReportingDetailPropertiesSorting.md)
 - [Reports](docs/Model/Reports.md)
 - [SentMessage](docs/Model/SentMessage.md)
 - [SentMessages](docs/Model/SentMessages.md)
 - [SortDirectionBody](docs/Model/SortDirectionBody.md)
 - [SourceAddressBody](docs/Model/SourceAddressBody.md)
 - [SourceAddressCountryBody](docs/Model/SourceAddressCountryBody.md)
 - [StartDateBody](docs/Model/StartDateBody.md)
 - [Status](docs/Model/Status.md)
 - [StatusBody](docs/Model/StatusBody.md)
 - [StatusCodeBody](docs/Model/StatusCodeBody.md)
 - [StatusesBody](docs/Model/StatusesBody.md)
 - [SubmittedMessage](docs/Model/SubmittedMessage.md)
 - [SubmittedMessages](docs/Model/SubmittedMessages.md)
 - [SummaryByBody](docs/Model/SummaryByBody.md)
 - [SummaryFieldBody](docs/Model/SummaryFieldBody.md)
 - [SummaryReport](docs/Model/SummaryReport.md)
 - [SummaryReportItem](docs/Model/SummaryReportItem.md)
 - [SummaryReportProperties](docs/Model/SummaryReportProperties.md)
 - [TimezoneBody](docs/Model/TimezoneBody.md)


## Documentation For Authorization


## basic

- **Type**: HTTP basic authentication


## Author

support@messagemedia.com


