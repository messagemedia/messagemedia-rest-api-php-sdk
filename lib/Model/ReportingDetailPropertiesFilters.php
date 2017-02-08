<?php
/**
 * ReportingDetailPropertiesFilters
 *
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

namespace MessageMedia\RESTAPI\Model;

use \ArrayAccess;

/**
 * ReportingDetailPropertiesFilters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class ReportingDetailPropertiesFilters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'ReportingDetailProperties_filters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'delivery_report' => 'string',
        'destination_address_country' => 'string',
        'destination_address' => 'string',
        'message_format' => 'string',
        'metadata_key' => 'string',
        'metadata_value' => 'string',
        'source_address_country' => 'string',
        'source_address' => 'string',
        'status_code' => 'string',
        'status' => 'string',
        'action' => 'string',
        'accounts' => 'string[]'
    );

    public static function types()
    {
        return self::$types;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'delivery_report' => 'delivery_report',
        'destination_address_country' => 'destination_address_country',
        'destination_address' => 'destination_address',
        'message_format' => 'message_format',
        'metadata_key' => 'metadata_key',
        'metadata_value' => 'metadata_value',
        'source_address_country' => 'source_address_country',
        'source_address' => 'source_address',
        'status_code' => 'status_code',
        'status' => 'status',
        'action' => 'action',
        'accounts' => 'accounts'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'delivery_report' => 'setDeliveryReport',
        'destination_address_country' => 'setDestinationAddressCountry',
        'destination_address' => 'setDestinationAddress',
        'message_format' => 'setMessageFormat',
        'metadata_key' => 'setMetadataKey',
        'metadata_value' => 'setMetadataValue',
        'source_address_country' => 'setSourceAddressCountry',
        'source_address' => 'setSourceAddress',
        'status_code' => 'setStatusCode',
        'status' => 'setStatus',
        'action' => 'setAction',
        'accounts' => 'setAccounts'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'delivery_report' => 'getDeliveryReport',
        'destination_address_country' => 'getDestinationAddressCountry',
        'destination_address' => 'getDestinationAddress',
        'message_format' => 'getMessageFormat',
        'metadata_key' => 'getMetadataKey',
        'metadata_value' => 'getMetadataValue',
        'source_address_country' => 'getSourceAddressCountry',
        'source_address' => 'getSourceAddress',
        'status_code' => 'getStatusCode',
        'status' => 'getStatus',
        'action' => 'getAction',
        'accounts' => 'getAccounts'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['delivery_report'] = isset($data['delivery_report']) ? $data['delivery_report'] : null;
        $this->container['destination_address_country'] = isset($data['destination_address_country']) ? $data['destination_address_country'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['message_format'] = isset($data['message_format']) ? $data['message_format'] : null;
        $this->container['metadata_key'] = isset($data['metadata_key']) ? $data['metadata_key'] : null;
        $this->container['metadata_value'] = isset($data['metadata_value']) ? $data['metadata_value'] : null;
        $this->container['source_address_country'] = isset($data['source_address_country']) ? $data['source_address_country'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets delivery_report
     * @return string
     */
    public function getDeliveryReport()
    {
        return $this->container['delivery_report'];
    }

    /**
     * Sets delivery_report
     * @param string $delivery_report
     * @return $this
     */
    public function setDeliveryReport($delivery_report)
    {
        $this->container['delivery_report'] = $delivery_report;

        return $this;
    }

    /**
     * Gets destination_address_country
     * @return string
     */
    public function getDestinationAddressCountry()
    {
        return $this->container['destination_address_country'];
    }

    /**
     * Sets destination_address_country
     * @param string $destination_address_country
     * @return $this
     */
    public function setDestinationAddressCountry($destination_address_country)
    {
        $this->container['destination_address_country'] = $destination_address_country;

        return $this;
    }

    /**
     * Gets destination_address
     * @return string
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     * @param string $destination_address
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets message_format
     * @return string
     */
    public function getMessageFormat()
    {
        return $this->container['message_format'];
    }

    /**
     * Sets message_format
     * @param string $message_format
     * @return $this
     */
    public function setMessageFormat($message_format)
    {
        $this->container['message_format'] = $message_format;

        return $this;
    }

    /**
     * Gets metadata_key
     * @return string
     */
    public function getMetadataKey()
    {
        return $this->container['metadata_key'];
    }

    /**
     * Sets metadata_key
     * @param string $metadata_key
     * @return $this
     */
    public function setMetadataKey($metadata_key)
    {
        $this->container['metadata_key'] = $metadata_key;

        return $this;
    }

    /**
     * Gets metadata_value
     * @return string
     */
    public function getMetadataValue()
    {
        return $this->container['metadata_value'];
    }

    /**
     * Sets metadata_value
     * @param string $metadata_value
     * @return $this
     */
    public function setMetadataValue($metadata_value)
    {
        $this->container['metadata_value'] = $metadata_value;

        return $this;
    }

    /**
     * Gets source_address_country
     * @return string
     */
    public function getSourceAddressCountry()
    {
        return $this->container['source_address_country'];
    }

    /**
     * Sets source_address_country
     * @param string $source_address_country
     * @return $this
     */
    public function setSourceAddressCountry($source_address_country)
    {
        $this->container['source_address_country'] = $source_address_country;

        return $this;
    }

    /**
     * Gets source_address
     * @return string
     */
    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address
     * @param string $source_address
     * @return $this
     */
    public function setSourceAddress($source_address)
    {
        $this->container['source_address'] = $source_address;

        return $this;
    }

    /**
     * Gets status_code
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     * @param string $status_code
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets accounts
     * @return string[]
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     * @param string[] $accounts List of accounts that were used to generate this report
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\MessageMedia\RESTAPI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MessageMedia\RESTAPI\ObjectSerializer::sanitizeForSerialization($this));
    }
}


