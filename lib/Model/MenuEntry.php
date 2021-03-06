<?php
/**
 * MenuEntry
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
 * MenuEntry Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\System
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MenuEntry implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MenuEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'menu_location' => '\Spinen\ConnectWise\Clients\System\Model\MenuLocationReference',
        'caption' => 'string',
        'link' => 'string',
        'new_window_flag' => 'bool',
        'location_ids' => 'int[]',
        'origin' => 'string',
        'add_all_locations' => 'bool',
        'remove_all_locations' => 'bool',
        'small_menu_icon_id' => 'int',
        'large_menu_icon_id' => 'int',
        '_info' => '\Spinen\ConnectWise\Clients\System\Model\Metadata'
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
        'id' => 'id',
        'menu_location' => 'menuLocation',
        'caption' => 'caption',
        'link' => 'link',
        'new_window_flag' => 'newWindowFlag',
        'location_ids' => 'locationIds',
        'origin' => 'origin',
        'add_all_locations' => 'addAllLocations',
        'remove_all_locations' => 'removeAllLocations',
        'small_menu_icon_id' => 'smallMenuIconId',
        'large_menu_icon_id' => 'largeMenuIconId',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'menu_location' => 'setMenuLocation',
        'caption' => 'setCaption',
        'link' => 'setLink',
        'new_window_flag' => 'setNewWindowFlag',
        'location_ids' => 'setLocationIds',
        'origin' => 'setOrigin',
        'add_all_locations' => 'setAddAllLocations',
        'remove_all_locations' => 'setRemoveAllLocations',
        'small_menu_icon_id' => 'setSmallMenuIconId',
        'large_menu_icon_id' => 'setLargeMenuIconId',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'menu_location' => 'getMenuLocation',
        'caption' => 'getCaption',
        'link' => 'getLink',
        'new_window_flag' => 'getNewWindowFlag',
        'location_ids' => 'getLocationIds',
        'origin' => 'getOrigin',
        'add_all_locations' => 'getAddAllLocations',
        'remove_all_locations' => 'getRemoveAllLocations',
        'small_menu_icon_id' => 'getSmallMenuIconId',
        'large_menu_icon_id' => 'getLargeMenuIconId',
        '_info' => 'getInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['menu_location'] = isset($data['menu_location']) ? $data['menu_location'] : null;
        $this->container['caption'] = isset($data['caption']) ? $data['caption'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['new_window_flag'] = isset($data['new_window_flag']) ? $data['new_window_flag'] : null;
        $this->container['location_ids'] = isset($data['location_ids']) ? $data['location_ids'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['add_all_locations'] = isset($data['add_all_locations']) ? $data['add_all_locations'] : null;
        $this->container['remove_all_locations'] = isset($data['remove_all_locations']) ? $data['remove_all_locations'] : null;
        $this->container['small_menu_icon_id'] = isset($data['small_menu_icon_id']) ? $data['small_menu_icon_id'] : null;
        $this->container['large_menu_icon_id'] = isset($data['large_menu_icon_id']) ? $data['large_menu_icon_id'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['menu_location'] === null) {
            $invalid_properties[] = "'menu_location' can't be null";
        }
        if ($this->container['caption'] === null) {
            $invalid_properties[] = "'caption' can't be null";
        }
        if ((strlen($this->container['caption']) > 50)) {
            $invalid_properties[] = "invalid value for 'caption', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['link'] === null) {
            $invalid_properties[] = "'link' can't be null";
        }
        if ((strlen($this->container['link']) > 2000)) {
            $invalid_properties[] = "invalid value for 'link', the character length must be smaller than or equal to 2000.";
        }

        if ($this->container['new_window_flag'] === null) {
            $invalid_properties[] = "'new_window_flag' can't be null";
        }
        if (!is_null($this->container['origin']) && (strlen($this->container['origin']) > 2000)) {
            $invalid_properties[] = "invalid value for 'origin', the character length must be smaller than or equal to 2000.";
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
        if ($this->container['menu_location'] === null) {
            return false;
        }
        if ($this->container['caption'] === null) {
            return false;
        }
        if (strlen($this->container['caption']) > 50) {
            return false;
        }
        if ($this->container['link'] === null) {
            return false;
        }
        if (strlen($this->container['link']) > 2000) {
            return false;
        }
        if ($this->container['new_window_flag'] === null) {
            return false;
        }
        if (strlen($this->container['origin']) > 2000) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets menu_location
     * @return \Spinen\ConnectWise\Clients\System\Model\MenuLocationReference
     */
    public function getMenuLocation()
    {
        return $this->container['menu_location'];
    }

    /**
     * Sets menu_location
     * @param \Spinen\ConnectWise\Clients\System\Model\MenuLocationReference $menu_location
     * @return $this
     */
    public function setMenuLocation($menu_location)
    {
        $this->container['menu_location'] = $menu_location;

        return $this;
    }

    /**
     * Gets caption
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     * @param string $caption
     * @return $this
     */
    public function setCaption($caption)
    {
        if ((strlen($caption) > 50)) {
            throw new \InvalidArgumentException('invalid length for $caption when calling MenuEntry., must be smaller than or equal to 50.');
        }

        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets link
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        if ((strlen($link) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $link when calling MenuEntry., must be smaller than or equal to 2000.');
        }

        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets new_window_flag
     * @return bool
     */
    public function getNewWindowFlag()
    {
        return $this->container['new_window_flag'];
    }

    /**
     * Sets new_window_flag
     * @param bool $new_window_flag
     * @return $this
     */
    public function setNewWindowFlag($new_window_flag)
    {
        $this->container['new_window_flag'] = $new_window_flag;

        return $this;
    }

    /**
     * Gets location_ids
     * @return int[]
     */
    public function getLocationIds()
    {
        return $this->container['location_ids'];
    }

    /**
     * Sets location_ids
     * @param int[] $location_ids
     * @return $this
     */
    public function setLocationIds($location_ids)
    {
        $this->container['location_ids'] = $location_ids;

        return $this;
    }

    /**
     * Gets origin
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     * @param string $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        if (!is_null($origin) && (strlen($origin) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $origin when calling MenuEntry., must be smaller than or equal to 2000.');
        }

        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets add_all_locations
     * @return bool
     */
    public function getAddAllLocations()
    {
        return $this->container['add_all_locations'];
    }

    /**
     * Sets add_all_locations
     * @param bool $add_all_locations
     * @return $this
     */
    public function setAddAllLocations($add_all_locations)
    {
        $this->container['add_all_locations'] = $add_all_locations;

        return $this;
    }

    /**
     * Gets remove_all_locations
     * @return bool
     */
    public function getRemoveAllLocations()
    {
        return $this->container['remove_all_locations'];
    }

    /**
     * Sets remove_all_locations
     * @param bool $remove_all_locations
     * @return $this
     */
    public function setRemoveAllLocations($remove_all_locations)
    {
        $this->container['remove_all_locations'] = $remove_all_locations;

        return $this;
    }

    /**
     * Gets small_menu_icon_id
     * @return int
     */
    public function getSmallMenuIconId()
    {
        return $this->container['small_menu_icon_id'];
    }

    /**
     * Sets small_menu_icon_id
     * @param int $small_menu_icon_id
     * @return $this
     */
    public function setSmallMenuIconId($small_menu_icon_id)
    {
        $this->container['small_menu_icon_id'] = $small_menu_icon_id;

        return $this;
    }

    /**
     * Gets large_menu_icon_id
     * @return int
     */
    public function getLargeMenuIconId()
    {
        return $this->container['large_menu_icon_id'];
    }

    /**
     * Sets large_menu_icon_id
     * @param int $large_menu_icon_id
     * @return $this
     */
    public function setLargeMenuIconId($large_menu_icon_id)
    {
        $this->container['large_menu_icon_id'] = $large_menu_icon_id;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\System\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\System\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

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


