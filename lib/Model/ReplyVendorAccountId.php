<?php
/**
 * ReplyVendorAccountId
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
 * ReplyVendorAccountId Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class ReplyVendorAccountId implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'Reply_vendor_account_id';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'vendor_id' => 'string',
        'account_id' => 'string'
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
        'vendor_id' => 'vendor_id',
        'account_id' => 'account_id'
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
        'vendor_id' => 'setVendorId',
        'account_id' => 'setAccountId'
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
        'vendor_id' => 'getVendorId',
        'account_id' => 'getAccountId'
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
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
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
     * Gets vendor_id
     * @return string
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     * @param string $vendor_id
     * @return $this
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param string $account_id The account used to submit the original message.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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


