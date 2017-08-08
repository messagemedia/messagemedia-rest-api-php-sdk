<?php
/**
 * MessagingApi
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
 * MessagingApi Class Doc Comment
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class MessagingApi
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
     * @return MessagingApi
     */
    public function setApiClient(\MessageMedia\RESTAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getMessageStatus
     *
     * Get the status of a submitted message
     *
     * @param string $message_id Unique ID representing message that has been submitted (required)
     * @return \MessageMedia\RESTAPI\Model\SubmittedMessage
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getMessageStatus($message_id)
    {
        list($response) = $this->getMessageStatusWithHttpInfo($message_id);
        return $response;
    }

    /**
     * Operation getMessageStatusWithHttpInfo
     *
     * Get the status of a submitted message
     *
     * @param string $message_id Unique ID representing message that has been submitted (required)
     * @return Array of \MessageMedia\RESTAPI\Model\SubmittedMessage, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function getMessageStatusWithHttpInfo($message_id)
    {
        // verify the required parameter 'message_id' is set
        if ($message_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message_id when calling getMessageStatus');
        }
        // parse inputs
        $resourcePath = "/messages/{messageId}";
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
        if ($message_id !== null) {
            $resourcePath = str_replace(
                "{" . "messageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($message_id),
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
                '\MessageMedia\RESTAPI\Model\SubmittedMessage',
                '/messages/{messageId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\SubmittedMessage', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\SubmittedMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendMessages
     *
     * Send one or more messages
     *
     * @param \MessageMedia\RESTAPI\Model\Messages $messages A list of messages to be sent (required)
     * @return \MessageMedia\RESTAPI\Model\SubmittedMessages
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function sendMessages($messages)
    {
        list($response) = $this->sendMessagesWithHttpInfo($messages);
        return $response;
    }

    /**
     * Operation sendMessagesWithHttpInfo
     *
     * Send one or more messages
     *
     * @param \MessageMedia\RESTAPI\Model\Messages $messages A list of messages to be sent (required)
     * @return Array of \MessageMedia\RESTAPI\Model\SubmittedMessages, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function sendMessagesWithHttpInfo($messages)
    {
        // verify the required parameter 'messages' is set
        if ($messages === null) {
            throw new \InvalidArgumentException('Missing the required parameter $messages when calling sendMessages');
        }
        // parse inputs
        $resourcePath = "/messages";
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
        if (isset($messages)) {
            $_tempBody = $messages;
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
                '\MessageMedia\RESTAPI\Model\SubmittedMessages',
                '/messages'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MessageMedia\RESTAPI\Model\SubmittedMessages', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\SubmittedMessages', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MessageMedia\RESTAPI\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateMessageStatus
     *
     * Cancel a scheduled message
     *
     * @param string $message_id Unique ID representing message to be updated (required)
     * @param \MessageMedia\RESTAPI\Model\Status $status New status for the message (required)
     * @return void
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function updateMessageStatus($message_id, $status)
    {
        list($response) = $this->updateMessageStatusWithHttpInfo($message_id, $status);
        return $response;
    }

    /**
     * Operation updateMessageStatusWithHttpInfo
     *
     * Cancel a scheduled message
     *
     * @param string $message_id Unique ID representing message to be updated (required)
     * @param \MessageMedia\RESTAPI\Model\Status $status New status for the message (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MessageMedia\RESTAPI\ApiException on non-2xx response
     */
    public function updateMessageStatusWithHttpInfo($message_id, $status)
    {
        // verify the required parameter 'message_id' is set
        if ($message_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message_id when calling updateMessageStatus');
        }
        // verify the required parameter 'status' is set
        if ($status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status when calling updateMessageStatus');
        }
        // parse inputs
        $resourcePath = "/messages/{messageId}";
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
        if ($message_id !== null) {
            $resourcePath = str_replace(
                "{" . "messageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($message_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($status)) {
            $_tempBody = $status;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/messages/{messageId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
