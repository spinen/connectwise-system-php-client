<?php
/**
 * ReportDataResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\System
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * System API
 *
 * ConnectWise System API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\System\Model;

use \ArrayAccess;

/**
 * ReportDataResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\System
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportDataResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ReportDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_definitions' => '\Spinen\ConnectWise\Clients\System\Model\JObject[]',
        'row_values' => '\Spinen\ConnectWise\Clients\System\Model\JObject[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'column_definitions' => 'column_definitions',
        'row_values' => 'row_values'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'column_definitions' => 'setColumnDefinitions',
        'row_values' => 'setRowValues'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'column_definitions' => 'getColumnDefinitions',
        'row_values' => 'getRowValues'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['column_definitions'] = isset($data['column_definitions']) ? $data['column_definitions'] : null;
        $this->container['row_values'] = isset($data['row_values']) ? $data['row_values'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
     * Gets column_definitions
     * @return \Spinen\ConnectWise\Clients\System\Model\JObject[]
     */
    public function getColumnDefinitions()
    {
        return $this->container['column_definitions'];
    }

    /**
     * Sets column_definitions
     * @param \Spinen\ConnectWise\Clients\System\Model\JObject[] $column_definitions
     * @return $this
     */
    public function setColumnDefinitions($column_definitions)
    {
        $this->container['column_definitions'] = $column_definitions;

        return $this;
    }

    /**
     * Gets row_values
     * @return \Spinen\ConnectWise\Clients\System\Model\JObject[]
     */
    public function getRowValues()
    {
        return $this->container['row_values'];
    }

    /**
     * Sets row_values
     * @param \Spinen\ConnectWise\Clients\System\Model\JObject[] $row_values
     * @return $this
     */
    public function setRowValues($row_values)
    {
        $this->container['row_values'] = $row_values;

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
            return json_encode(\Spinen\ConnectWise\Clients\System\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\System\ObjectSerializer::sanitizeForSerialization($this));
    }
}


