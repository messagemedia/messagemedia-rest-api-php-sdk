<?php
/**
 * SummaryReportProperties
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
 * SummaryReportProperties Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class SummaryReportProperties implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $modelName = 'SummaryReport_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $types = array(
        'end_date' => '\DateTime',
        'filters' => 'object',
        'grouping' => 'string',
        'start_date' => '\DateTime',
        'summary' => 'string',
        'summary_field' => 'string',
        'timezone' => 'string'
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
        'end_date' => 'end_date',
        'filters' => 'filters',
        'grouping' => 'grouping',
        'start_date' => 'start_date',
        'summary' => 'summary',
        'summary_field' => 'summary_field',
        'timezone' => 'timezone'
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
        'end_date' => 'setEndDate',
        'filters' => 'setFilters',
        'grouping' => 'setGrouping',
        'start_date' => 'setStartDate',
        'summary' => 'setSummary',
        'summary_field' => 'setSummaryField',
        'timezone' => 'setTimezone'
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
        'end_date' => 'getEndDate',
        'filters' => 'getFilters',
        'grouping' => 'getGrouping',
        'start_date' => 'getStartDate',
        'summary' => 'getSummary',
        'summary_field' => 'getSummaryField',
        'timezone' => 'getTimezone'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const GROUPING_DAY = 'DAY';
    const GROUPING_DELIVERY_REPORT = 'DELIVERY_REPORT';
    const GROUPING_DESTINATION_ADDRESS = 'DESTINATION_ADDRESS';
    const GROUPING_DESTINATION_ADDRESS_COUNTRY = 'DESTINATION_ADDRESS_COUNTRY';
    const GROUPING_FORMAT = 'FORMAT';
    const GROUPING_HOUR = 'HOUR';
    const GROUPING_METADATA_KEY = 'METADATA_KEY';
    const GROUPING_METADATA_VALUE = 'METADATA_VALUE';
    const GROUPING_MINUTE = 'MINUTE';
    const GROUPING_MONTH = 'MONTH';
    const GROUPING_SOURCE_ADDRESS = 'SOURCE_ADDRESS';
    const GROUPING_SOURCE_ADDRESS_COUNTRY = 'SOURCE_ADDRESS_COUNTRY';
    const GROUPING_STATUS = 'STATUS';
    const GROUPING_STATUS_CODE = 'STATUS_CODE';
    const GROUPING_YEAR = 'YEAR';
    const GROUPING_ACCOUNT = 'ACCOUNT';
    const SUMMARY_COUNT = 'COUNT';
    const SUMMARY_SUM = 'SUM';
    const SUMMARY_FIELD_UNITS = 'UNITS';
    const SUMMARY_FIELD_MESSAGE_ID = 'MESSAGE_ID';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGroupingAllowableValues()
    {
        return [
            self::GROUPING_DAY,
            self::GROUPING_DELIVERY_REPORT,
            self::GROUPING_DESTINATION_ADDRESS,
            self::GROUPING_DESTINATION_ADDRESS_COUNTRY,
            self::GROUPING_FORMAT,
            self::GROUPING_HOUR,
            self::GROUPING_METADATA_KEY,
            self::GROUPING_METADATA_VALUE,
            self::GROUPING_MINUTE,
            self::GROUPING_MONTH,
            self::GROUPING_SOURCE_ADDRESS,
            self::GROUPING_SOURCE_ADDRESS_COUNTRY,
            self::GROUPING_STATUS,
            self::GROUPING_STATUS_CODE,
            self::GROUPING_YEAR,
            self::GROUPING_ACCOUNT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSummaryAllowableValues()
    {
        return [
            self::SUMMARY_COUNT,
            self::SUMMARY_SUM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSummaryFieldAllowableValues()
    {
        return [
            self::SUMMARY_FIELD_UNITS,
            self::SUMMARY_FIELD_MESSAGE_ID,
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
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['grouping'] = isset($data['grouping']) ? $data['grouping'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['summary_field'] = isset($data['summary_field']) ? $data['summary_field'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("DAY", "DELIVERY_REPORT", "DESTINATION_ADDRESS", "DESTINATION_ADDRESS_COUNTRY", "FORMAT", "HOUR", "METADATA_KEY", "METADATA_VALUE", "MINUTE", "MONTH", "SOURCE_ADDRESS", "SOURCE_ADDRESS_COUNTRY", "STATUS", "STATUS_CODE", "YEAR", "ACCOUNT");
        if (!in_array($this->container['grouping'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'grouping', must be one of #{allowed_values}.";
        }

        $allowed_values = array("COUNT", "SUM");
        if (!in_array($this->container['summary'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'summary', must be one of #{allowed_values}.";
        }

        $allowed_values = array("UNITS", "MESSAGE_ID");
        if (!in_array($this->container['summary_field'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'summary_field', must be one of #{allowed_values}.";
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
        $allowed_values = array("DAY", "DELIVERY_REPORT", "DESTINATION_ADDRESS", "DESTINATION_ADDRESS_COUNTRY", "FORMAT", "HOUR", "METADATA_KEY", "METADATA_VALUE", "MINUTE", "MONTH", "SOURCE_ADDRESS", "SOURCE_ADDRESS_COUNTRY", "STATUS", "STATUS_CODE", "YEAR", "ACCOUNT");
        if (!in_array($this->container['grouping'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("COUNT", "SUM");
        if (!in_array($this->container['summary'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("UNITS", "MESSAGE_ID");
        if (!in_array($this->container['summary_field'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date The end date provided as a parameter for this report
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets filters
     * @return object
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param object $filters Any filters provided as parameters for this report
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets grouping
     * @return string
     */
    public function getGrouping()
    {
        return $this->container['grouping'];
    }

    /**
     * Sets grouping
     * @param string $grouping The value of the group by parameter provided for this report
     * @return $this
     */
    public function setGrouping($grouping)
    {
        $allowed_values = array('DAY', 'DELIVERY_REPORT', 'DESTINATION_ADDRESS', 'DESTINATION_ADDRESS_COUNTRY', 'FORMAT', 'HOUR', 'METADATA_KEY', 'METADATA_VALUE', 'MINUTE', 'MONTH', 'SOURCE_ADDRESS', 'SOURCE_ADDRESS_COUNTRY', 'STATUS', 'STATUS_CODE', 'YEAR', 'ACCOUNT');
        if (!in_array($grouping, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'grouping', must be one of 'DAY', 'DELIVERY_REPORT', 'DESTINATION_ADDRESS', 'DESTINATION_ADDRESS_COUNTRY', 'FORMAT', 'HOUR', 'METADATA_KEY', 'METADATA_VALUE', 'MINUTE', 'MONTH', 'SOURCE_ADDRESS', 'SOURCE_ADDRESS_COUNTRY', 'STATUS', 'STATUS_CODE', 'YEAR', 'ACCOUNT'");
        }
        $this->container['grouping'] = $grouping;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date The end date provided as a parameter for this report
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets summary
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     * @param string $summary The value of the summary_by parameter provided for this report
     * @return $this
     */
    public function setSummary($summary)
    {
        $allowed_values = array('COUNT', 'SUM');
        if (!in_array($summary, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'summary', must be one of 'COUNT', 'SUM'");
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets summary_field
     * @return string
     */
    public function getSummaryField()
    {
        return $this->container['summary_field'];
    }

    /**
     * Sets summary_field
     * @param string $summary_field The value of the summary_field parameter provided for this report
     * @return $this
     */
    public function setSummaryField($summary_field)
    {
        $allowed_values = array('UNITS', 'MESSAGE_ID');
        if (!in_array($summary_field, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'summary_field', must be one of 'UNITS', 'MESSAGE_ID'");
        }
        $this->container['summary_field'] = $summary_field;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


