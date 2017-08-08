<?php
/**
 * MessagingReportsApi
 * PHP version 5
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */

/**
 * MessageMedia REST API
 *
 * Australia's Leading Messaging Solutions for Business and Enterprise.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@messagemedia.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Do not edit the class manually.
 */

namespace MessageMedia\RESTAPI\Api;

use \MessageMedia\RESTAPI\Configuration;
use \MessageMedia\RESTAPI\ApiClient;
use \MessageMedia\RESTAPI\ApiException;
use \MessageMedia\RESTAPI\ObjectSerializer;

/**
 * MessagingReportsApi Class Doc Comment
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class MessagingReportsApi
{

    /**
     * API Client
     *
     * @var \MessageMedia\RESTAPI\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \MessageMedia\RESTAPI\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\MessageMedia\RESTAPI\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.messagemedia.com/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \MessageMedia\RESTAPI\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \MessageMedia\RESTAPI\ApiClient $apiClient set the API client
     *
     * @return MessagingReportsApi
     */
    public function setApiClient(\MessageMedia\RESTAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAsyncReportById
     *
     * Gets a single asynchronous report.
     *
     * @param string $report_id Unique ID of the async report (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReport
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getAsyncReportById($report_id)
    {
        list($response) = $this->getAsyncReportByIdWithHttpInfo($report_id);
        return $response;
    }

    /**
     * Operation getAsyncReportByIdWithHttpInfo
     *
     * Gets a single asynchronous report.
     *
     * @param string $report_id Unique ID of the async report (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getAsyncReportByIdWithHttpInfo($report_id)
    {
        // verify the required parameter 'report_id' is set
        if ($report_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_id when calling getAsyncReportById');
        }
        // parse inputs
        $resourcePath = "/reporting/async_reports/{report_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($report_id !== null) {
            $resourcePath = str_replace(
                "{" . "report_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReport',
                '/reporting/async_reports/{report_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReport', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAsyncReportDataById
     *
     * Gets the data of an asynchronous report.
     *
     * @param string $report_id Unique ID of the async report (required)
     * @return \SplFileObject
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getAsyncReportDataById($report_id)
    {
        list($response) = $this->getAsyncReportDataByIdWithHttpInfo($report_id);
        return $response;
    }

    /**
     * Operation getAsyncReportDataByIdWithHttpInfo
     *
     * Gets the data of an asynchronous report.
     *
     * @param string $report_id Unique ID of the async report (required)
     * @return Array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getAsyncReportDataByIdWithHttpInfo($report_id)
    {
        // verify the required parameter 'report_id' is set
        if ($report_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_id when calling getAsyncReportDataById');
        }
        // parse inputs
        $resourcePath = "/reporting/async_reports/{report_id}/data";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($report_id !== null) {
            $resourcePath = str_replace(
                "{" . "report_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SplFileObject',
                '/reporting/async_reports/{report_id}/data'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAsyncReports
     *
     * Lists asynchronous reports.
     *
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @return \MessageMedia\RESTAPI\Model\InlineResponse200
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getAsyncReports($page = null, $page_size = null)
    {
        list($response) = $this->getAsyncReportsWithHttpInfo($page, $page_size);
        return $response;
    }

    /**
     * Operation getAsyncReportsWithHttpInfo
     *
     * Lists asynchronous reports.
     *
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getAsyncReportsWithHttpInfo($page = null, $page_size = null)
    {
        if (!is_null($page) && ($page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling MessagingReportsApi.getAsyncReports, must be bigger than or equal to 1.0.');
        }

        if (!is_null($page_size) && ($page_size > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getAsyncReports, must be smaller than or equal to 100.0.');
        }
        if (!is_null($page_size) && ($page_size < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getAsyncReports, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/reporting/async_reports";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\InlineResponse200',
                '/reporting/async_reports'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDeliveryReportsDetail
     *
     * Returns a list of delivery reports
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. Can&#39;t be combined with statuses. (optional)
     * @param string[] $statuses Filter results by message status. Can&#39;t be combined with status. (optional)
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @param string $sort_by Field to sort results set by (optional)
     * @param string $sort_direction Order to sort results by. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\DeliveryReports
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getDeliveryReportsDetail($end_date, $start_date, $accounts = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $statuses = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getDeliveryReportsDetailWithHttpInfo($end_date, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getDeliveryReportsDetailWithHttpInfo
     *
     * Returns a list of delivery reports
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. Can&#39;t be combined with statuses. (optional)
     * @param string[] $statuses Filter results by message status. Can&#39;t be combined with status. (optional)
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @param string $sort_by Field to sort results set by (optional)
     * @param string $sort_direction Order to sort results by. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\DeliveryReports, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getDeliveryReportsDetailWithHttpInfo($end_date, $start_date, $accounts = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $statuses = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getDeliveryReportsDetail');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getDeliveryReportsDetail');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($destination_address) && (strlen($destination_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($destination_address) && (strlen($destination_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_key) && (strlen($metadata_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 100.');
        }
        if (!is_null($metadata_key) && (strlen($metadata_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_value) && (strlen($metadata_value) > 256)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 256.');
        }
        if (!is_null($metadata_value) && (strlen($metadata_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($status_code) && (strlen($status_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 3.');
        }
        if (!is_null($status_code) && (strlen($status_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 3.');
        }

        if (!is_null($status) && (strlen($status) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$status" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($status) && (strlen($status) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$status" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($statuses) && (strlen($statuses) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$statuses" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($statuses) && (strlen($statuses) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$statuses" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($page) && ($page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.0.');
        }

        if (!is_null($page_size) && ($page_size > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 100.0.');
        }
        if (!is_null($page_size) && ($page_size < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.0.');
        }

        if (!is_null($source_address) && (strlen($source_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($source_address) && (strlen($source_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/delivery_reports/detail";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($destination_address_country !== null) {
            $queryParams['destination_address_country'] = $this->apiClient->getSerializer()->toQueryValue($destination_address_country);
        }
        // query params
        if ($destination_address !== null) {
            $queryParams['destination_address'] = $this->apiClient->getSerializer()->toQueryValue($destination_address);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($message_format !== null) {
            $queryParams['message_format'] = $this->apiClient->getSerializer()->toQueryValue($message_format);
        }
        // query params
        if ($metadata_key !== null) {
            $queryParams['metadata_key'] = $this->apiClient->getSerializer()->toQueryValue($metadata_key);
        }
        // query params
        if ($metadata_value !== null) {
            $queryParams['metadata_value'] = $this->apiClient->getSerializer()->toQueryValue($metadata_value);
        }
        // query params
        if ($status_code !== null) {
            $queryParams['status_code'] = $this->apiClient->getSerializer()->toQueryValue($status_code);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if (is_array($statuses)) {
            $statuses = $this->apiClient->getSerializer()->serializeCollection($statuses, 'multi', true);
        }
        if ($statuses !== null) {
            $queryParams['statuses'] = $this->apiClient->getSerializer()->toQueryValue($statuses);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
        }
        // query params
        if ($source_address_country !== null) {
            $queryParams['source_address_country'] = $this->apiClient->getSerializer()->toQueryValue($source_address_country);
        }
        // query params
        if ($source_address !== null) {
            $queryParams['source_address'] = $this->apiClient->getSerializer()->toQueryValue($source_address);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\DeliveryReports',
                '/reporting/delivery_reports/detail'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\DeliveryReports', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\DeliveryReports', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDeliveryReportsSummary
     *
     * Returns a summarised report of delivery reports
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string[] $group_by List of fields to group results set by (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. Can&#39;t be combined with statuses. (optional)
     * @param string[] $statuses Filter results by message status. Can&#39;t be combined with status. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\SummaryReport
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getDeliveryReportsSummary($end_date, $group_by, $start_date, $accounts = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $statuses = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getDeliveryReportsSummaryWithHttpInfo($end_date, $group_by, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getDeliveryReportsSummaryWithHttpInfo
     *
     * Returns a summarised report of delivery reports
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string[] $group_by List of fields to group results set by (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. Can&#39;t be combined with statuses. (optional)
     * @param string[] $statuses Filter results by message status. Can&#39;t be combined with status. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\SummaryReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getDeliveryReportsSummaryWithHttpInfo($end_date, $group_by, $start_date, $accounts = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $statuses = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getDeliveryReportsSummary');
        }
        // verify the required parameter 'group_by' is set
        if ($group_by === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_by when calling getDeliveryReportsSummary');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getDeliveryReportsSummary');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($destination_address) && (strlen($destination_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($destination_address) && (strlen($destination_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_key) && (strlen($metadata_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 100.');
        }
        if (!is_null($metadata_key) && (strlen($metadata_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_value) && (strlen($metadata_value) > 256)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 256.');
        }
        if (!is_null($metadata_value) && (strlen($metadata_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($status_code) && (strlen($status_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 3.');
        }
        if (!is_null($status_code) && (strlen($status_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 3.');
        }

        if (!is_null($status) && (strlen($status) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$status" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($status) && (strlen($status) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$status" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($statuses) && (strlen($statuses) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$statuses" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($statuses) && (strlen($statuses) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$statuses" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($source_address) && (strlen($source_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($source_address) && (strlen($source_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/delivery_reports/summary";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($destination_address_country !== null) {
            $queryParams['destination_address_country'] = $this->apiClient->getSerializer()->toQueryValue($destination_address_country);
        }
        // query params
        if ($destination_address !== null) {
            $queryParams['destination_address'] = $this->apiClient->getSerializer()->toQueryValue($destination_address);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($message_format !== null) {
            $queryParams['message_format'] = $this->apiClient->getSerializer()->toQueryValue($message_format);
        }
        // query params
        if ($metadata_key !== null) {
            $queryParams['metadata_key'] = $this->apiClient->getSerializer()->toQueryValue($metadata_key);
        }
        // query params
        if ($metadata_value !== null) {
            $queryParams['metadata_value'] = $this->apiClient->getSerializer()->toQueryValue($metadata_value);
        }
        // query params
        if ($status_code !== null) {
            $queryParams['status_code'] = $this->apiClient->getSerializer()->toQueryValue($status_code);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if (is_array($statuses)) {
            $statuses = $this->apiClient->getSerializer()->serializeCollection($statuses, 'multi', true);
        }
        if ($statuses !== null) {
            $queryParams['statuses'] = $this->apiClient->getSerializer()->toQueryValue($statuses);
        }
        // query params
        if ($summary_by !== null) {
            $queryParams['summary_by'] = $this->apiClient->getSerializer()->toQueryValue($summary_by);
        }
        // query params
        if ($summary_field !== null) {
            $queryParams['summary_field'] = $this->apiClient->getSerializer()->toQueryValue($summary_field);
        }
        // query params
        if (is_array($group_by)) {
            $group_by = $this->apiClient->getSerializer()->serializeCollection($group_by, 'multi', true);
        }
        if ($group_by !== null) {
            $queryParams['group_by'] = $this->apiClient->getSerializer()->toQueryValue($group_by);
        }
        // query params
        if ($source_address_country !== null) {
            $queryParams['source_address_country'] = $this->apiClient->getSerializer()->toQueryValue($source_address_country);
        }
        // query params
        if ($source_address !== null) {
            $queryParams['source_address'] = $this->apiClient->getSerializer()->toQueryValue($source_address);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\SummaryReport',
                '/reporting/delivery_reports/summary'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\SummaryReport', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\SummaryReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMetadataKeys
     *
     * Returns a list of metadata keys
     *
     * @param string $message_type Message type. Possible values are sent messages, received messages and delivery receipts. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\MetadataKeysResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getMetadataKeys($message_type, $start_date, $end_date, $accounts = null, $timezone = null)
    {
        list($response) = $this->getMetadataKeysWithHttpInfo($message_type, $start_date, $end_date, $accounts, $timezone);
        return $response;
    }

    /**
     * Operation getMetadataKeysWithHttpInfo
     *
     * Returns a list of metadata keys
     *
     * @param string $message_type Message type. Possible values are sent messages, received messages and delivery receipts. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\MetadataKeysResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getMetadataKeysWithHttpInfo($message_type, $start_date, $end_date, $accounts = null, $timezone = null)
    {
        // verify the required parameter 'message_type' is set
        if ($message_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message_type when calling getMetadataKeys');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getMetadataKeys');
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getMetadataKeys');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getMetadataKeys, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getMetadataKeys, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/{messageType}/metadata/keys";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // path params
        if ($message_type !== null) {
            $resourcePath = str_replace(
                "{" . "messageType" . "}",
                $this->apiClient->getSerializer()->toPathValue($message_type),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\MetadataKeysResponse',
                '/reporting/{messageType}/metadata/keys'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\MetadataKeysResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\MetadataKeysResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReceivedMessagesDetail
     *
     * Returns a list message received
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $action Filter results by the action that was invoked for this message. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @param string $sort_by Field to sort results set by (optional)
     * @param string $sort_direction Order to sort results by. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\ReceivedMessages
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getReceivedMessagesDetail($end_date, $start_date, $accounts = null, $action = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getReceivedMessagesDetailWithHttpInfo($end_date, $start_date, $accounts, $action, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getReceivedMessagesDetailWithHttpInfo
     *
     * Returns a list message received
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $action Filter results by the action that was invoked for this message. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @param string $sort_by Field to sort results set by (optional)
     * @param string $sort_direction Order to sort results by. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\ReceivedMessages, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getReceivedMessagesDetailWithHttpInfo($end_date, $start_date, $accounts = null, $action = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getReceivedMessagesDetail');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getReceivedMessagesDetail');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($destination_address) && (strlen($destination_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($destination_address) && (strlen($destination_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_key) && (strlen($metadata_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 100.');
        }
        if (!is_null($metadata_key) && (strlen($metadata_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_value) && (strlen($metadata_value) > 256)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 256.');
        }
        if (!is_null($metadata_value) && (strlen($metadata_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($page) && ($page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.0.');
        }

        if (!is_null($page_size) && ($page_size > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 100.0.');
        }
        if (!is_null($page_size) && ($page_size < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.0.');
        }

        if (!is_null($source_address) && (strlen($source_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($source_address) && (strlen($source_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/received_messages/detail";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($action !== null) {
            $queryParams['action'] = $this->apiClient->getSerializer()->toQueryValue($action);
        }
        // query params
        if ($destination_address_country !== null) {
            $queryParams['destination_address_country'] = $this->apiClient->getSerializer()->toQueryValue($destination_address_country);
        }
        // query params
        if ($destination_address !== null) {
            $queryParams['destination_address'] = $this->apiClient->getSerializer()->toQueryValue($destination_address);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($message_format !== null) {
            $queryParams['message_format'] = $this->apiClient->getSerializer()->toQueryValue($message_format);
        }
        // query params
        if ($metadata_key !== null) {
            $queryParams['metadata_key'] = $this->apiClient->getSerializer()->toQueryValue($metadata_key);
        }
        // query params
        if ($metadata_value !== null) {
            $queryParams['metadata_value'] = $this->apiClient->getSerializer()->toQueryValue($metadata_value);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
        }
        // query params
        if ($source_address_country !== null) {
            $queryParams['source_address_country'] = $this->apiClient->getSerializer()->toQueryValue($source_address_country);
        }
        // query params
        if ($source_address !== null) {
            $queryParams['source_address'] = $this->apiClient->getSerializer()->toQueryValue($source_address);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\ReceivedMessages',
                '/reporting/received_messages/detail'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\ReceivedMessages', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\ReceivedMessages', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReceivedMessagesSummary
     *
     * Returns a summarised report of messages received
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string[] $group_by List of fields to group results set by (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\SummaryReport
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getReceivedMessagesSummary($end_date, $group_by, $start_date, $accounts = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getReceivedMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $accounts, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getReceivedMessagesSummaryWithHttpInfo
     *
     * Returns a summarised report of messages received
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string[] $group_by List of fields to group results set by (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\SummaryReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getReceivedMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $accounts = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getReceivedMessagesSummary');
        }
        // verify the required parameter 'group_by' is set
        if ($group_by === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_by when calling getReceivedMessagesSummary');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getReceivedMessagesSummary');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getReceivedMessagesSummary, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getReceivedMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($destination_address) && (strlen($destination_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getReceivedMessagesSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($destination_address) && (strlen($destination_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getReceivedMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_key) && (strlen($metadata_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getReceivedMessagesSummary, must be smaller than or equal to 100.');
        }
        if (!is_null($metadata_key) && (strlen($metadata_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getReceivedMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_value) && (strlen($metadata_value) > 256)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getReceivedMessagesSummary, must be smaller than or equal to 256.');
        }
        if (!is_null($metadata_value) && (strlen($metadata_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getReceivedMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($source_address) && (strlen($source_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getReceivedMessagesSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($source_address) && (strlen($source_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getReceivedMessagesSummary, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/received_messages/summary";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($destination_address_country !== null) {
            $queryParams['destination_address_country'] = $this->apiClient->getSerializer()->toQueryValue($destination_address_country);
        }
        // query params
        if ($destination_address !== null) {
            $queryParams['destination_address'] = $this->apiClient->getSerializer()->toQueryValue($destination_address);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($message_format !== null) {
            $queryParams['message_format'] = $this->apiClient->getSerializer()->toQueryValue($message_format);
        }
        // query params
        if ($metadata_key !== null) {
            $queryParams['metadata_key'] = $this->apiClient->getSerializer()->toQueryValue($metadata_key);
        }
        // query params
        if ($metadata_value !== null) {
            $queryParams['metadata_value'] = $this->apiClient->getSerializer()->toQueryValue($metadata_value);
        }
        // query params
        if ($summary_by !== null) {
            $queryParams['summary_by'] = $this->apiClient->getSerializer()->toQueryValue($summary_by);
        }
        // query params
        if ($summary_field !== null) {
            $queryParams['summary_field'] = $this->apiClient->getSerializer()->toQueryValue($summary_field);
        }
        // query params
        if (is_array($group_by)) {
            $group_by = $this->apiClient->getSerializer()->serializeCollection($group_by, 'multi', true);
        }
        if ($group_by !== null) {
            $queryParams['group_by'] = $this->apiClient->getSerializer()->toQueryValue($group_by);
        }
        // query params
        if ($source_address_country !== null) {
            $queryParams['source_address_country'] = $this->apiClient->getSerializer()->toQueryValue($source_address_country);
        }
        // query params
        if ($source_address !== null) {
            $queryParams['source_address'] = $this->apiClient->getSerializer()->toQueryValue($source_address);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\SummaryReport',
                '/reporting/received_messages/summary'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\SummaryReport', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\SummaryReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSentMessagesDetail
     *
     * Returns a list of message sent
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param bool $delivery_report Filter results by delivery report. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. Can&#39;t be combined with statuses. (optional)
     * @param string[] $statuses Filter results by message status. Can&#39;t be combined with status. (optional)
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @param string $sort_by Field to sort results set by (optional)
     * @param string $sort_direction Order to sort results by. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\SentMessages
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getSentMessagesDetail($end_date, $start_date, $accounts = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $statuses = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getSentMessagesDetailWithHttpInfo($end_date, $start_date, $accounts, $delivery_report, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $statuses, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getSentMessagesDetailWithHttpInfo
     *
     * Returns a list of message sent
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param bool $delivery_report Filter results by delivery report. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. Can&#39;t be combined with statuses. (optional)
     * @param string[] $statuses Filter results by message status. Can&#39;t be combined with status. (optional)
     * @param int $page Page number for paging through paginated result sets. (optional)
     * @param int $page_size Number of results to return in a page for paginated result sets. (optional)
     * @param string $sort_by Field to sort results set by (optional)
     * @param string $sort_direction Order to sort results by. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\SentMessages, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getSentMessagesDetailWithHttpInfo($end_date, $start_date, $accounts = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $statuses = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getSentMessagesDetail');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getSentMessagesDetail');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($destination_address) && (strlen($destination_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($destination_address) && (strlen($destination_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_key) && (strlen($metadata_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 100.');
        }
        if (!is_null($metadata_key) && (strlen($metadata_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_value) && (strlen($metadata_value) > 256)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 256.');
        }
        if (!is_null($metadata_value) && (strlen($metadata_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($status_code) && (strlen($status_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 3.');
        }
        if (!is_null($status_code) && (strlen($status_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 3.');
        }

        if (!is_null($status) && (strlen($status) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$status" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($status) && (strlen($status) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$status" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($statuses) && (strlen($statuses) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$statuses" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($statuses) && (strlen($statuses) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$statuses" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        if (!is_null($page) && ($page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.0.');
        }

        if (!is_null($page_size) && ($page_size > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 100.0.');
        }
        if (!is_null($page_size) && ($page_size < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.0.');
        }

        if (!is_null($source_address) && (strlen($source_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 15.');
        }
        if (!is_null($source_address) && (strlen($source_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/sent_messages/detail";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($delivery_report !== null) {
            $queryParams['delivery_report'] = $this->apiClient->getSerializer()->toQueryValue($delivery_report);
        }
        // query params
        if ($destination_address_country !== null) {
            $queryParams['destination_address_country'] = $this->apiClient->getSerializer()->toQueryValue($destination_address_country);
        }
        // query params
        if ($destination_address !== null) {
            $queryParams['destination_address'] = $this->apiClient->getSerializer()->toQueryValue($destination_address);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($message_format !== null) {
            $queryParams['message_format'] = $this->apiClient->getSerializer()->toQueryValue($message_format);
        }
        // query params
        if ($metadata_key !== null) {
            $queryParams['metadata_key'] = $this->apiClient->getSerializer()->toQueryValue($metadata_key);
        }
        // query params
        if ($metadata_value !== null) {
            $queryParams['metadata_value'] = $this->apiClient->getSerializer()->toQueryValue($metadata_value);
        }
        // query params
        if ($status_code !== null) {
            $queryParams['status_code'] = $this->apiClient->getSerializer()->toQueryValue($status_code);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if (is_array($statuses)) {
            $statuses = $this->apiClient->getSerializer()->serializeCollection($statuses, 'multi', true);
        }
        if ($statuses !== null) {
            $queryParams['statuses'] = $this->apiClient->getSerializer()->toQueryValue($statuses);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
        }
        // query params
        if ($source_address_country !== null) {
            $queryParams['source_address_country'] = $this->apiClient->getSerializer()->toQueryValue($source_address_country);
        }
        // query params
        if ($source_address !== null) {
            $queryParams['source_address'] = $this->apiClient->getSerializer()->toQueryValue($source_address);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\SentMessages',
                '/reporting/sent_messages/detail'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\SentMessages', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\SentMessages', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSentMessagesSummary
     *
     * Returns a summarised report of messages sent
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string[] $group_by List of fields to group results set by (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param bool $delivery_report Filter results by delivery report. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\SummaryReport
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getSentMessagesSummary($end_date, $group_by, $start_date, $accounts = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $summary_by = null, $summary_field = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getSentMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $accounts, $delivery_report, $destination_address_country, $destination_address, $summary_by, $summary_field, $message_format, $metadata_key, $metadata_value, $status_code, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getSentMessagesSummaryWithHttpInfo
     *
     * Returns a summarised report of messages sent
     *
     * @param string $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string[] $group_by List of fields to group results set by (required)
     * @param string $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. The date must be in the format of \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, e.g. \&quot;2017-02-10T13:30:00\&quot;. (required)
     * @param string $accounts Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param bool $delivery_report Filter results by delivery report. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\SummaryReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getSentMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $accounts = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $summary_by = null, $summary_field = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getSentMessagesSummary');
        }
        // verify the required parameter 'group_by' is set
        if ($group_by === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_by when calling getSentMessagesSummary');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getSentMessagesSummary');
        }
        if (!is_null($accounts) && (strlen($accounts) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 200.');
        }
        if (!is_null($accounts) && (strlen($accounts) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$accounts" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($destination_address) && (strlen($destination_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($destination_address) && (strlen($destination_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$destination_address" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_key) && (strlen($metadata_key) > 100)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 100.');
        }
        if (!is_null($metadata_key) && (strlen($metadata_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_key" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($metadata_value) && (strlen($metadata_value) > 256)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 256.');
        }
        if (!is_null($metadata_value) && (strlen($metadata_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$metadata_value" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 1.');
        }

        if (!is_null($status_code) && (strlen($status_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 3.');
        }
        if (!is_null($status_code) && (strlen($status_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$status_code" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 3.');
        }

        if (!is_null($source_address) && (strlen($source_address) > 15)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 15.');
        }
        if (!is_null($source_address) && (strlen($source_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$source_address" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/sent_messages/summary";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($accounts !== null) {
            $queryParams['accounts'] = $this->apiClient->getSerializer()->toQueryValue($accounts);
        }
        // query params
        if ($delivery_report !== null) {
            $queryParams['delivery_report'] = $this->apiClient->getSerializer()->toQueryValue($delivery_report);
        }
        // query params
        if ($destination_address_country !== null) {
            $queryParams['destination_address_country'] = $this->apiClient->getSerializer()->toQueryValue($destination_address_country);
        }
        // query params
        if ($destination_address !== null) {
            $queryParams['destination_address'] = $this->apiClient->getSerializer()->toQueryValue($destination_address);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($summary_by !== null) {
            $queryParams['summary_by'] = $this->apiClient->getSerializer()->toQueryValue($summary_by);
        }
        // query params
        if ($summary_field !== null) {
            $queryParams['summary_field'] = $this->apiClient->getSerializer()->toQueryValue($summary_field);
        }
        // query params
        if (is_array($group_by)) {
            $group_by = $this->apiClient->getSerializer()->serializeCollection($group_by, 'multi', true);
        }
        if ($group_by !== null) {
            $queryParams['group_by'] = $this->apiClient->getSerializer()->toQueryValue($group_by);
        }
        // query params
        if ($message_format !== null) {
            $queryParams['message_format'] = $this->apiClient->getSerializer()->toQueryValue($message_format);
        }
        // query params
        if ($metadata_key !== null) {
            $queryParams['metadata_key'] = $this->apiClient->getSerializer()->toQueryValue($metadata_key);
        }
        // query params
        if ($metadata_value !== null) {
            $queryParams['metadata_value'] = $this->apiClient->getSerializer()->toQueryValue($metadata_value);
        }
        // query params
        if ($status_code !== null) {
            $queryParams['status_code'] = $this->apiClient->getSerializer()->toQueryValue($status_code);
        }
        // query params
        if ($source_address_country !== null) {
            $queryParams['source_address_country'] = $this->apiClient->getSerializer()->toQueryValue($source_address_country);
        }
        // query params
        if ($source_address !== null) {
            $queryParams['source_address'] = $this->apiClient->getSerializer()->toQueryValue($source_address);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\SummaryReport',
                '/reporting/sent_messages/summary'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\SummaryReport', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\SummaryReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitAsyncDeliveryReportsDetail
     *
     * Submits a request to generate an async detail report
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncDeliveryReportDetailRequest $async_delivery_report_detail_request  (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReportResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitAsyncDeliveryReportsDetail($async_delivery_report_detail_request)
    {
        list($response) = $this->submitAsyncDeliveryReportsDetailWithHttpInfo($async_delivery_report_detail_request);
        return $response;
    }

    /**
     * Operation submitAsyncDeliveryReportsDetailWithHttpInfo
     *
     * Submits a request to generate an async detail report
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncDeliveryReportDetailRequest $async_delivery_report_detail_request  (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitAsyncDeliveryReportsDetailWithHttpInfo($async_delivery_report_detail_request)
    {
        // verify the required parameter 'async_delivery_report_detail_request' is set
        if ($async_delivery_report_detail_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $async_delivery_report_detail_request when calling submitAsyncDeliveryReportsDetail');
        }
        // parse inputs
        $resourcePath = "/reporting/delivery_reports/detail/async";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($async_delivery_report_detail_request)) {
            $_tempBody = $async_delivery_report_detail_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReportResponse',
                '/reporting/delivery_reports/detail/async'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitDeliveryReportsSummary
     *
     * Submits a summarised report of delivery reports
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncDeliveryReportsSummaryRequest $async_delivery_reports_summary_request  (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReportResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitDeliveryReportsSummary($async_delivery_reports_summary_request)
    {
        list($response) = $this->submitDeliveryReportsSummaryWithHttpInfo($async_delivery_reports_summary_request);
        return $response;
    }

    /**
     * Operation submitDeliveryReportsSummaryWithHttpInfo
     *
     * Submits a summarised report of delivery reports
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncDeliveryReportsSummaryRequest $async_delivery_reports_summary_request  (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitDeliveryReportsSummaryWithHttpInfo($async_delivery_reports_summary_request)
    {
        // verify the required parameter 'async_delivery_reports_summary_request' is set
        if ($async_delivery_reports_summary_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $async_delivery_reports_summary_request when calling submitDeliveryReportsSummary');
        }
        // parse inputs
        $resourcePath = "/reporting/delivery_reports/summary/async";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($async_delivery_reports_summary_request)) {
            $_tempBody = $async_delivery_reports_summary_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReportResponse',
                '/reporting/delivery_reports/summary/async'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitReceivedMessagesDetail
     *
     * Submits a request to generate an async detail report
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesDetailRequest $async_received_messages_detail_request  (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReportResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitReceivedMessagesDetail($async_received_messages_detail_request)
    {
        list($response) = $this->submitReceivedMessagesDetailWithHttpInfo($async_received_messages_detail_request);
        return $response;
    }

    /**
     * Operation submitReceivedMessagesDetailWithHttpInfo
     *
     * Submits a request to generate an async detail report
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesDetailRequest $async_received_messages_detail_request  (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitReceivedMessagesDetailWithHttpInfo($async_received_messages_detail_request)
    {
        // verify the required parameter 'async_received_messages_detail_request' is set
        if ($async_received_messages_detail_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $async_received_messages_detail_request when calling submitReceivedMessagesDetail');
        }
        // parse inputs
        $resourcePath = "/reporting/received_messages/detail/async";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($async_received_messages_detail_request)) {
            $_tempBody = $async_received_messages_detail_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReportResponse',
                '/reporting/received_messages/detail/async'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitReceivedMessagesSummary
     *
     * Submits a summarised report of received messages
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesSummaryRequest $async_received_messages_summary_request  (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReportResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitReceivedMessagesSummary($async_received_messages_summary_request)
    {
        list($response) = $this->submitReceivedMessagesSummaryWithHttpInfo($async_received_messages_summary_request);
        return $response;
    }

    /**
     * Operation submitReceivedMessagesSummaryWithHttpInfo
     *
     * Submits a summarised report of received messages
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncReceivedMessagesSummaryRequest $async_received_messages_summary_request  (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitReceivedMessagesSummaryWithHttpInfo($async_received_messages_summary_request)
    {
        // verify the required parameter 'async_received_messages_summary_request' is set
        if ($async_received_messages_summary_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $async_received_messages_summary_request when calling submitReceivedMessagesSummary');
        }
        // parse inputs
        $resourcePath = "/reporting/received_messages/summary/async";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($async_received_messages_summary_request)) {
            $_tempBody = $async_received_messages_summary_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReportResponse',
                '/reporting/received_messages/summary/async'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitSentMessagesDetail
     *
     * Submits a request to generate an async detail report
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncSentMessagesDetailRequest $async_sent_messages_detail_request  (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReportResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitSentMessagesDetail($async_sent_messages_detail_request)
    {
        list($response) = $this->submitSentMessagesDetailWithHttpInfo($async_sent_messages_detail_request);
        return $response;
    }

    /**
     * Operation submitSentMessagesDetailWithHttpInfo
     *
     * Submits a request to generate an async detail report
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncSentMessagesDetailRequest $async_sent_messages_detail_request  (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitSentMessagesDetailWithHttpInfo($async_sent_messages_detail_request)
    {
        // verify the required parameter 'async_sent_messages_detail_request' is set
        if ($async_sent_messages_detail_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $async_sent_messages_detail_request when calling submitSentMessagesDetail');
        }
        // parse inputs
        $resourcePath = "/reporting/sent_messages/detail/async";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($async_sent_messages_detail_request)) {
            $_tempBody = $async_sent_messages_detail_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReportResponse',
                '/reporting/sent_messages/detail/async'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitSentMessagesSummary
     *
     * Submits a summarised report of sent messages
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncDeliverySentMessagesRequest $async_delivery_sent_messages_request  (required)
     * @return \MessageMedia\RESTAPI\Model\AsyncReportResponse
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitSentMessagesSummary($async_delivery_sent_messages_request)
    {
        list($response) = $this->submitSentMessagesSummaryWithHttpInfo($async_delivery_sent_messages_request);
        return $response;
    }

    /**
     * Operation submitSentMessagesSummaryWithHttpInfo
     *
     * Submits a summarised report of sent messages
     *
     * @param \MessageMedia\RESTAPI\Model\AsyncDeliverySentMessagesRequest $async_delivery_sent_messages_request  (required)
     * @return Array of \MessageMedia\RESTAPI\Model\AsyncReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function submitSentMessagesSummaryWithHttpInfo($async_delivery_sent_messages_request)
    {
        // verify the required parameter 'async_delivery_sent_messages_request' is set
        if ($async_delivery_sent_messages_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $async_delivery_sent_messages_request when calling submitSentMessagesSummary');
        }
        // parse inputs
        $resourcePath = "/reporting/sent_messages/summary/async";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($async_delivery_sent_messages_request)) {
            $_tempBody = $async_delivery_sent_messages_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MessageMedia\RESTAPI\Model\AsyncReportResponse',
                '/reporting/sent_messages/summary/async'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\AsyncReportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
