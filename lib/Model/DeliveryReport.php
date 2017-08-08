<?php
/**
 * DeliveryReport
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
 * DeliveryReport Class Doc Comment
 *
 * @category    Class */
 // @description A delivery report that has been received indicating the status of a sent message
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class DeliveryReport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'DeliveryReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'account' => 'string',
        'destination_address' => 'string',
        'destination_address_country' => 'string',
        'format' => 'string',
        'id' => 'string',
        'in_response_to' => 'string',
        'metadata' => 'object',
        'source_address' => 'string',
        'source_address_country' => 'string',
        'status' => 'string',
        'status_code' => 'string',
        'timestamp' => '\DateTime'
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
        'account' => 'account',
        'destination_address' => 'destination_address',
        'destination_address_country' => 'destination_address_country',
        'format' => 'format',
        'id' => 'id',
        'in_response_to' => 'in_response_to',
        'metadata' => 'metadata',
        'source_address' => 'source_address',
        'source_address_country' => 'source_address_country',
        'status' => 'status',
        'status_code' => 'status_code',
        'timestamp' => 'timestamp'
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
        'account' => 'setAccount',
        'destination_address' => 'setDestinationAddress',
        'destination_address_country' => 'setDestinationAddressCountry',
        'format' => 'setFormat',
        'id' => 'setId',
        'in_response_to' => 'setInResponseTo',
        'metadata' => 'setMetadata',
        'source_address' => 'setSourceAddress',
        'source_address_country' => 'setSourceAddressCountry',
        'status' => 'setStatus',
        'status_code' => 'setStatusCode',
        'timestamp' => 'setTimestamp'
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
        'account' => 'getAccount',
        'destination_address' => 'getDestinationAddress',
        'destination_address_country' => 'getDestinationAddressCountry',
        'format' => 'getFormat',
        'id' => 'getId',
        'in_response_to' => 'getInResponseTo',
        'metadata' => 'getMetadata',
        'source_address' => 'getSourceAddress',
        'source_address_country' => 'getSourceAddressCountry',
        'status' => 'getStatus',
        'status_code' => 'getStatusCode',
        'timestamp' => 'getTimestamp'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const FORMAT_SMS = 'SMS';
    const FORMAT_TTS = 'TTS';
    const STATUS_QUEUED = 'queued';
    const STATUS_PROCESSING = 'processing';
    const STATUS_PROCESSED = 'processed';
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_ENROUTE = 'enroute';
    const STATUS_HELD = 'held';
    const STATUS_SUBMITTED = 'submitted';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_EXPIRED = 'expired';
    const STATUS_REJECTED = 'rejected';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_SMS,
            self::FORMAT_TTS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_PROCESSING,
            self::STATUS_PROCESSED,
            self::STATUS_SCHEDULED,
            self::STATUS_CANCELLED,
            self::STATUS_ENROUTE,
            self::STATUS_HELD,
            self::STATUS_SUBMITTED,
            self::STATUS_DELIVERED,
            self::STATUS_EXPIRED,
            self::STATUS_REJECTED,
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['destination_address_country'] = isset($data['destination_address_country']) ? $data['destination_address_country'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['in_response_to'] = isset($data['in_response_to']) ? $data['in_response_to'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
        $this->container['source_address_country'] = isset($data['source_address_country']) ? $data['source_address_country'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['account']) && (strlen($this->container['account']) > 200)) {
            $invalid_properties[] = "invalid value for 'account', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['account']) && (strlen($this->container['account']) < 1)) {
            $invalid_properties[] = "invalid value for 'account', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['destination_address']) && (strlen($this->container['destination_address']) > 15)) {
            $invalid_properties[] = "invalid value for 'destination_address', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['destination_address']) && (strlen($this->container['destination_address']) < 1)) {
            $invalid_properties[] = "invalid value for 'destination_address', the character length must be bigger than or equal to 1.";
        }

        $allowed_values = array("SMS", "TTS");
        if (!in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'format', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['source_address']) && (strlen($this->container['source_address']) > 15)) {
            $invalid_properties[] = "invalid value for 'source_address', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['source_address']) && (strlen($this->container['source_address']) < 1)) {
            $invalid_properties[] = "invalid value for 'source_address', the character length must be bigger than or equal to 1.";
        }

        $allowed_values = array("queued", "processing", "processed", "scheduled", "cancelled", "enroute", "held", "submitted", "delivered", "expired", "rejected");
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
        if (strlen($this->container['account']) > 200) {
            return false;
        }
        if (strlen($this->container['account']) < 1) {
            return false;
        }
        if (strlen($this->container['destination_address']) > 15) {
            return false;
        }
        if (strlen($this->container['destination_address']) < 1) {
            return false;
        }
        $allowed_values = array("SMS", "TTS");
        if (!in_array($this->container['format'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['source_address']) > 15) {
            return false;
        }
        if (strlen($this->container['source_address']) < 1) {
            return false;
        }
        $allowed_values = array("queued", "processing", "processed", "scheduled", "cancelled", "enroute", "held", "submitted", "delivered", "expired", "rejected");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets account
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param string $account Account associated with this delivery report
     * @return $this
     */
    public function setAccount($account)
    {
        if (strlen($account) > 200) {
            throw new \InvalidArgumentException('invalid length for $account when calling DeliveryReport., must be smaller than or equal to 200.');
        }
        if (strlen($account) < 1) {
            throw new \InvalidArgumentException('invalid length for $account when calling DeliveryReport., must be bigger than or equal to 1.');
        }
        $this->container['account'] = $account;

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
     * @param string $destination_address Address this delivery report was delivered to. This is the source address of the sent message that this delivery report is in response to
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        if (strlen($destination_address) > 15) {
            throw new \InvalidArgumentException('invalid length for $destination_address when calling DeliveryReport., must be smaller than or equal to 15.');
        }
        if (strlen($destination_address) < 1) {
            throw new \InvalidArgumentException('invalid length for $destination_address when calling DeliveryReport., must be bigger than or equal to 1.');
        }
        $this->container['destination_address'] = $destination_address;

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
     * @param string $destination_address_country Country associated with the destination address
     * @return $this
     */
    public function setDestinationAddressCountry($destination_address_country)
    {
        $this->container['destination_address_country'] = $destination_address_country;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format Format of message, SMS or TTS (Text To Speech)
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = array('SMS', 'TTS');
        if (!in_array($format, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'format', must be one of 'SMS', 'TTS'");
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique ID for this delivery report
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets in_response_to
     * @return string
     */
    public function getInResponseTo()
    {
        return $this->container['in_response_to'];
    }

    /**
     * Sets in_response_to
     * @param string $in_response_to Unique ID of the sent message that this delivery report is in response to
     * @return $this
     */
    public function setInResponseTo($in_response_to)
    {
        $this->container['in_response_to'] = $in_response_to;

        return $this;
    }

    /**
     * Gets metadata
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param object $metadata Metadata associated with the sent message
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * @param string $source_address Address this delivery report was received from, the destination address of the sent message that this delivery report is in response to
     * @return $this
     */
    public function setSourceAddress($source_address)
    {
        if (strlen($source_address) > 15) {
            throw new \InvalidArgumentException('invalid length for $source_address when calling DeliveryReport., must be smaller than or equal to 15.');
        }
        if (strlen($source_address) < 1) {
            throw new \InvalidArgumentException('invalid length for $source_address when calling DeliveryReport., must be bigger than or equal to 1.');
        }
        $this->container['source_address'] = $source_address;

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
     * @param string $source_address_country Country associated with the source address
     * @return $this
     */
    public function setSourceAddressCountry($source_address_country)
    {
        $this->container['source_address_country'] = $source_address_country;

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
     * @param string $status Status of the message
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('queued', 'processing', 'processed', 'scheduled', 'cancelled', 'enroute', 'held', 'submitted', 'delivered', 'expired', 'rejected');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'queued', 'processing', 'processed', 'scheduled', 'cancelled', 'enroute', 'held', 'submitted', 'delivered', 'expired', 'rejected'");
        }
        $this->container['status'] = $status;

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
     * @param string $status_code Status code of the message
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets timestamp
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param \DateTime $timestamp Date time at which this delivery report was received
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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


