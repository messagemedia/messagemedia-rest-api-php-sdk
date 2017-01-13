# MessageMedia\RESTAPI\MessagingApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessageStatus**](MessagingApi.md#getMessageStatus) | **GET** /messages/{messageId} | Get the status of a submitted message
[**sendMessages**](MessagingApi.md#sendMessages) | **POST** /messages | Send one or more messages
[**updateMessageStatus**](MessagingApi.md#updateMessageStatus) | **PUT** /messages/{messageId} | Cancel a scheduled message


# **getMessageStatus**
> \MessageMedia\RESTAPI\Model\SubmittedMessage getMessageStatus($message_id)

Get the status of a submitted message

Get the status and details of a previously submitted message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingApi();
$message_id = "message_id_example"; // string | Unique ID representing message that has been submitted

try {
    $result = $api_instance->getMessageStatus($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessageStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique ID representing message that has been submitted |

### Return type

[**\MessageMedia\RESTAPI\Model\SubmittedMessage**](../Model/SubmittedMessage.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessages**
> \MessageMedia\RESTAPI\Model\SubmittedMessages sendMessages($messages)

Send one or more messages

Submit one or more (up to 100 per request) SMS or text to voice messages to be sent to the destination address. - A callback URL can be included with each message to which MO and DR notifications will be pushed to via a HTTP POST request. - The content of the message can be a Unicode string, up to 5000 characters long - A delivery report can be be requested with the message which will be pushed to a HTTP endpoint if specified, or available via the Check Reports endpoint. - The destination number should be specified in E.164 international format. For information on E.164, please refer to http://en.wikipedia.org/wiki/E.164 - The format specifies which format the message will be sent as, SMS (text message) or TTS (text to speech). With TTS format, we will call the destination number and read out the message using a computer generated voice. - If specified the source number included in the request will be shown as the source number for the message, this feature is not enabled by default, please contact MessageMedia for more information. - If a source number is specified, the type of source number may also be specified. This is recommended when using a source address type that is not an internationally formatted number, available options are INTERNATIONAL, ALPHANUMERIC or SHORTCODE - The message will be scheduled to be delivered in the future if the scheduled parameter is specified. - A message expiry timestamp can be provided, if the message is not delivered by this time, it will be discarded. - Metadata can be included with the message. Up to 10 key value pair strings can be included with each message. This metadata will be available in delivery reports and replies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingApi();
$messages = new \MessageMedia\RESTAPI\Model\Messages(); // \MessageMedia\RESTAPI\Model\Messages | A list of messages to be sent

try {
    $result = $api_instance->sendMessages($messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messages** | [**\MessageMedia\RESTAPI\Model\Messages**](../Model/\MessageMedia\RESTAPI\Model\Messages.md)| A list of messages to be sent |

### Return type

[**\MessageMedia\RESTAPI\Model\SubmittedMessages**](../Model/SubmittedMessages.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageStatus**
> updateMessageStatus($message_id, $status)

Cancel a scheduled message

Cancel a scheduled message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingApi();
$message_id = "message_id_example"; // string | Unique ID representing message to be updated
$status = new \MessageMedia\RESTAPI\Model\Status(); // \MessageMedia\RESTAPI\Model\Status | New status for the message

try {
    $api_instance->updateMessageStatus($message_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->updateMessageStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique ID representing message to be updated |
 **status** | [**\MessageMedia\RESTAPI\Model\Status**](../Model/\MessageMedia\RESTAPI\Model\Status.md)| New status for the message |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

