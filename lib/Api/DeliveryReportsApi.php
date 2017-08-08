<?php
/**
 * DeliveryReportsApi
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
 * DeliveryReportsApi Class Doc Comment
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class DeliveryReportsApi
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
     * @return DeliveryReportsApi
     */
    public function setApiClient(\MessageMedia\RESTAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkReports
     *
     * Check delivery reports
     *
     * @return \MessageMedia\RESTAPI\Model\Reports
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function checkReports()
    {
        list($response) = $this->checkReportsWithHttpInfo();
        return $response;
    }

    /**
     * Operation checkReportsWithHttpInfo
     *
     * Check delivery reports
     *
     * @return Array of \MessageMedia\RESTAPI\Model\Reports, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function checkReportsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/delivery_reports";
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
                '\MessageMedia\RESTAPI\Model\Reports',
                '/delivery_reports'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\Reports', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\Reports', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation confirmReports
     *
     * Confirm delivery reports as received
     *
     * @param \MessageMedia\RESTAPI\Model\DeliveryReportId $delivery_report_id A list of delivery report IDs to mark as confirmed (required)
     * @return void
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function confirmReports($delivery_report_id)
    {
        list($response) = $this->confirmReportsWithHttpInfo($delivery_report_id);
        return $response;
    }

    /**
     * Operation confirmReportsWithHttpInfo
     *
     * Confirm delivery reports as received
     *
     * @param \MessageMedia\RESTAPI\Model\DeliveryReportId $delivery_report_id A list of delivery report IDs to mark as confirmed (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function confirmReportsWithHttpInfo($delivery_report_id)
    {
        // verify the required parameter 'delivery_report_id' is set
        if ($delivery_report_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $delivery_report_id when calling confirmReports');
        }
        // parse inputs
        $resourcePath = "/delivery_reports/confirmed";
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
        if (isset($delivery_report_id)) {
            $_tempBody = $delivery_report_id;
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
                null,
                '/delivery_reports/confirmed'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
