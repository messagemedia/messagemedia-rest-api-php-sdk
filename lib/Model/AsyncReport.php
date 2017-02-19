<?php
/**
 * AsyncReport
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
 * AsyncReport Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class AsyncReport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'AsyncReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'id' => 'string',
        'message_type' => 'string',
        'type' => 'string',
        'report_status' => 'string',
        'created_datetime' => '\DateTime',
        'last_modified_datetime' => '\DateTime'
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
        'id' => 'id',
        'message_type' => 'message_type',
        'type' => 'type',
        'report_status' => 'report_status',
        'created_datetime' => 'created_datetime',
        'last_modified_datetime' => 'last_modified_datetime'
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
        'id' => 'setId',
        'message_type' => 'setMessageType',
        'type' => 'setType',
        'report_status' => 'setReportStatus',
        'created_datetime' => 'setCreatedDatetime',
        'last_modified_datetime' => 'setLastModifiedDatetime'
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
        'id' => 'getId',
        'message_type' => 'getMessageType',
        'type' => 'getType',
        'report_status' => 'getReportStatus',
        'created_datetime' => 'getCreatedDatetime',
        'last_modified_datetime' => 'getLastModifiedDatetime'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const MESSAGE_TYPE_SENT_MESSAGES = 'SENT_MESSAGES';
    const MESSAGE_TYPE_RECEIVED_MESSAGES = 'RECEIVED_MESSAGES';
    const MESSAGE_TYPE_DELIVERY_REPORTS = 'DELIVERY_REPORTS';
    const TYPE_SUMMARY = 'SUMMARY';
    const TYPE_DETAIL = 'DETAIL';
    const REPORT_STATUS_REQUESTED = 'REQUESTED';
    const REPORT_STATUS_RUNNING = 'RUNNING';
    const REPORT_STATUS_CANCELLED = 'CANCELLED';
    const REPORT_STATUS_DONE = 'DONE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_SENT_MESSAGES,
            self::MESSAGE_TYPE_RECEIVED_MESSAGES,
            self::MESSAGE_TYPE_DELIVERY_REPORTS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SUMMARY,
            self::TYPE_DETAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReportStatusAllowableValues()
    {
        return [
            self::REPORT_STATUS_REQUESTED,
            self::REPORT_STATUS_RUNNING,
            self::REPORT_STATUS_CANCELLED,
            self::REPORT_STATUS_DONE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['report_status'] = isset($data['report_status']) ? $data['report_status'] : null;
        $this->container['created_datetime'] = isset($data['created_datetime']) ? $data['created_datetime'] : null;
        $this->container['last_modified_datetime'] = isset($data['last_modified_datetime']) ? $data['last_modified_datetime'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("SENT_MESSAGES", "RECEIVED_MESSAGES", "DELIVERY_REPORTS");
        if (!in_array($this->container['message_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'message_type', must be one of #{allowed_values}.";
        }

        $allowed_values = array("SUMMARY", "DETAIL");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        $allowed_values = array("REQUESTED", "RUNNING", "CANCELLED", "DONE");
        if (!in_array($this->container['report_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'report_status', must be one of #{allowed_values}.";
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
        $allowed_values = array("SENT_MESSAGES", "RECEIVED_MESSAGES", "DELIVERY_REPORTS");
        if (!in_array($this->container['message_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("SUMMARY", "DETAIL");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("REQUESTED", "RUNNING", "CANCELLED", "DONE");
        if (!in_array($this->container['report_status'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $id Unique ID for this reply
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets message_type
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     * @param string $message_type
     * @return $this
     */
    public function setMessageType($message_type)
    {
        $allowed_values = array('SENT_MESSAGES', 'RECEIVED_MESSAGES', 'DELIVERY_REPORTS');
        if (!in_array($message_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'message_type', must be one of 'SENT_MESSAGES', 'RECEIVED_MESSAGES', 'DELIVERY_REPORTS'");
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('SUMMARY', 'DETAIL');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'SUMMARY', 'DETAIL'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets report_status
     * @return string
     */
    public function getReportStatus()
    {
        return $this->container['report_status'];
    }

    /**
     * Sets report_status
     * @param string $report_status
     * @return $this
     */
    public function setReportStatus($report_status)
    {
        $allowed_values = array('REQUESTED', 'RUNNING', 'CANCELLED', 'DONE');
        if (!in_array($report_status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'report_status', must be one of 'REQUESTED', 'RUNNING', 'CANCELLED', 'DONE'");
        }
        $this->container['report_status'] = $report_status;

        return $this;
    }

    /**
     * Gets created_datetime
     * @return \DateTime
     */
    public function getCreatedDatetime()
    {
        return $this->container['created_datetime'];
    }

    /**
     * Sets created_datetime
     * @param \DateTime $created_datetime Date time at which this report was created.
     * @return $this
     */
    public function setCreatedDatetime($created_datetime)
    {
        $this->container['created_datetime'] = $created_datetime;

        return $this;
    }

    /**
     * Gets last_modified_datetime
     * @return \DateTime
     */
    public function getLastModifiedDatetime()
    {
        return $this->container['last_modified_datetime'];
    }

    /**
     * Sets last_modified_datetime
     * @param \DateTime $last_modified_datetime Date time at which this report was last modified.
     * @return $this
     */
    public function setLastModifiedDatetime($last_modified_datetime)
    {
        $this->container['last_modified_datetime'] = $last_modified_datetime;

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


