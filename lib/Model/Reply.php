<?php
/**
 * Reply
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
 * Reply Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class Reply implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'Reply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'callback_url' => 'string',
        'content' => 'string',
        'date_received' => '\DateTime',
        'destination_number' => 'string',
        'message_id' => 'string',
        'metadata' => 'object',
        'reply_id' => 'string',
        'source_number' => 'string',
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
        'content' => 'content',
        'date_received' => 'date_received',
        'destination_number' => 'destination_number',
        'message_id' => 'message_id',
        'metadata' => 'metadata',
        'reply_id' => 'reply_id',
        'source_number' => 'source_number',
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
        'content' => 'setContent',
        'date_received' => 'setDateReceived',
        'destination_number' => 'setDestinationNumber',
        'message_id' => 'setMessageId',
        'metadata' => 'setMetadata',
        'reply_id' => 'setReplyId',
        'source_number' => 'setSourceNumber',
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
        'content' => 'getContent',
        'date_received' => 'getDateReceived',
        'destination_number' => 'getDestinationNumber',
        'message_id' => 'getMessageId',
        'metadata' => 'getMetadata',
        'reply_id' => 'getReplyId',
        'source_number' => 'getSourceNumber',
        'vendor_account_id' => 'getVendorAccountId'
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
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['date_received'] = isset($data['date_received']) ? $data['date_received'] : null;
        $this->container['destination_number'] = isset($data['destination_number']) ? $data['destination_number'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['reply_id'] = isset($data['reply_id']) ? $data['reply_id'] : null;
        $this->container['source_number'] = isset($data['source_number']) ? $data['source_number'] : null;
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
        if (!is_null($this->container['content']) && (strlen($this->container['content']) > 5000)) {
            $invalid_properties[] = "invalid value for 'content', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['content']) && (strlen($this->container['content']) < 1)) {
            $invalid_properties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['destination_number']) && (strlen($this->container['destination_number']) > 15)) {
            $invalid_properties[] = "invalid value for 'destination_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['destination_number']) && (strlen($this->container['destination_number']) < 1)) {
            $invalid_properties[] = "invalid value for 'destination_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['source_number']) && (strlen($this->container['source_number']) > 15)) {
            $invalid_properties[] = "invalid value for 'source_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['source_number']) && (strlen($this->container['source_number']) < 1)) {
            $invalid_properties[] = "invalid value for 'source_number', the character length must be bigger than or equal to 1.";
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
        if (strlen($this->container['content']) > 5000) {
            return false;
        }
        if (strlen($this->container['content']) < 1) {
            return false;
        }
        if (strlen($this->container['destination_number']) > 15) {
            return false;
        }
        if (strlen($this->container['destination_number']) < 1) {
            return false;
        }
        if (strlen($this->container['source_number']) > 15) {
            return false;
        }
        if (strlen($this->container['source_number']) < 1) {
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
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content Content of the reply
     * @return $this
     */
    public function setContent($content)
    {
        if (strlen($content) > 5000) {
            throw new \InvalidArgumentException('invalid length for $content when calling Reply., must be smaller than or equal to 5000.');
        }
        if (strlen($content) < 1) {
            throw new \InvalidArgumentException('invalid length for $content when calling Reply., must be bigger than or equal to 1.');
        }
        $this->container['content'] = $content;

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
     * @param \DateTime $date_received Date time when the reply was received
     * @return $this
     */
    public function setDateReceived($date_received)
    {
        $this->container['date_received'] = $date_received;

        return $this;
    }

    /**
     * Gets destination_number
     * @return string
     */
    public function getDestinationNumber()
    {
        return $this->container['destination_number'];
    }

    /**
     * Sets destination_number
     * @param string $destination_number Address from which this reply was sent to
     * @return $this
     */
    public function setDestinationNumber($destination_number)
    {
        if (strlen($destination_number) > 15) {
            throw new \InvalidArgumentException('invalid length for $destination_number when calling Reply., must be smaller than or equal to 15.');
        }
        if (strlen($destination_number) < 1) {
            throw new \InvalidArgumentException('invalid length for $destination_number when calling Reply., must be bigger than or equal to 1.');
        }
        $this->container['destination_number'] = $destination_number;

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
     * Gets reply_id
     * @return string
     */
    public function getReplyId()
    {
        return $this->container['reply_id'];
    }

    /**
     * Sets reply_id
     * @param string $reply_id Unique ID of this reply
     * @return $this
     */
    public function setReplyId($reply_id)
    {
        $this->container['reply_id'] = $reply_id;

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
     * @param string $source_number Address from which this reply was received from
     * @return $this
     */
    public function setSourceNumber($source_number)
    {
        if (strlen($source_number) > 15) {
            throw new \InvalidArgumentException('invalid length for $source_number when calling Reply., must be smaller than or equal to 15.');
        }
        if (strlen($source_number) < 1) {
            throw new \InvalidArgumentException('invalid length for $source_number when calling Reply., must be bigger than or equal to 1.');
        }
        $this->container['source_number'] = $source_number;

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


