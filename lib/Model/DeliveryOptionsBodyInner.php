<?php
/**
 * DeliveryOptionsBodyInner
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
 * DeliveryOptionsBodyInner Class Doc Comment
 *
 * @category    Class */
 // @description A delivery option
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class DeliveryOptionsBodyInner implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'deliveryOptionsBody_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'delivery_type' => 'string',
        'delivery_addresses' => 'string[]',
        'delivery_format' => 'string'
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
        'delivery_type' => 'delivery_type',
        'delivery_addresses' => 'delivery_addresses',
        'delivery_format' => 'delivery_format'
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
        'delivery_type' => 'setDeliveryType',
        'delivery_addresses' => 'setDeliveryAddresses',
        'delivery_format' => 'setDeliveryFormat'
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
        'delivery_type' => 'getDeliveryType',
        'delivery_addresses' => 'getDeliveryAddresses',
        'delivery_format' => 'getDeliveryFormat'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const DELIVERY_TYPE_EMAIL = 'EMAIL';
    const DELIVERY_FORMAT_CSV = 'CSV';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDeliveryTypeAllowableValues()
    {
        return [
            self::DELIVERY_TYPE_EMAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDeliveryFormatAllowableValues()
    {
        return [
            self::DELIVERY_FORMAT_CSV,
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
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['delivery_addresses'] = isset($data['delivery_addresses']) ? $data['delivery_addresses'] : null;
        $this->container['delivery_format'] = isset($data['delivery_format']) ? $data['delivery_format'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("EMAIL");
        if (!in_array($this->container['delivery_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'delivery_type', must be one of #{allowed_values}.";
        }

        $allowed_values = array("CSV");
        if (!in_array($this->container['delivery_format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'delivery_format', must be one of #{allowed_values}.";
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
        $allowed_values = array("EMAIL");
        if (!in_array($this->container['delivery_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("CSV");
        if (!in_array($this->container['delivery_format'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets delivery_type
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     * @param string $delivery_type How to deliver the report.
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $allowed_values = array('EMAIL');
        if (!in_array($delivery_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'delivery_type', must be one of 'EMAIL'");
        }
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets delivery_addresses
     * @return string[]
     */
    public function getDeliveryAddresses()
    {
        return $this->container['delivery_addresses'];
    }

    /**
     * Sets delivery_addresses
     * @param string[] $delivery_addresses A list of email addresses to use as the recipient of the email. Only works for EMAIL delivery type
     * @return $this
     */
    public function setDeliveryAddresses($delivery_addresses)
    {
        $this->container['delivery_addresses'] = $delivery_addresses;

        return $this;
    }

    /**
     * Gets delivery_format
     * @return string
     */
    public function getDeliveryFormat()
    {
        return $this->container['delivery_format'];
    }

    /**
     * Sets delivery_format
     * @param string $delivery_format Format of the report.
     * @return $this
     */
    public function setDeliveryFormat($delivery_format)
    {
        $allowed_values = array('CSV');
        if (!in_array($delivery_format, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'delivery_format', must be one of 'CSV'");
        }
        $this->container['delivery_format'] = $delivery_format;

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


