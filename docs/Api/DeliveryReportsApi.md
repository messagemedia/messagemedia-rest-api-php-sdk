# MessageMedia\RESTAPI\DeliveryReportsApi

All URIs are relative to *https://api.messagemedia.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkReports**](DeliveryReportsApi.md#checkReports) | **GET** /delivery_reports | Check delivery reports
[**confirmReports**](DeliveryReportsApi.md#confirmReports) | **POST** /delivery_reports/confirmed | Confirm delivery reports as received


# **checkReports**
> \MessageMedia\RESTAPI\Model\Reports checkReports()

Check delivery reports

Return up to 100 delivery reports that have been received and haven't been confirmed using the confirm reports endpoint

### Example
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

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MessageMedia\RESTAPI\Model\Reports**](../Model/Reports.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmReports**
> confirmReports($delivery_report_id)

Confirm delivery reports as received

Confirm the specified delivery reports as being received so they will no longer be returned in check delivery reports requests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MessageMedia\RESTAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MessageMedia\RESTAPI\Api\DeliveryReportsApi();
$delivery_report_id = new \MessageMedia\RESTAPI\Model\DeliveryReportId(); // \MessageMedia\RESTAPI\Model\DeliveryReportId | A list of delivery report IDs to mark as confirmed

try {
    $api_instance->confirmReports($delivery_report_id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportsApi->confirmReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_report_id** | [**\MessageMedia\RESTAPI\Model\DeliveryReportId**](../Model/\MessageMedia\RESTAPI\Model\DeliveryReportId.md)| A list of delivery report IDs to mark as confirmed |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

