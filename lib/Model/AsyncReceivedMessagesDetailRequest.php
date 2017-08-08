<?php
/**
 * AsyncReceivedMessagesDetailRequest
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
 * AsyncReceivedMessagesDetailRequest Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class AsyncReceivedMessagesDetailRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'async_received_messages_detail_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'start_date' => '\MessageMedia\RESTAPI\Model\StartDateBody',
        'end_date' => '\MessageMedia\RESTAPI\Model\EndDateBody',
        'sort_by' => 'string',
        'sort_direction' => '\MessageMedia\RESTAPI\Model\SortDirectionBody',
        'timezone' => '\MessageMedia\RESTAPI\Model\TimezoneBody',
        'accounts' => '\MessageMedia\RESTAPI\Model\AccountsBody',
        'destination_address_country' => '\MessageMedia\RESTAPI\Model\DestinationAddressCountryBody',
        'destination_address' => '\MessageMedia\RESTAPI\Model\DestinationAddressBody',
        'message_format' => '\MessageMedia\RESTAPI\Model\MessageFormatBody',
        'metadata_key' => '\MessageMedia\RESTAPI\Model\MetadataKeyBody',
        'metadata_value' => '\MessageMedia\RESTAPI\Model\MetadataValueBody',
        'source_address_country' => '\MessageMedia\RESTAPI\Model\SourceAddressCountryBody',
        'source_address' => '\MessageMedia\RESTAPI\Model\SourceAddressBody',
        'action' => '\MessageMedia\RESTAPI\Model\ActionBody',
        'delivery_options' => '\MessageMedia\RESTAPI\Model\DeliveryOptionsBody'
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
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'sort_by' => 'sort_by',
        'sort_direction' => 'sort_direction',
        'timezone' => 'timezone',
        'accounts' => 'accounts',
        'destination_address_country' => 'destination_address_country',
        'destination_address' => 'destination_address',
        'message_format' => 'message_format',
        'metadata_key' => 'metadata_key',
        'metadata_value' => 'metadata_value',
        'source_address_country' => 'source_address_country',
        'source_address' => 'source_address',
        'action' => 'action',
        'delivery_options' => 'delivery_options'
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
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'sort_by' => 'setSortBy',
        'sort_direction' => 'setSortDirection',
        'timezone' => 'setTimezone',
        'accounts' => 'setAccounts',
        'destination_address_country' => 'setDestinationAddressCountry',
        'destination_address' => 'setDestinationAddress',
        'message_format' => 'setMessageFormat',
        'metadata_key' => 'setMetadataKey',
        'metadata_value' => 'setMetadataValue',
        'source_address_country' => 'setSourceAddressCountry',
        'source_address' => 'setSourceAddress',
        'action' => 'setAction',
        'delivery_options' => 'setDeliveryOptions'
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
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'sort_by' => 'getSortBy',
        'sort_direction' => 'getSortDirection',
        'timezone' => 'getTimezone',
        'accounts' => 'getAccounts',
        'destination_address_country' => 'getDestinationAddressCountry',
        'destination_address' => 'getDestinationAddress',
        'message_format' => 'getMessageFormat',
        'metadata_key' => 'getMetadataKey',
        'metadata_value' => 'getMetadataValue',
        'source_address_country' => 'getSourceAddressCountry',
        'source_address' => 'getSourceAddress',
        'action' => 'getAction',
        'delivery_options' => 'getDeliveryOptions'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SORT_BY_ACCOUNT = 'ACCOUNT';
    const SORT_BY_ACTION = 'ACTION';
    const SORT_BY_DESTINATION_ADDRESS = 'DESTINATION_ADDRESS';
    const SORT_BY_DESTINATION_ADDRESS_COUNTRY = 'DESTINATION_ADDRESS_COUNTRY';
    const SORT_BY_FORMAT = 'FORMAT';
    const SORT_BY_SOURCE_ADDRESS = 'SOURCE_ADDRESS';
    const SORT_BY_SOURCE_ADDRESS_COUNTRY = 'SOURCE_ADDRESS_COUNTRY';
    const SORT_BY_TIMESTAMP = 'TIMESTAMP';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_ACCOUNT,
            self::SORT_BY_ACTION,
            self::SORT_BY_DESTINATION_ADDRESS,
            self::SORT_BY_DESTINATION_ADDRESS_COUNTRY,
            self::SORT_BY_FORMAT,
            self::SORT_BY_SOURCE_ADDRESS,
            self::SORT_BY_SOURCE_ADDRESS_COUNTRY,
            self::SORT_BY_TIMESTAMP,
        ];
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['sort_by'] = isset($data['sort_by']) ? $data['sort_by'] : null;
        $this->container['sort_direction'] = isset($data['sort_direction']) ? $data['sort_direction'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['destination_address_country'] = isset($data['destination_address_country']) ? $data['destination_address_country'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['message_format'] = isset($data['message_format']) ? $data['message_format'] : null;
        $this->container['metadata_key'] = isset($data['metadata_key']) ? $data['metadata_key'] : null;
        $this->container['metadata_value'] = isset($data['metadata_value']) ? $data['metadata_value'] : null;
        $this->container['source_address_country'] = isset($data['source_address_country']) ? $data['source_address_country'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['delivery_options'] = isset($data['delivery_options']) ? $data['delivery_options'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("ACCOUNT", "ACTION", "DESTINATION_ADDRESS", "DESTINATION_ADDRESS_COUNTRY", "FORMAT", "SOURCE_ADDRESS", "SOURCE_ADDRESS_COUNTRY", "TIMESTAMP");
        if (!in_array($this->container['sort_by'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sort_by', must be one of #{allowed_values}.";
        }

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
        $allowed_values = array("ACCOUNT", "ACTION", "DESTINATION_ADDRESS", "DESTINATION_ADDRESS_COUNTRY", "FORMAT", "SOURCE_ADDRESS", "SOURCE_ADDRESS_COUNTRY", "TIMESTAMP");
        if (!in_array($this->container['sort_by'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_date
     * @return \MessageMedia\RESTAPI\Model\StartDateBody
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \MessageMedia\RESTAPI\Model\StartDateBody $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \MessageMedia\RESTAPI\Model\EndDateBody
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \MessageMedia\RESTAPI\Model\EndDateBody $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets sort_by
     * @return string
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     * @param string $sort_by Field to sort results set by
     * @return $this
     */
    public function setSortBy($sort_by)
    {
        $allowed_values = array('ACCOUNT', 'ACTION', 'DESTINATION_ADDRESS', 'DESTINATION_ADDRESS_COUNTRY', 'FORMAT', 'SOURCE_ADDRESS', 'SOURCE_ADDRESS_COUNTRY', 'TIMESTAMP');
        if (!in_array($sort_by, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'sort_by', must be one of 'ACCOUNT', 'ACTION', 'DESTINATION_ADDRESS', 'DESTINATION_ADDRESS_COUNTRY', 'FORMAT', 'SOURCE_ADDRESS', 'SOURCE_ADDRESS_COUNTRY', 'TIMESTAMP'");
        }
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets sort_direction
     * @return \MessageMedia\RESTAPI\Model\SortDirectionBody
     */
    public function getSortDirection()
    {
        return $this->container['sort_direction'];
    }

    /**
     * Sets sort_direction
     * @param \MessageMedia\RESTAPI\Model\SortDirectionBody $sort_direction
     * @return $this
     */
    public function setSortDirection($sort_direction)
    {
        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets timezone
     * @return \MessageMedia\RESTAPI\Model\TimezoneBody
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param \MessageMedia\RESTAPI\Model\TimezoneBody $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets accounts
     * @return \MessageMedia\RESTAPI\Model\AccountsBody
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     * @param \MessageMedia\RESTAPI\Model\AccountsBody $accounts
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets destination_address_country
     * @return \MessageMedia\RESTAPI\Model\DestinationAddressCountryBody
     */
    public function getDestinationAddressCountry()
    {
        return $this->container['destination_address_country'];
    }

    /**
     * Sets destination_address_country
     * @param \MessageMedia\RESTAPI\Model\DestinationAddressCountryBody $destination_address_country
     * @return $this
     */
    public function setDestinationAddressCountry($destination_address_country)
    {
        $this->container['destination_address_country'] = $destination_address_country;

        return $this;
    }

    /**
     * Gets destination_address
     * @return \MessageMedia\RESTAPI\Model\DestinationAddressBody
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     * @param \MessageMedia\RESTAPI\Model\DestinationAddressBody $destination_address
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets message_format
     * @return \MessageMedia\RESTAPI\Model\MessageFormatBody
     */
    public function getMessageFormat()
    {
        return $this->container['message_format'];
    }

    /**
     * Sets message_format
     * @param \MessageMedia\RESTAPI\Model\MessageFormatBody $message_format
     * @return $this
     */
    public function setMessageFormat($message_format)
    {
        $this->container['message_format'] = $message_format;

        return $this;
    }

    /**
     * Gets metadata_key
     * @return \MessageMedia\RESTAPI\Model\MetadataKeyBody
     */
    public function getMetadataKey()
    {
        return $this->container['metadata_key'];
    }

    /**
     * Sets metadata_key
     * @param \MessageMedia\RESTAPI\Model\MetadataKeyBody $metadata_key
     * @return $this
     */
    public function setMetadataKey($metadata_key)
    {
        $this->container['metadata_key'] = $metadata_key;

        return $this;
    }

    /**
     * Gets metadata_value
     * @return \MessageMedia\RESTAPI\Model\MetadataValueBody
     */
    public function getMetadataValue()
    {
        return $this->container['metadata_value'];
    }

    /**
     * Sets metadata_value
     * @param \MessageMedia\RESTAPI\Model\MetadataValueBody $metadata_value
     * @return $this
     */
    public function setMetadataValue($metadata_value)
    {
        $this->container['metadata_value'] = $metadata_value;

        return $this;
    }

    /**
     * Gets source_address_country
     * @return \MessageMedia\RESTAPI\Model\SourceAddressCountryBody
     */
    public function getSourceAddressCountry()
    {
        return $this->container['source_address_country'];
    }

    /**
     * Sets source_address_country
     * @param \MessageMedia\RESTAPI\Model\SourceAddressCountryBody $source_address_country
     * @return $this
     */
    public function setSourceAddressCountry($source_address_country)
    {
        $this->container['source_address_country'] = $source_address_country;

        return $this;
    }

    /**
     * Gets source_address
     * @return \MessageMedia\RESTAPI\Model\SourceAddressBody
     */
    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address
     * @param \MessageMedia\RESTAPI\Model\SourceAddressBody $source_address
     * @return $this
     */
    public function setSourceAddress($source_address)
    {
        $this->container['source_address'] = $source_address;

        return $this;
    }

    /**
     * Gets action
     * @return \MessageMedia\RESTAPI\Model\ActionBody
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param \MessageMedia\RESTAPI\Model\ActionBody $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets delivery_options
     * @return \MessageMedia\RESTAPI\Model\DeliveryOptionsBody
     */
    public function getDeliveryOptions()
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     * @param \MessageMedia\RESTAPI\Model\DeliveryOptionsBody $delivery_options
     * @return $this
     */
    public function setDeliveryOptions($delivery_options)
    {
        $this->container['delivery_options'] = $delivery_options;

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


