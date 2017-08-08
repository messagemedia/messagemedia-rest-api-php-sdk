# MessageMedia\RESTAPI\MessagingReportsApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAsyncReportById**](MessagingReportsApi.md#getAsyncReportById) | **GET** /reporting/async_reports/{report_id} | Gets a single asynchronous report.
[**getAsyncReportDataById**](MessagingReportsApi.md#getAsyncReportDataById) | **GET** /reporting/async_reports/{report_id}/data | Gets the data of an asynchronous report.
[**getAsyncReports**](MessagingReportsApi.md#getAsyncReports) | **GET** /reporting/async_reports | Lists asynchronous reports.
[**getDeliveryReportsDetail**](MessagingReportsApi.md#getDeliveryReportsDetail) | **GET** /reporting/delivery_reports/detail | Returns a list of delivery reports
[**getDeliveryReportsSummary**](MessagingReportsApi.md#getDeliveryReportsSummary) | **GET** /reporting/delivery_reports/summary | Returns a summarised report of delivery reports
[**getMetadataKeys**](MessagingReportsApi.md#getMetadataKeys) | **GET** /reporting/{messageType}/metadata/keys | Returns a list of metadata keys
[**getReceivedMessagesDetail**](MessagingReportsApi.md#getReceivedMessagesDetail) | **GET** /reporting/received_messages/detail | Returns a list message received
[**getReceivedMessagesSummary**](MessagingReportsApi.md#getReceivedMessagesSummary) | **GET** /reporting/received_messages/summary | Returns a summarised report of messages received
[**getSentMessagesDetail**](MessagingReportsApi.md#getSentMessagesDetail) | **GET** /reporting/sent_messages/detail | Returns a list of message sent
[**getSentMessagesSummary**](MessagingReportsApi.md#getSentMessagesSummary) | **GET** /reporting/sent_messages/summary | Returns a summarised report of messages sent
[**submitAsyncDeliveryReportsDetail**](MessagingReportsApi.md#submitAsyncDeliveryReportsDetail) | **POST** /reporting/delivery_reports/detail/async | Submits a request to generate an async detail report
[**submitDeliveryReportsSummary**](MessagingReportsApi.md#submitDeliveryReportsSummary) | **POST** /reporting/delivery_reports/summary/async | Submits a summarised report of delivery reports
[**submitReceivedMessagesDetail**](MessagingReportsApi.md#submitReceivedMessagesDetail) | **POST** /reporting/received_messages/detail/async | Submits a request to generate an async detail report
[**submitReceivedMessagesSummary**](MessagingReportsApi.md#submitReceivedMessagesSummary) | **POST** /reporting/received_messages/summary/async | Submits a summarised report of received messages
[**submitSentMessagesDetail**](MessagingReportsApi.md#submitSentMessagesDetail) | **POST** /reporting/sent_messages/detail/async | Submits a request to generate an async detail report
[**submitSentMessagesSummary**](MessagingReportsApi.md#submitSentMessagesSummary) | **POST** /reporting/sent_messages/summary/async | Submits a summarised report of sent messages


# **getAsyncReportById**
> \MessageMedia\RESTAPI\Model\AsyncReport getAsyncReportById($report_id)

Gets a single asynchronous report.

This endpoints shows information of a single requested asynchronous report.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$report_id = "report_id_example"; // string | Unique ID of the async report

try {
    $result = $api_instance->getAsyncReportById($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getAsyncReportById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| Unique ID of the async report |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReport**](../Model/AsyncReport.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAsyncReportDataById**
> \SplFileObject getAsyncReportDataById($report_id)

Gets the data of an asynchronous report.

This endpoints gets the data of an asynchronous report as a download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$report_id = "report_id_example"; // string | Unique ID of the async report

try {
    $result = $api_instance->getAsyncReportDataById($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getAsyncReportDataById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| Unique ID of the async report |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAsyncReports**
> \MessageMedia\RESTAPI\Model\InlineResponse200 getAsyncReports($page, $page_size)

Lists asynchronous reports.

This endpoint lists all the requested asynchronous reports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$page = 56; // int | Page number for paging through paginated result sets.
$page_size = 56; // int | Number of results to return in a page for paginated result sets.

try {
    $result = $api_instance->getAsyncReports($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getAsyncReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number for paging through paginated result sets. | [optional]
 **page_size** | **int**| Number of results to return in a page for paginated result sets. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryReportsDetail**
> \MessageMedia\RESTAPI\Model\DeliveryReports getDeliveryReportsDetail($end_date, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone)

Returns a list of delivery reports

Returns a detailed list of all delivery reports received during the specified time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$status = "status_example"; // string | Filter results by message status. Can't be combined with statuses.
$statuses = array("statuses_example"); // string[] | Filter results by message status. Can't be combined with status.
$page = 56; // int | Page number for paging through paginated result sets.
$page_size = 56; // int | Number of results to return in a page for paginated result sets.
$sort_by = "sort_by_example"; // string | Field to sort results set by
$sort_direction = "sort_direction_example"; // string | Order to sort results by.
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getDeliveryReportsDetail($end_date, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getDeliveryReportsDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **status** | **string**| Filter results by message status. Can&#39;t be combined with statuses. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Filter results by message status. Can&#39;t be combined with status. | [optional]
 **page** | **int**| Page number for paging through paginated result sets. | [optional]
 **page_size** | **int**| Number of results to return in a page for paginated result sets. | [optional]
 **sort_by** | **string**| Field to sort results set by | [optional]
 **sort_direction** | **string**| Order to sort results by. | [optional]
 **source_address_country** | **string**| Filter results by source address country. | [optional]
 **source_address** | **string**| Filter results by source address. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\DeliveryReports**](../Model/DeliveryReports.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryReportsSummary**
> \MessageMedia\RESTAPI\Model\SummaryReport getDeliveryReportsSummary($end_date, $group_by, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $summary_by, $summary_field, $source_address_country, $source_address, $timezone)

Returns a summarised report of delivery reports

Returns a summarised report of all delivery reports received during the specified time, grouped by by the specified grouping parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$group_by = array("group_by_example"); // string[] | List of fields to group results set by
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$status = "status_example"; // string | Filter results by message status. Can't be combined with statuses.
$statuses = array("statuses_example"); // string[] | Filter results by message status. Can't be combined with status.
$summary_by = "summary_by_example"; // string | Function to apply when summarising results
$summary_field = "summary_field_example"; // string | Field to summarise results by
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getDeliveryReportsSummary($end_date, $group_by, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getDeliveryReportsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **group_by** | [**string[]**](../Model/string.md)| List of fields to group results set by |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **status** | **string**| Filter results by message status. Can&#39;t be combined with statuses. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Filter results by message status. Can&#39;t be combined with status. | [optional]
 **summary_by** | **string**| Function to apply when summarising results | [optional]
 **summary_field** | **string**| Field to summarise results by | [optional]
 **source_address_country** | **string**| Filter results by source address country. | [optional]
 **source_address** | **string**| Filter results by source address. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\SummaryReport**](../Model/SummaryReport.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadataKeys**
> \MessageMedia\RESTAPI\Model\MetadataKeysResponse getMetadataKeys($message_type, $start_date, $end_date, $accounts, $timezone)

Returns a list of metadata keys

Returns a list of all metadata keys used for the specified message type during the specified time. Results are limited to 100 keys.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$message_type = "message_type_example"; // string | Message type. Possible values are sent messages, received messages and delivery receipts.
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getMetadataKeys($message_type, $start_date, $end_date, $accounts, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getMetadataKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_type** | **string**| Message type. Possible values are sent messages, received messages and delivery receipts. |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\MetadataKeysResponse**](../Model/MetadataKeysResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivedMessagesDetail**
> \MessageMedia\RESTAPI\Model\ReceivedMessages getReceivedMessagesDetail($end_date, $start_date, $accounts, $action, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone)

Returns a list message received

Returns a detailed list of all message received during the specified time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$action = "action_example"; // string | Filter results by the action that was invoked for this message.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$page = 56; // int | Page number for paging through paginated result sets.
$page_size = 56; // int | Number of results to return in a page for paginated result sets.
$sort_by = "sort_by_example"; // string | Field to sort results set by
$sort_direction = "sort_direction_example"; // string | Order to sort results by.
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getReceivedMessagesDetail($end_date, $start_date, $accounts, $action, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getReceivedMessagesDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **action** | **string**| Filter results by the action that was invoked for this message. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **page** | **int**| Page number for paging through paginated result sets. | [optional]
 **page_size** | **int**| Number of results to return in a page for paginated result sets. | [optional]
 **sort_by** | **string**| Field to sort results set by | [optional]
 **sort_direction** | **string**| Order to sort results by. | [optional]
 **source_address_country** | **string**| Filter results by source address country. | [optional]
 **source_address** | **string**| Filter results by source address. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\ReceivedMessages**](../Model/ReceivedMessages.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivedMessagesSummary**
> \MessageMedia\RESTAPI\Model\SummaryReport getReceivedMessagesSummary($end_date, $group_by, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $summary_by, $summary_field, $source_address_country, $source_address, $timezone)

Returns a summarised report of messages received

Returns a summarised report of all messages received during the specified time, grouped by by the specified grouping parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$group_by = array("group_by_example"); // string[] | List of fields to group results set by
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$summary_by = "summary_by_example"; // string | Function to apply when summarising results
$summary_field = "summary_field_example"; // string | Field to summarise results by
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getReceivedMessagesSummary($end_date, $group_by, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getReceivedMessagesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **group_by** | [**string[]**](../Model/string.md)| List of fields to group results set by |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **summary_by** | **string**| Function to apply when summarising results | [optional]
 **summary_field** | **string**| Field to summarise results by | [optional]
 **source_address_country** | **string**| Filter results by source address country. | [optional]
 **source_address** | **string**| Filter results by source address. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\SummaryReport**](../Model/SummaryReport.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSentMessagesDetail**
> \MessageMedia\RESTAPI\Model\SentMessages getSentMessagesDetail($end_date, $start_date, $accounts, $delivery_report, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone)

Returns a list of message sent

Returns a detailed list of all message sent during the specified time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$delivery_report = true; // bool | Filter results by delivery report.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$status = "status_example"; // string | Filter results by message status. Can't be combined with statuses.
$statuses = array("statuses_example"); // string[] | Filter results by message status. Can't be combined with status.
$page = 56; // int | Page number for paging through paginated result sets.
$page_size = 56; // int | Number of results to return in a page for paginated result sets.
$sort_by = "sort_by_example"; // string | Field to sort results set by
$sort_direction = "sort_direction_example"; // string | Order to sort results by.
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getSentMessagesDetail($end_date, $start_date, $accounts, $delivery_report, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getSentMessagesDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **delivery_report** | **bool**| Filter results by delivery report. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **status** | **string**| Filter results by message status. Can&#39;t be combined with statuses. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Filter results by message status. Can&#39;t be combined with status. | [optional]
 **page** | **int**| Page number for paging through paginated result sets. | [optional]
 **page_size** | **int**| Number of results to return in a page for paginated result sets. | [optional]
 **sort_by** | **string**| Field to sort results set by | [optional]
 **sort_direction** | **string**| Order to sort results by. | [optional]
 **source_address_country** | **string**| Filter results by source address country. | [optional]
 **source_address** | **string**| Filter results by source address. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\SentMessages**](../Model/SentMessages.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSentMessagesSummary**
> \MessageMedia\RESTAPI\Model\SummaryReport getSentMessagesSummary($end_date, $group_by, $start_date, $accounts, $delivery_report, $destination_address_country, $destination_address, $summary_by, $summary_field, $message_format, $metadata_key, $metadata_value, $status_code, $source_address_country, $source_address, $timezone)

Returns a summarised report of messages sent

Returns a summarised report of all messages sent during the specified time, grouped by by the specified grouping parameter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$end_date = "end_date_example"; // string | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$group_by = array("group_by_example"); // string[] | List of fields to group results set by
$start_date = "start_date_example"; // string | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \"yyyy-MM-dd'T'HH:mm:ss\", e.g. \"2017-02-10T13:30:00\".
$accounts = "accounts_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$delivery_report = true; // bool | Filter results by delivery report.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$summary_by = "summary_by_example"; // string | Function to apply when summarising results
$summary_field = "summary_field_example"; // string | Field to summarise results by
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getSentMessagesSummary($end_date, $group_by, $start_date, $accounts, $delivery_report, $destination_address_country, $destination_address, $summary_by, $summary_field, $message_format, $metadata_key, $metadata_value, $status_code, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getSentMessagesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **string**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **group_by** | [**string[]**](../Model/string.md)| List of fields to group results set by |
 **start_date** | **string**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. |
 **accounts** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **delivery_report** | **bool**| Filter results by delivery report. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **summary_by** | **string**| Function to apply when summarising results | [optional]
 **summary_field** | **string**| Field to summarise results by | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **source_address_country** | **string**| Filter results by source address country. | [optional]
 **source_address** | **string**| Filter results by source address. | [optional]
 **timezone** | **string**| The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. | [optional]

### Return type

[**\MessageMedia\RESTAPI\Model\SummaryReport**](../Model/SummaryReport.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitAsyncDeliveryReportsDetail**
> \MessageMedia\RESTAPI\Model\AsyncReportResponse submitAsyncDeliveryReportsDetail($async_delivery_report_detail_request)

Submits a request to generate an async detail report

Submits a request to generate an async detail report of all delivery reports received during the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$async_delivery_report_detail_request = new \MessageMedia\RESTAPI\Model\AsyncDeliveryReportDetailRequest(); // \MessageMedia\RESTAPI\Model\AsyncDeliveryReportDetailRequest | 

try {
    $result = $api_instance->submitAsyncDeliveryReportsDetail($async_delivery_report_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->submitAsyncDeliveryReportsDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_delivery_report_detail_request** | [**\MessageMedia\RESTAPI\Model\AsyncDeliveryReportDetailRequest**](../Model/\MessageMedia\RESTAPI\Model\AsyncDeliveryReportDetailRequest.md)|  |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitDeliveryReportsSummary**
> \MessageMedia\RESTAPI\Model\AsyncReportResponse submitDeliveryReportsSummary($async_delivery_reports_summary_request)

Submits a summarised report of delivery reports

Submits a request to generate an async summary report of all delivery reports during the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$async_delivery_reports_summary_request = new \MessageMedia\RESTAPI\Model\AsyncDeliveryReportsSummaryRequest(); // \MessageMedia\RESTAPI\Model\AsyncDeliveryReportsSummaryRequest | 

try {
    $result = $api_instance->submitDeliveryReportsSummary($async_delivery_reports_summary_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->submitDeliveryReportsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_delivery_reports_summary_request** | [**\MessageMedia\RESTAPI\Model\AsyncDeliveryReportsSummaryRequest**](../Model/\MessageMedia\RESTAPI\Model\AsyncDeliveryReportsSummaryRequest.md)|  |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitReceivedMessagesDetail**
> \MessageMedia\RESTAPI\Model\AsyncReportResponse submitReceivedMessagesDetail($async_received_messages_detail_request)

Submits a request to generate an async detail report

Submits a request to generate an async detail report of all received messages during the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$async_received_messages_detail_request = new \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesDetailRequest(); // \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesDetailRequest | 

try {
    $result = $api_instance->submitReceivedMessagesDetail($async_received_messages_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->submitReceivedMessagesDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_received_messages_detail_request** | [**\MessageMedia\RESTAPI\Model\AsyncReceivedMessagesDetailRequest**](../Model/\MessageMedia\RESTAPI\Model\AsyncReceivedMessagesDetailRequest.md)|  |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitReceivedMessagesSummary**
> \MessageMedia\RESTAPI\Model\AsyncReportResponse submitReceivedMessagesSummary($async_received_messages_summary_request)

Submits a summarised report of received messages

Submits a request to generate an async summary report of all received messages during the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$async_received_messages_summary_request = new \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesSummaryRequest(); // \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesSummaryRequest | 

try {
    $result = $api_instance->submitReceivedMessagesSummary($async_received_messages_summary_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->submitReceivedMessagesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_received_messages_summary_request** | [**\MessageMedia\RESTAPI\Model\AsyncReceivedMessagesSummaryRequest**](../Model/\MessageMedia\RESTAPI\Model\AsyncReceivedMessagesSummaryRequest.md)|  |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitSentMessagesDetail**
> \MessageMedia\RESTAPI\Model\AsyncReportResponse submitSentMessagesDetail($async_sent_messages_detail_request)

Submits a request to generate an async detail report

Submits a request to generate an async detail report of all sent messages during the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$async_sent_messages_detail_request = new \MessageMedia\RESTAPI\Model\AsyncSentMessagesDetailRequest(); // \MessageMedia\RESTAPI\Model\AsyncSentMessagesDetailRequest | 

try {
    $result = $api_instance->submitSentMessagesDetail($async_sent_messages_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->submitSentMessagesDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_sent_messages_detail_request** | [**\MessageMedia\RESTAPI\Model\AsyncSentMessagesDetailRequest**](../Model/\MessageMedia\RESTAPI\Model\AsyncSentMessagesDetailRequest.md)|  |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitSentMessagesSummary**
> \MessageMedia\RESTAPI\Model\AsyncReportResponse submitSentMessagesSummary($async_delivery_sent_messages_request)

Submits a summarised report of sent messages

Submits a request to generate an async summary report of all sent messages during the specified time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\MessagingReportsApi();
$async_delivery_sent_messages_request = new \MessageMedia\RESTAPI\Model\AsyncDeliverySentMessagesRequest(); // \MessageMedia\RESTAPI\Model\AsyncDeliverySentMessagesRequest | 

try {
    $result = $api_instance->submitSentMessagesSummary($async_delivery_sent_messages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->submitSentMessagesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_delivery_sent_messages_request** | [**\MessageMedia\RESTAPI\Model\AsyncDeliverySentMessagesRequest**](../Model/\MessageMedia\RESTAPI\Model\AsyncDeliverySentMessagesRequest.md)|  |

### Return type

[**\MessageMedia\RESTAPI\Model\AsyncReportResponse**](../Model/AsyncReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

