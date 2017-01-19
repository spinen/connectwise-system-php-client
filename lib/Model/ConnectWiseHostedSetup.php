<?php
/**
 * ConnectWiseHostedSetup
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
 * ConnectWiseHostedSetup Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\System
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConnectWiseHostedSetup implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ConnectWiseHostedSetup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'screen_id' => 'int',
        'description' => 'string',
        'url' => 'string',
        'type' => 'string',
        'origin' => 'string',
        'pod_height' => 'int',
        'toolbar_button_dialog_height' => 'int',
        'toolbar_button_dialog_width' => 'int',
        'toolbar_button_text' => 'string',
        'toolbar_button_tool_tip' => 'string',
        'toolbar_button_icon_document_id' => 'int',
        'disabled_flag' => 'bool',
        'created_by' => 'string',
        'date_created' => 'string',
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
        'screen_id' => 'screenId',
        'description' => 'description',
        'url' => 'url',
        'type' => 'type',
        'origin' => 'origin',
        'pod_height' => 'podHeight',
        'toolbar_button_dialog_height' => 'toolbarButtonDialogHeight',
        'toolbar_button_dialog_width' => 'toolbarButtonDialogWidth',
        'toolbar_button_text' => 'toolbarButtonText',
        'toolbar_button_tool_tip' => 'toolbarButtonToolTip',
        'toolbar_button_icon_document_id' => 'toolbarButtonIconDocumentId',
        'disabled_flag' => 'disabledFlag',
        'created_by' => 'createdBy',
        'date_created' => 'dateCreated',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'screen_id' => 'setScreenId',
        'description' => 'setDescription',
        'url' => 'setUrl',
        'type' => 'setType',
        'origin' => 'setOrigin',
        'pod_height' => 'setPodHeight',
        'toolbar_button_dialog_height' => 'setToolbarButtonDialogHeight',
        'toolbar_button_dialog_width' => 'setToolbarButtonDialogWidth',
        'toolbar_button_text' => 'setToolbarButtonText',
        'toolbar_button_tool_tip' => 'setToolbarButtonToolTip',
        'toolbar_button_icon_document_id' => 'setToolbarButtonIconDocumentId',
        'disabled_flag' => 'setDisabledFlag',
        'created_by' => 'setCreatedBy',
        'date_created' => 'setDateCreated',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'screen_id' => 'getScreenId',
        'description' => 'getDescription',
        'url' => 'getUrl',
        'type' => 'getType',
        'origin' => 'getOrigin',
        'pod_height' => 'getPodHeight',
        'toolbar_button_dialog_height' => 'getToolbarButtonDialogHeight',
        'toolbar_button_dialog_width' => 'getToolbarButtonDialogWidth',
        'toolbar_button_text' => 'getToolbarButtonText',
        'toolbar_button_tool_tip' => 'getToolbarButtonToolTip',
        'toolbar_button_icon_document_id' => 'getToolbarButtonIconDocumentId',
        'disabled_flag' => 'getDisabledFlag',
        'created_by' => 'getCreatedBy',
        'date_created' => 'getDateCreated',
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

    const TYPE_TAB = 'Tab';
    const TYPE_POD = 'Pod';
    const TYPE_TOOLBAR_BUTTON = 'ToolbarButton';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TAB,
            self::TYPE_POD,
            self::TYPE_TOOLBAR_BUTTON,
        ];
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
        $this->container['screen_id'] = isset($data['screen_id']) ? $data['screen_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['pod_height'] = isset($data['pod_height']) ? $data['pod_height'] : null;
        $this->container['toolbar_button_dialog_height'] = isset($data['toolbar_button_dialog_height']) ? $data['toolbar_button_dialog_height'] : null;
        $this->container['toolbar_button_dialog_width'] = isset($data['toolbar_button_dialog_width']) ? $data['toolbar_button_dialog_width'] : null;
        $this->container['toolbar_button_text'] = isset($data['toolbar_button_text']) ? $data['toolbar_button_text'] : null;
        $this->container['toolbar_button_tool_tip'] = isset($data['toolbar_button_tool_tip']) ? $data['toolbar_button_tool_tip'] : null;
        $this->container['toolbar_button_icon_document_id'] = isset($data['toolbar_button_icon_document_id']) ? $data['toolbar_button_icon_document_id'] : null;
        $this->container['disabled_flag'] = isset($data['disabled_flag']) ? $data['disabled_flag'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
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
        if ($this->container['screen_id'] === null) {
            $invalid_properties[] = "'screen_id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ((strlen($this->container['description']) > 255)) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ((strlen($this->container['url']) > 1024)) {
            $invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["Tab", "Pod", "ToolbarButton"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['origin']) && (strlen($this->container['origin']) > 50)) {
            $invalid_properties[] = "invalid value for 'origin', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['toolbar_button_text']) && (strlen($this->container['toolbar_button_text']) > 50)) {
            $invalid_properties[] = "invalid value for 'toolbar_button_text', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['toolbar_button_tool_tip']) && (strlen($this->container['toolbar_button_tool_tip']) > 50)) {
            $invalid_properties[] = "invalid value for 'toolbar_button_tool_tip', the character length must be smaller than or equal to 50.";
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
        if ($this->container['screen_id'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if (strlen($this->container['description']) > 255) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if (strlen($this->container['url']) > 1024) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["Tab", "Pod", "ToolbarButton"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['origin']) > 50) {
            return false;
        }
        if (strlen($this->container['toolbar_button_text']) > 50) {
            return false;
        }
        if (strlen($this->container['toolbar_button_tool_tip']) > 50) {
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
     * Gets screen_id
     * @return int
     */
    public function getScreenId()
    {
        return $this->container['screen_id'];
    }

    /**
     * Sets screen_id
     * @param int $screen_id Can be obtained via ConnectWiseHostedApiScreen report
     * @return $this
     */
    public function setScreenId($screen_id)
    {
        $this->container['screen_id'] = $screen_id;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        if ((strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ConnectWiseHostedSetup., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        if ((strlen($url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $url when calling ConnectWiseHostedSetup., must be smaller than or equal to 1024.');
        }

        $this->container['url'] = $url;

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
        $allowed_values = array('Tab', 'Pod', 'ToolbarButton');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'Tab', 'Pod', 'ToolbarButton'");
        }
        $this->container['type'] = $type;

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
        if (!is_null($origin) && (strlen($origin) > 50)) {
            throw new \InvalidArgumentException('invalid length for $origin when calling ConnectWiseHostedSetup., must be smaller than or equal to 50.');
        }

        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets pod_height
     * @return int
     */
    public function getPodHeight()
    {
        return $this->container['pod_height'];
    }

    /**
     * Sets pod_height
     * @param int $pod_height
     * @return $this
     */
    public function setPodHeight($pod_height)
    {
        $this->container['pod_height'] = $pod_height;

        return $this;
    }

    /**
     * Gets toolbar_button_dialog_height
     * @return int
     */
    public function getToolbarButtonDialogHeight()
    {
        return $this->container['toolbar_button_dialog_height'];
    }

    /**
     * Sets toolbar_button_dialog_height
     * @param int $toolbar_button_dialog_height
     * @return $this
     */
    public function setToolbarButtonDialogHeight($toolbar_button_dialog_height)
    {
        $this->container['toolbar_button_dialog_height'] = $toolbar_button_dialog_height;

        return $this;
    }

    /**
     * Gets toolbar_button_dialog_width
     * @return int
     */
    public function getToolbarButtonDialogWidth()
    {
        return $this->container['toolbar_button_dialog_width'];
    }

    /**
     * Sets toolbar_button_dialog_width
     * @param int $toolbar_button_dialog_width
     * @return $this
     */
    public function setToolbarButtonDialogWidth($toolbar_button_dialog_width)
    {
        $this->container['toolbar_button_dialog_width'] = $toolbar_button_dialog_width;

        return $this;
    }

    /**
     * Gets toolbar_button_text
     * @return string
     */
    public function getToolbarButtonText()
    {
        return $this->container['toolbar_button_text'];
    }

    /**
     * Sets toolbar_button_text
     * @param string $toolbar_button_text
     * @return $this
     */
    public function setToolbarButtonText($toolbar_button_text)
    {
        if (!is_null($toolbar_button_text) && (strlen($toolbar_button_text) > 50)) {
            throw new \InvalidArgumentException('invalid length for $toolbar_button_text when calling ConnectWiseHostedSetup., must be smaller than or equal to 50.');
        }

        $this->container['toolbar_button_text'] = $toolbar_button_text;

        return $this;
    }

    /**
     * Gets toolbar_button_tool_tip
     * @return string
     */
    public function getToolbarButtonToolTip()
    {
        return $this->container['toolbar_button_tool_tip'];
    }

    /**
     * Sets toolbar_button_tool_tip
     * @param string $toolbar_button_tool_tip
     * @return $this
     */
    public function setToolbarButtonToolTip($toolbar_button_tool_tip)
    {
        if (!is_null($toolbar_button_tool_tip) && (strlen($toolbar_button_tool_tip) > 50)) {
            throw new \InvalidArgumentException('invalid length for $toolbar_button_tool_tip when calling ConnectWiseHostedSetup., must be smaller than or equal to 50.');
        }

        $this->container['toolbar_button_tool_tip'] = $toolbar_button_tool_tip;

        return $this;
    }

    /**
     * Gets toolbar_button_icon_document_id
     * @return int
     */
    public function getToolbarButtonIconDocumentId()
    {
        return $this->container['toolbar_button_icon_document_id'];
    }

    /**
     * Sets toolbar_button_icon_document_id
     * @param int $toolbar_button_icon_document_id
     * @return $this
     */
    public function setToolbarButtonIconDocumentId($toolbar_button_icon_document_id)
    {
        $this->container['toolbar_button_icon_document_id'] = $toolbar_button_icon_document_id;

        return $this;
    }

    /**
     * Gets disabled_flag
     * @return bool
     */
    public function getDisabledFlag()
    {
        return $this->container['disabled_flag'];
    }

    /**
     * Sets disabled_flag
     * @param bool $disabled_flag
     * @return $this
     */
    public function setDisabledFlag($disabled_flag)
    {
        $this->container['disabled_flag'] = $disabled_flag;

        return $this;
    }

    /**
     * Gets created_by
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param string $created_by
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets date_created
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param string $date_created
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

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


