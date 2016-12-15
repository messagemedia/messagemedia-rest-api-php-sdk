# MessageMedia REST API PHP SDK
Australia's Leading Messaging Solutions for Business and Enterprise.


- API version: 1.0.0
- Build date: 2016-12-15T03:27:40.047Z
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
*MessagingReportsApi* | [**getDeliveryReportsDetail**](docs/Api/MessagingReportsApi.md#getdeliveryreportsdetail) | **GET** /reporting/delivery_reports/detail | Returns a list of delivery reports
*MessagingReportsApi* | [**getDeliveryReportsSummary**](docs/Api/MessagingReportsApi.md#getdeliveryreportssummary) | **GET** /reporting/delivery_reports/summary | Returns a summarised report of delivery reports
*MessagingReportsApi* | [**getReceivedMessagesDetail**](docs/Api/MessagingReportsApi.md#getreceivedmessagesdetail) | **GET** /reporting/received_messages/detail | Returns a list message received
*MessagingReportsApi* | [**getReceivedMessagesSummary**](docs/Api/MessagingReportsApi.md#getreceivedmessagessummary) | **GET** /reporting/received_messages/summary | Returns a summarised report of messages received
*MessagingReportsApi* | [**getSentMessagesDetail**](docs/Api/MessagingReportsApi.md#getsentmessagesdetail) | **GET** /reporting/sent_messages/detail | Returns a list of message sent
*MessagingReportsApi* | [**getSentMessagesSummary**](docs/Api/MessagingReportsApi.md#getsentmessagessummary) | **GET** /reporting/sent_messages/summary | Returns a summarised report of messages sent
*RepliesApi* | [**checkReplies**](docs/Api/RepliesApi.md#checkreplies) | **GET** /replies | Check replies
*RepliesApi* | [**confirmReplies**](docs/Api/RepliesApi.md#confirmreplies) | **POST** /replies/confirmed | Confirm replies as received


## Documentation For Models

 - [DeliveryReport](docs/Model/DeliveryReport.md)
 - [DeliveryReportId](docs/Model/DeliveryReportId.md)
 - [DeliveryReports](docs/Model/DeliveryReports.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [MessageStatusCode](docs/Model/MessageStatusCode.md)
 - [Messages](docs/Model/Messages.md)
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
 - [Status](docs/Model/Status.md)
 - [SubmittedMessage](docs/Model/SubmittedMessage.md)
 - [SubmittedMessages](docs/Model/SubmittedMessages.md)
 - [SummaryReport](docs/Model/SummaryReport.md)
 - [SummaryReportData](docs/Model/SummaryReportData.md)
 - [SummaryReportProperties](docs/Model/SummaryReportProperties.md)


## Documentation For Authorization


## basic

- **Type**: HTTP basic authentication


## Author

support@messagemedia.com


