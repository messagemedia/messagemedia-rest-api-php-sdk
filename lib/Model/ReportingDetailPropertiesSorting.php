<?php
/**
 * ReportingDetailPropertiesSorting
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
 * ReportingDetailPropertiesSorting Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class ReportingDetailPropertiesSorting implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'ReportingDetailProperties_sorting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'field' => 'string',
        'order' => 'string'
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
        'field' => 'field',
        'order' => 'order'
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
        'field' => 'setField',
        'order' => 'setOrder'
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
        'field' => 'getField',
        'order' => 'getOrder'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const FIELD_ACCOUNT = 'ACCOUNT';
    const FIELD_DELIVERED_TIMESTAMP = 'DELIVERED_TIMESTAMP';
    const FIELD_MESSAGE_EXPIRY_TIMESTAMP = 'MESSAGE_EXPIRY_TIMESTAMP';
    const FIELD_DELIVERY_REPORT = 'DELIVERY_REPORT';
    const FIELD_DESTINATION_ADDRESS = 'DESTINATION_ADDRESS';
    const FIELD_DESTINATION_ADDRESS_COUNTRY = 'DESTINATION_ADDRESS_COUNTRY';
    const FIELD_FORMAT = 'FORMAT';
    const FIELD_SOURCE_ADDRESS = 'SOURCE_ADDRESS';
    const FIELD_SOURCE_ADDRESS_COUNTRY = 'SOURCE_ADDRESS_COUNTRY';
    const FIELD_STATUS = 'STATUS';
    const FIELD_STATUS_CODE = 'STATUS_CODE';
    const FIELD_UNITS = 'UNITS';
    const FIELD_TIMESTAMP = 'TIMESTAMP';
    const ORDER_ASCENDING = 'ASCENDING';
    const ORDER_DESCENDING = 'DESCENDING';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldAllowableValues()
    {
        return [
            self::FIELD_ACCOUNT,
            self::FIELD_DELIVERED_TIMESTAMP,
            self::FIELD_MESSAGE_EXPIRY_TIMESTAMP,
            self::FIELD_DELIVERY_REPORT,
            self::FIELD_DESTINATION_ADDRESS,
            self::FIELD_DESTINATION_ADDRESS_COUNTRY,
            self::FIELD_FORMAT,
            self::FIELD_SOURCE_ADDRESS,
            self::FIELD_SOURCE_ADDRESS_COUNTRY,
            self::FIELD_STATUS,
            self::FIELD_STATUS_CODE,
            self::FIELD_UNITS,
            self::FIELD_TIMESTAMP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASCENDING,
            self::ORDER_DESCENDING,
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
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("ACCOUNT", "DELIVERED_TIMESTAMP", "MESSAGE_EXPIRY_TIMESTAMP", "DELIVERY_REPORT", "DESTINATION_ADDRESS", "DESTINATION_ADDRESS_COUNTRY", "FORMAT", "SOURCE_ADDRESS", "SOURCE_ADDRESS_COUNTRY", "STATUS", "STATUS_CODE", "UNITS", "TIMESTAMP");
        if (!in_array($this->container['field'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'field', must be one of #{allowed_values}.";
        }

        $allowed_values = array("ASCENDING", "DESCENDING");
        if (!in_array($this->container['order'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'order', must be one of #{allowed_values}.";
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
        $allowed_values = array("ACCOUNT", "DELIVERED_TIMESTAMP", "MESSAGE_EXPIRY_TIMESTAMP", "DELIVERY_REPORT", "DESTINATION_ADDRESS", "DESTINATION_ADDRESS_COUNTRY", "FORMAT", "SOURCE_ADDRESS", "SOURCE_ADDRESS_COUNTRY", "STATUS", "STATUS_CODE", "UNITS", "TIMESTAMP");
        if (!in_array($this->container['field'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("ASCENDING", "DESCENDING");
        if (!in_array($this->container['order'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets field
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     * @param string $field The value of the sort_by field provided for this report
     * @return $this
     */
    public function setField($field)
    {
        $allowed_values = array('ACCOUNT', 'DELIVERED_TIMESTAMP', 'MESSAGE_EXPIRY_TIMESTAMP', 'DELIVERY_REPORT', 'DESTINATION_ADDRESS', 'DESTINATION_ADDRESS_COUNTRY', 'FORMAT', 'SOURCE_ADDRESS', 'SOURCE_ADDRESS_COUNTRY', 'STATUS', 'STATUS_CODE', 'UNITS', 'TIMESTAMP');
        if (!in_array($field, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'field', must be one of 'ACCOUNT', 'DELIVERED_TIMESTAMP', 'MESSAGE_EXPIRY_TIMESTAMP', 'DELIVERY_REPORT', 'DESTINATION_ADDRESS', 'DESTINATION_ADDRESS_COUNTRY', 'FORMAT', 'SOURCE_ADDRESS', 'SOURCE_ADDRESS_COUNTRY', 'STATUS', 'STATUS_CODE', 'UNITS', 'TIMESTAMP'");
        }
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param string $order The value of the sort_direction field provided for this report
     * @return $this
     */
    public function setOrder($order)
    {
        $allowed_values = array('ASCENDING', 'DESCENDING');
        if (!in_array($order, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'order', must be one of 'ASCENDING', 'DESCENDING'");
        }
        $this->container['order'] = $order;

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


