<?php
/**
 * SubmittedMessage
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
 * SubmittedMessage Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class SubmittedMessage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'SubmittedMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'message_id' => 'string',
        'status' => 'string'
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
        'message_id' => 'message_id',
        'status' => 'status'
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
        'message_id' => 'setMessageId',
        'status' => 'setStatus'
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
        'message_id' => 'getMessageId',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ENROUTE = 'enroute';
    const STATUS_SUBMITTED = 'submitted';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_EXPIRED = 'expired';
    const STATUS_REJECTED = 'rejected';
    const STATUS_UNDELIVERABLE = 'undeliverable';
    const STATUS_QUEUED = 'queued';
    const STATUS_PROCESSED = 'processed';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_FAILED = 'failed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENROUTE,
            self::STATUS_SUBMITTED,
            self::STATUS_DELIVERED,
            self::STATUS_EXPIRED,
            self::STATUS_REJECTED,
            self::STATUS_UNDELIVERABLE,
            self::STATUS_QUEUED,
            self::STATUS_PROCESSED,
            self::STATUS_CANCELLED,
            self::STATUS_SCHEDULED,
            self::STATUS_FAILED,
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
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("enroute", "submitted", "delivered", "expired", "rejected", "undeliverable", "queued", "processed", "cancelled", "scheduled", "failed");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        $allowed_values = array("enroute", "submitted", "delivered", "expired", "rejected", "undeliverable", "queued", "processed", "cancelled", "scheduled", "failed");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets message_id
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     * @param string $message_id Unique ID of this message
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

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
     * @param string $status The status of the message
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('enroute', 'submitted', 'delivered', 'expired', 'rejected', 'undeliverable', 'queued', 'processed', 'cancelled', 'scheduled', 'failed');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'enroute', 'submitted', 'delivered', 'expired', 'rejected', 'undeliverable', 'queued', 'processed', 'cancelled', 'scheduled', 'failed'");
        }
        $this->container['status'] = $status;

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


