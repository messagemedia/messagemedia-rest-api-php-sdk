# MessageMedia\RESTAPI\RepliesApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkReplies**](RepliesApi.md#checkReplies) | **GET** /replies | Check replies
[**confirmReplies**](RepliesApi.md#confirmReplies) | **POST** /replies/confirmed | Confirm replies as received


# **checkReplies**
> \MessageMedia\RESTAPI\Model\Replies checkReplies()

Check replies

Return up to 100 reply messages that have been received and haven't been confirmed using the confirm replies endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\RepliesApi();

try {
    $result = $api_instance->checkReplies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepliesApi->checkReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MessageMedia\RESTAPI\Model\Replies**](../Model/Replies.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmReplies**
> confirmReplies($reply_id)

Confirm replies as received

Confirm the specified replies as being received so they will no longer be returned in check replies requests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\RepliesApi();
$reply_id = new \MessageMedia\RESTAPI\Model\ReplyId(); // \MessageMedia\RESTAPI\Model\ReplyId | A list of reply IDs to mark as confirmed

try {
    $api_instance->confirmReplies($reply_id);
} catch (Exception $e) {
    echo 'Exception when calling RepliesApi->confirmReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reply_id** | [**\MessageMedia\RESTAPI\Model\ReplyId**](../Model/\MessageMedia\RESTAPI\Model\ReplyId.md)| A list of reply IDs to mark as confirmed |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

