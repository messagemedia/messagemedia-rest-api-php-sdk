<?php
/**
 * RepliesApi
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
 * RepliesApi Class Doc Comment
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class RepliesApi
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
     * @return RepliesApi
     */
    public function setApiClient(\MessageMedia\RESTAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkReplies
     *
     * Check replies
     *
     * @return \MessageMedia\RESTAPI\Model\Replies
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function checkReplies()
    {
        list($response) = $this->checkRepliesWithHttpInfo();
        return $response;
    }

    /**
     * Operation checkRepliesWithHttpInfo
     *
     * Check replies
     *
     * @return Array of \MessageMedia\RESTAPI\Model\Replies, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function checkRepliesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/replies";
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
                '\MessageMedia\RESTAPI\Model\Replies',
                '/replies'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\Replies', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\Replies', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation confirmReplies
     *
     * Confirm replies as received
     *
     * @param \MessageMedia\RESTAPI\Model\ReplyId $reply_id A list of reply IDs to mark as confirmed (required)
     * @return void
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function confirmReplies($reply_id)
    {
        list($response) = $this->confirmRepliesWithHttpInfo($reply_id);
        return $response;
    }

    /**
     * Operation confirmRepliesWithHttpInfo
     *
     * Confirm replies as received
     *
     * @param \MessageMedia\RESTAPI\Model\ReplyId $reply_id A list of reply IDs to mark as confirmed (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function confirmRepliesWithHttpInfo($reply_id)
    {
        // verify the required parameter 'reply_id' is set
        if ($reply_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reply_id when calling confirmReplies');
        }
        // parse inputs
        $resourcePath = "/replies/confirmed";
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
        if (isset($reply_id)) {
            $_tempBody = $reply_id;
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
                '/replies/confirmed'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
