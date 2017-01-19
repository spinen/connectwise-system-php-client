<?php
/**
 * KeyCollection
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
 * KeyCollection Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\System
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KeyCollection implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KeyCollection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'system_collections_generic_i_collection_t_key_is_read_only' => 'bool',
        'system_collections_i_collection_is_synchronized' => 'bool',
        'system_collections_i_collection_sync_root' => 'string'
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
        'count' => 'Count',
        'system_collections_generic_i_collection_t_key_is_read_only' => 'System.Collections.Generic.ICollection&lt;TKey&gt;.IsReadOnly',
        'system_collections_i_collection_is_synchronized' => 'System.Collections.ICollection.IsSynchronized',
        'system_collections_i_collection_sync_root' => 'System.Collections.ICollection.SyncRoot'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'system_collections_generic_i_collection_t_key_is_read_only' => 'setSystemCollectionsGenericICollectionTKeyIsReadOnly',
        'system_collections_i_collection_is_synchronized' => 'setSystemCollectionsICollectionIsSynchronized',
        'system_collections_i_collection_sync_root' => 'setSystemCollectionsICollectionSyncRoot'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'system_collections_generic_i_collection_t_key_is_read_only' => 'getSystemCollectionsGenericICollectionTKeyIsReadOnly',
        'system_collections_i_collection_is_synchronized' => 'getSystemCollectionsICollectionIsSynchronized',
        'system_collections_i_collection_sync_root' => 'getSystemCollectionsICollectionSyncRoot'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['system_collections_generic_i_collection_t_key_is_read_only'] = isset($data['system_collections_generic_i_collection_t_key_is_read_only']) ? $data['system_collections_generic_i_collection_t_key_is_read_only'] : null;
        $this->container['system_collections_i_collection_is_synchronized'] = isset($data['system_collections_i_collection_is_synchronized']) ? $data['system_collections_i_collection_is_synchronized'] : null;
        $this->container['system_collections_i_collection_sync_root'] = isset($data['system_collections_i_collection_sync_root']) ? $data['system_collections_i_collection_sync_root'] : null;
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
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets system_collections_generic_i_collection_t_key_is_read_only
     * @return bool
     */
    public function getSystemCollectionsGenericICollectionTKeyIsReadOnly()
    {
        return $this->container['system_collections_generic_i_collection_t_key_is_read_only'];
    }

    /**
     * Sets system_collections_generic_i_collection_t_key_is_read_only
     * @param bool $system_collections_generic_i_collection_t_key_is_read_only
     * @return $this
     */
    public function setSystemCollectionsGenericICollectionTKeyIsReadOnly($system_collections_generic_i_collection_t_key_is_read_only)
    {
        $this->container['system_collections_generic_i_collection_t_key_is_read_only'] = $system_collections_generic_i_collection_t_key_is_read_only;

        return $this;
    }

    /**
     * Gets system_collections_i_collection_is_synchronized
     * @return bool
     */
    public function getSystemCollectionsICollectionIsSynchronized()
    {
        return $this->container['system_collections_i_collection_is_synchronized'];
    }

    /**
     * Sets system_collections_i_collection_is_synchronized
     * @param bool $system_collections_i_collection_is_synchronized
     * @return $this
     */
    public function setSystemCollectionsICollectionIsSynchronized($system_collections_i_collection_is_synchronized)
    {
        $this->container['system_collections_i_collection_is_synchronized'] = $system_collections_i_collection_is_synchronized;

        return $this;
    }

    /**
     * Gets system_collections_i_collection_sync_root
     * @return string
     */
    public function getSystemCollectionsICollectionSyncRoot()
    {
        return $this->container['system_collections_i_collection_sync_root'];
    }

    /**
     * Sets system_collections_i_collection_sync_root
     * @param string $system_collections_i_collection_sync_root
     * @return $this
     */
    public function setSystemCollectionsICollectionSyncRoot($system_collections_i_collection_sync_root)
    {
        $this->container['system_collections_i_collection_sync_root'] = $system_collections_i_collection_sync_root;

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


