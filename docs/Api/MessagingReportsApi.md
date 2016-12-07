# MessageMedia\RESTAPI\MessagingReportsApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryReportsDetail**](MessagingReportsApi.md#getDeliveryReportsDetail) | **GET** /reporting/delivery_reports/detail | Returns a list of delivery reports
[**getDeliveryReportsSummary**](MessagingReportsApi.md#getDeliveryReportsSummary) | **GET** /reporting/delivery_reports/summary | Returns a summarised report of delivery reports
[**getReceivedMessagesDetail**](MessagingReportsApi.md#getReceivedMessagesDetail) | **GET** /reporting/received_messages/detail | Returns a list message received
[**getReceivedMessagesSummary**](MessagingReportsApi.md#getReceivedMessagesSummary) | **GET** /reporting/received_messages/summary | Returns a summarised report of messages received
[**getSentMessagesDetail**](MessagingReportsApi.md#getSentMessagesDetail) | **GET** /reporting/sent_messages/detail | Returns a list of message sent
[**getSentMessagesSummary**](MessagingReportsApi.md#getSentMessagesSummary) | **GET** /reporting/sent_messages/summary | Returns a summarised report of messages sent


# **getDeliveryReportsDetail**
> \MessageMedia\RESTAPI\Model\DeliveryReports getDeliveryReportsDetail($end_date, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone)

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
$end_date = new \DateTime(); // \DateTime | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$start_date = new \DateTime(); // \DateTime | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$account = "account_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$status = "status_example"; // string | Filter results by message status.
$page = 56; // int | Page number for paging through paginated result sets.
$page_size = 56; // int | Number of results to return in a page for paginated result sets.
$sort_by = "sort_by_example"; // string | Field to sort results set by
$sort_direction = "sort_direction_example"; // string | Order to sort results by.
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getDeliveryReportsDetail($end_date, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getDeliveryReportsDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **\DateTime**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **start_date** | **\DateTime**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **account** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **status** | **string**| Filter results by message status. | [optional]
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
> \MessageMedia\RESTAPI\Model\SummaryReport getDeliveryReportsSummary($end_date, $group_by, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $summary_by, $summary_field, $source_address_country, $source_address, $timezone)

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
$end_date = new \DateTime(); // \DateTime | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$group_by = "group_by_example"; // string | Field to group results set by
$start_date = new \DateTime(); // \DateTime | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$account = "account_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$status = "status_example"; // string | Filter results by message status.
$summary_by = "summary_by_example"; // string | Function to apply when summarising results
$summary_field = "summary_field_example"; // string | Field to summarise results by
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getDeliveryReportsSummary($end_date, $group_by, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getDeliveryReportsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **\DateTime**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **group_by** | **string**| Field to group results set by |
 **start_date** | **\DateTime**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **account** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **status** | **string**| Filter results by message status. | [optional]
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

# **getReceivedMessagesDetail**
> \MessageMedia\RESTAPI\Model\ReceivedMessages getReceivedMessagesDetail($end_date, $start_date, $account, $action, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone)

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
$end_date = new \DateTime(); // \DateTime | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$start_date = new \DateTime(); // \DateTime | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$account = "account_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
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
    $result = $api_instance->getReceivedMessagesDetail($end_date, $start_date, $account, $action, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getReceivedMessagesDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **\DateTime**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **start_date** | **\DateTime**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **account** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
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
> \MessageMedia\RESTAPI\Model\SummaryReport getReceivedMessagesSummary($end_date, $group_by, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $summary_by, $summary_field, $source_address_country, $source_address, $timezone)

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
$end_date = new \DateTime(); // \DateTime | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$group_by = "group_by_example"; // string | Field to group results set by
$start_date = new \DateTime(); // \DateTime | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$account = "account_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
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
    $result = $api_instance->getReceivedMessagesSummary($end_date, $group_by, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getReceivedMessagesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **\DateTime**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **group_by** | **string**| Field to group results set by |
 **start_date** | **\DateTime**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **account** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
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
> \MessageMedia\RESTAPI\Model\SentMessages getSentMessagesDetail($end_date, $start_date, $account, $delivery_report, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone)

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
$end_date = new \DateTime(); // \DateTime | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$start_date = new \DateTime(); // \DateTime | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$account = "account_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
$delivery_report = true; // bool | Filter results by delivery report.
$destination_address_country = "destination_address_country_example"; // string | Filter results by destination address country.
$destination_address = "destination_address_example"; // string | Filter results by destination address.
$message_format = "message_format_example"; // string | Filter results by message format.
$metadata_key = "metadata_key_example"; // string | Filter results for messages that include a metadata key.
$metadata_value = "metadata_value_example"; // string | Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided.
$status_code = "status_code_example"; // string | Filter results by message status code.
$status = "status_example"; // string | Filter results by message status.
$page = 56; // int | Page number for paging through paginated result sets.
$page_size = 56; // int | Number of results to return in a page for paginated result sets.
$sort_by = "sort_by_example"; // string | Field to sort results set by
$sort_direction = "sort_direction_example"; // string | Order to sort results by.
$source_address_country = "source_address_country_example"; // string | Filter results by source address country.
$source_address = "source_address_example"; // string | Filter results by source address.
$timezone = "timezone_example"; // string | The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. 'Australia/Melbourne'.

try {
    $result = $api_instance->getSentMessagesDetail($end_date, $start_date, $account, $delivery_report, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getSentMessagesDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **\DateTime**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **start_date** | **\DateTime**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **account** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
 **delivery_report** | **bool**| Filter results by delivery report. | [optional]
 **destination_address_country** | **string**| Filter results by destination address country. | [optional]
 **destination_address** | **string**| Filter results by destination address. | [optional]
 **message_format** | **string**| Filter results by message format. | [optional]
 **metadata_key** | **string**| Filter results for messages that include a metadata key. | [optional]
 **metadata_value** | **string**| Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. | [optional]
 **status_code** | **string**| Filter results by message status code. | [optional]
 **status** | **string**| Filter results by message status. | [optional]
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
> \MessageMedia\RESTAPI\Model\SummaryReport getSentMessagesSummary($end_date, $group_by, $start_date, $account, $delivery_report, $destination_address_country, $destination_address, $summary_by, $summary_field, $message_format, $metadata_key, $metadata_value, $status_code, $source_address_country, $source_address, $timezone)

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
$end_date = new \DateTime(); // \DateTime | End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$group_by = "group_by_example"; // string | Field to group results set by
$start_date = new \DateTime(); // \DateTime | Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request.
$account = "account_example"; // string | Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts.
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
    $result = $api_instance->getSentMessagesSummary($end_date, $group_by, $start_date, $account, $delivery_report, $destination_address_country, $destination_address, $summary_by, $summary_field, $message_format, $metadata_key, $metadata_value, $status_code, $source_address_country, $source_address, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingReportsApi->getSentMessagesSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_date** | **\DateTime**| End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **group_by** | **string**| Field to group results set by |
 **start_date** | **\DateTime**| Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. |
 **account** | **string**| Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. | [optional]
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

