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
     * Operation getDeliveryReportsDetail
     *
     * Returns a list of delivery reports
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. (optional)
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
    public function getDeliveryReportsDetail($end_date, $start_date, $account = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getDeliveryReportsDetailWithHttpInfo($end_date, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getDeliveryReportsDetailWithHttpInfo
     *
     * Returns a list of delivery reports
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. (optional)
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
    public function getDeliveryReportsDetailWithHttpInfo($end_date, $start_date, $account = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getDeliveryReportsDetail');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getDeliveryReportsDetail');
        }
        if (!is_null($account) && (strlen($account) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getDeliveryReportsDetail, must be smaller than or equal to 200.');
        }
        if (!is_null($account) && (strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getDeliveryReportsDetail, must be bigger than or equal to 1.');
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
        if ($account !== null) {
            $queryParams['account'] = $this->apiClient->getSerializer()->toQueryValue($account);
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
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $group_by Field to group results set by (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return \MessageMedia\RESTAPI\Model\SummaryReport
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getDeliveryReportsSummary($end_date, $group_by, $start_date, $account = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getDeliveryReportsSummaryWithHttpInfo($end_date, $group_by, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getDeliveryReportsSummaryWithHttpInfo
     *
     * Returns a summarised report of delivery reports
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $group_by Field to group results set by (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. (optional)
     * @param string $summary_by Function to apply when summarising results (optional)
     * @param string $summary_field Field to summarise results by (optional)
     * @param string $source_address_country Filter results by source address country. (optional)
     * @param string $source_address Filter results by source address. (optional)
     * @param string $timezone The timezone to use for the context of the request. If provided this will be used as the timezone for the start date and end date parameters, and all datetime fields returns in the response. The timezone should be provided as a IANA (Internet Assigned Numbers Authority) time zone database zone name, i.e. &#39;Australia/Melbourne&#39;. (optional)
     * @return Array of \MessageMedia\RESTAPI\Model\SummaryReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getDeliveryReportsSummaryWithHttpInfo($end_date, $group_by, $start_date, $account = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
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
        if (!is_null($account) && (strlen($account) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getDeliveryReportsSummary, must be smaller than or equal to 200.');
        }
        if (!is_null($account) && (strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getDeliveryReportsSummary, must be bigger than or equal to 1.');
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
        if ($account !== null) {
            $queryParams['account'] = $this->apiClient->getSerializer()->toQueryValue($account);
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
        if ($summary_by !== null) {
            $queryParams['summary_by'] = $this->apiClient->getSerializer()->toQueryValue($summary_by);
        }
        // query params
        if ($summary_field !== null) {
            $queryParams['summary_field'] = $this->apiClient->getSerializer()->toQueryValue($summary_field);
        }
        // query params
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
     * Operation getReceivedMessagesDetail
     *
     * Returns a list message received
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
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
    public function getReceivedMessagesDetail($end_date, $start_date, $account = null, $action = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getReceivedMessagesDetailWithHttpInfo($end_date, $start_date, $account, $action, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getReceivedMessagesDetailWithHttpInfo
     *
     * Returns a list message received
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
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
    public function getReceivedMessagesDetailWithHttpInfo($end_date, $start_date, $account = null, $action = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getReceivedMessagesDetail');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getReceivedMessagesDetail');
        }
        if (!is_null($account) && (strlen($account) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getReceivedMessagesDetail, must be smaller than or equal to 200.');
        }
        if (!is_null($account) && (strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getReceivedMessagesDetail, must be bigger than or equal to 1.');
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
        if ($account !== null) {
            $queryParams['account'] = $this->apiClient->getSerializer()->toQueryValue($account);
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
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $group_by Field to group results set by (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
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
    public function getReceivedMessagesSummary($end_date, $group_by, $start_date, $account = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getReceivedMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $account, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $summary_by, $summary_field, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getReceivedMessagesSummaryWithHttpInfo
     *
     * Returns a summarised report of messages received
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $group_by Field to group results set by (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
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
    public function getReceivedMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $account = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $summary_by = null, $summary_field = null, $source_address_country = null, $source_address = null, $timezone = null)
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
        if (!is_null($account) && (strlen($account) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getReceivedMessagesSummary, must be smaller than or equal to 200.');
        }
        if (!is_null($account) && (strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getReceivedMessagesSummary, must be bigger than or equal to 1.');
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
        if ($account !== null) {
            $queryParams['account'] = $this->apiClient->getSerializer()->toQueryValue($account);
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
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param bool $delivery_report Filter results by delivery report. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. (optional)
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
    public function getSentMessagesDetail($end_date, $start_date, $account = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getSentMessagesDetailWithHttpInfo($end_date, $start_date, $account, $delivery_report, $destination_address_country, $destination_address, $message_format, $metadata_key, $metadata_value, $status_code, $status, $page, $page_size, $sort_by, $sort_direction, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getSentMessagesDetailWithHttpInfo
     *
     * Returns a list of message sent
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
     * @param bool $delivery_report Filter results by delivery report. (optional)
     * @param string $destination_address_country Filter results by destination address country. (optional)
     * @param string $destination_address Filter results by destination address. (optional)
     * @param string $message_format Filter results by message format. (optional)
     * @param string $metadata_key Filter results for messages that include a metadata key. (optional)
     * @param string $metadata_value Filter results for messages that include a metadata key containing this value. If this parameter is provided, the metadata_key parameter must also be provided. (optional)
     * @param string $status_code Filter results by message status code. (optional)
     * @param string $status Filter results by message status. (optional)
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
    public function getSentMessagesDetailWithHttpInfo($end_date, $start_date, $account = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $status = null, $page = null, $page_size = null, $sort_by = null, $sort_direction = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        // verify the required parameter 'end_date' is set
        if ($end_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end_date when calling getSentMessagesDetail');
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_date when calling getSentMessagesDetail');
        }
        if (!is_null($account) && (strlen($account) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getSentMessagesDetail, must be smaller than or equal to 200.');
        }
        if (!is_null($account) && (strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getSentMessagesDetail, must be bigger than or equal to 1.');
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
        if ($account !== null) {
            $queryParams['account'] = $this->apiClient->getSerializer()->toQueryValue($account);
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
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $group_by Field to group results set by (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
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
    public function getSentMessagesSummary($end_date, $group_by, $start_date, $account = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $summary_by = null, $summary_field = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $source_address_country = null, $source_address = null, $timezone = null)
    {
        list($response) = $this->getSentMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $account, $delivery_report, $destination_address_country, $destination_address, $summary_by, $summary_field, $message_format, $metadata_key, $metadata_value, $status_code, $source_address_country, $source_address, $timezone);
        return $response;
    }

    /**
     * Operation getSentMessagesSummaryWithHttpInfo
     *
     * Returns a summarised report of messages sent
     *
     * @param \DateTime $end_date End date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $group_by Field to group results set by (required)
     * @param \DateTime $start_date Start date time for report window. By default, the timezone for this parameter will be taken from the account settings for the account associated with the credentials used to make the request, or the account included in the Account parameter. This can be overridden using the timezone parameter per request. (required)
     * @param string $account Filter results by a specific account. By default results will be returned for the account associated with the authentication credentials and all sub accounts. (optional)
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
    public function getSentMessagesSummaryWithHttpInfo($end_date, $group_by, $start_date, $account = null, $delivery_report = null, $destination_address_country = null, $destination_address = null, $summary_by = null, $summary_field = null, $message_format = null, $metadata_key = null, $metadata_value = null, $status_code = null, $source_address_country = null, $source_address = null, $timezone = null)
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
        if (!is_null($account) && (strlen($account) > 200)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getSentMessagesSummary, must be smaller than or equal to 200.');
        }
        if (!is_null($account) && (strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$account" when calling MessagingReportsApi.getSentMessagesSummary, must be bigger than or equal to 1.');
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
        if ($account !== null) {
            $queryParams['account'] = $this->apiClient->getSerializer()->toQueryValue($account);
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

}
