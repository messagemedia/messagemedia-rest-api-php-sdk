<?php
/**
 * Report
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
 * Report Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class Report implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'Report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'callback_url' => 'string',
        'date_received' => '\DateTime',
        'delay' => 'int',
        'delivery_report_id' => 'string',
        'message_id' => 'string',
        'metadata' => 'object',
        'original_text' => 'string',
        'source_number' => 'string',
        'status' => 'string',
        'submitted_date' => '\DateTime',
        'vendor_account_id' => '\MessageMedia\RESTAPI\Model\ReplyVendorAccountId'
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
        'callback_url' => 'callback_url',
        'date_received' => 'date_received',
        'delay' => 'delay',
        'delivery_report_id' => 'delivery_report_id',
        'message_id' => 'message_id',
        'metadata' => 'metadata',
        'original_text' => 'original_text',
        'source_number' => 'source_number',
        'status' => 'status',
        'submitted_date' => 'submitted_date',
        'vendor_account_id' => 'vendor_account_id'
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
        'callback_url' => 'setCallbackUrl',
        'date_received' => 'setDateReceived',
        'delay' => 'setDelay',
        'delivery_report_id' => 'setDeliveryReportId',
        'message_id' => 'setMessageId',
        'metadata' => 'setMetadata',
        'original_text' => 'setOriginalText',
        'source_number' => 'setSourceNumber',
        'status' => 'setStatus',
        'submitted_date' => 'setSubmittedDate',
        'vendor_account_id' => 'setVendorAccountId'
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
        'callback_url' => 'getCallbackUrl',
        'date_received' => 'getDateReceived',
        'delay' => 'getDelay',
        'delivery_report_id' => 'getDeliveryReportId',
        'message_id' => 'getMessageId',
        'metadata' => 'getMetadata',
        'original_text' => 'getOriginalText',
        'source_number' => 'getSourceNumber',
        'status' => 'getStatus',
        'submitted_date' => 'getSubmittedDate',
        'vendor_account_id' => 'getVendorAccountId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ENROUTE = 'enroute';
    const STATUS_FAILED = 'failed';
    const STATUS_SUBMITTED = 'submitted';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_EXPIRED = 'expired';
    const STATUS_REJECTED = 'rejected';
    const STATUS_UNDELIVERABLE = 'undeliverable';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENROUTE,
            self::STATUS_FAILED,
            self::STATUS_SUBMITTED,
            self::STATUS_DELIVERED,
            self::STATUS_EXPIRED,
            self::STATUS_REJECTED,
            self::STATUS_UNDELIVERABLE,
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
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['date_received'] = isset($data['date_received']) ? $data['date_received'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['delivery_report_id'] = isset($data['delivery_report_id']) ? $data['delivery_report_id'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['original_text'] = isset($data['original_text']) ? $data['original_text'] : null;
        $this->container['source_number'] = isset($data['source_number']) ? $data['source_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submitted_date'] = isset($data['submitted_date']) ? $data['submitted_date'] : null;
        $this->container['vendor_account_id'] = isset($data['vendor_account_id']) ? $data['vendor_account_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['source_number']) && (strlen($this->container['source_number']) > 15)) {
            $invalid_properties[] = "invalid value for 'source_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['source_number']) && (strlen($this->container['source_number']) < 1)) {
            $invalid_properties[] = "invalid value for 'source_number', the character length must be bigger than or equal to 1.";
        }

        $allowed_values = array("enroute", "failed", "submitted", "delivered", "expired", "rejected", "undeliverable");
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
        if (strlen($this->container['source_number']) > 15) {
            return false;
        }
        if (strlen($this->container['source_number']) < 1) {
            return false;
        }
        $allowed_values = array("enroute", "failed", "submitted", "delivered", "expired", "rejected", "undeliverable");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets callback_url
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     * @param string $callback_url The URL specified as the callback URL in the original submit message request
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets date_received
     * @return \DateTime
     */
    public function getDateReceived()
    {
        return $this->container['date_received'];
    }

    /**
     * Sets date_received
     * @param \DateTime $date_received The date and time at which this delivery report was generated in UTC.
     * @return $this
     */
    public function setDateReceived($date_received)
    {
        $this->container['date_received'] = $date_received;

        return $this;
    }

    /**
     * Gets delay
     * @return int
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     * @param int $delay Deprecated, no longer in use
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets delivery_report_id
     * @return string
     */
    public function getDeliveryReportId()
    {
        return $this->container['delivery_report_id'];
    }

    /**
     * Sets delivery_report_id
     * @param string $delivery_report_id Unique ID for this delivery report
     * @return $this
     */
    public function setDeliveryReportId($delivery_report_id)
    {
        $this->container['delivery_report_id'] = $delivery_report_id;

        return $this;
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
     * @param string $message_id Unique ID of the original message
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

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
     * @param object $metadata Any metadata that was included in the original submit message request
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets original_text
     * @return string
     */
    public function getOriginalText()
    {
        return $this->container['original_text'];
    }

    /**
     * Sets original_text
     * @param string $original_text Text of the original message.
     * @return $this
     */
    public function setOriginalText($original_text)
    {
        $this->container['original_text'] = $original_text;

        return $this;
    }

    /**
     * Gets source_number
     * @return string
     */
    public function getSourceNumber()
    {
        return $this->container['source_number'];
    }

    /**
     * Sets source_number
     * @param string $source_number Address from which this delivery report was received
     * @return $this
     */
    public function setSourceNumber($source_number)
    {
        if (strlen($source_number) > 15) {
            throw new \InvalidArgumentException('invalid length for $source_number when calling Report., must be smaller than or equal to 15.');
        }
        if (strlen($source_number) < 1) {
            throw new \InvalidArgumentException('invalid length for $source_number when calling Report., must be bigger than or equal to 1.');
        }
        $this->container['source_number'] = $source_number;

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
     * @param string $status The status of the message as per the delivery report
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('enroute', 'failed', 'submitted', 'delivered', 'expired', 'rejected', 'undeliverable');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'enroute', 'failed', 'submitted', 'delivered', 'expired', 'rejected', 'undeliverable'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets submitted_date
     * @return \DateTime
     */
    public function getSubmittedDate()
    {
        return $this->container['submitted_date'];
    }

    /**
     * Sets submitted_date
     * @param \DateTime $submitted_date The date and time when the message status changed in UTC. For a delivered DR this may indicate the time at which the message was received on the handset.
     * @return $this
     */
    public function setSubmittedDate($submitted_date)
    {
        $this->container['submitted_date'] = $submitted_date;

        return $this;
    }

    /**
     * Gets vendor_account_id
     * @return \MessageMedia\RESTAPI\Model\ReplyVendorAccountId
     */
    public function getVendorAccountId()
    {
        return $this->container['vendor_account_id'];
    }

    /**
     * Sets vendor_account_id
     * @param \MessageMedia\RESTAPI\Model\ReplyVendorAccountId $vendor_account_id
     * @return $this
     */
    public function setVendorAccountId($vendor_account_id)
    {
        $this->container['vendor_account_id'] = $vendor_account_id;

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


