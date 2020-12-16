<?php
/**
 * EtimClassFeatureValue
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ETIM API
 *
 * ETIM International webservices.       - [Extra documentation and testclient](https://bitbucket.org/3xt/etimapi-rest-client/src/master/)
 *
 * OpenAPI spec version: 2.0
 * Contact: info@etim-international.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EtimClassFeatureValue Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EtimClassFeatureValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EtimClassFeatureValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_number' => 'int',
'change_code' => '\Swagger\Client\Model\Changecode',
'parms' => '\Swagger\Client\Model\SteeringParms',
'code' => 'string',
'deprecated' => 'bool',
'description' => 'string',
'translations' => '\Swagger\Client\Model\EtimTranslation[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_number' => 'int32',
'change_code' => null,
'parms' => null,
'code' => null,
'deprecated' => null,
'description' => null,
'translations' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_number' => 'orderNumber',
'change_code' => 'changeCode',
'parms' => 'parms',
'code' => 'code',
'deprecated' => 'deprecated',
'description' => 'description',
'translations' => 'translations'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_number' => 'setOrderNumber',
'change_code' => 'setChangeCode',
'parms' => 'setParms',
'code' => 'setCode',
'deprecated' => 'setDeprecated',
'description' => 'setDescription',
'translations' => 'setTranslations'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_number' => 'getOrderNumber',
'change_code' => 'getChangeCode',
'parms' => 'getParms',
'code' => 'getCode',
'deprecated' => 'getDeprecated',
'description' => 'getDescription',
'translations' => 'getTranslations'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['change_code'] = isset($data['change_code']) ? $data['change_code'] : null;
        $this->container['parms'] = isset($data['parms']) ? $data['parms'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['deprecated'] = isset($data['deprecated']) ? $data['deprecated'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_number
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int $order_number Value order number within the class feature, eg: 2
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets change_code
     *
     * @return \Swagger\Client\Model\Changecode
     */
    public function getChangeCode()
    {
        return $this->container['change_code'];
    }

    /**
     * Sets change_code
     *
     * @param \Swagger\Client\Model\Changecode $change_code change_code
     *
     * @return $this
     */
    public function setChangeCode($change_code)
    {
        $this->container['change_code'] = $change_code;

        return $this;
    }

    /**
     * Gets parms
     *
     * @return \Swagger\Client\Model\SteeringParms
     */
    public function getParms()
    {
        return $this->container['parms'];
    }

    /**
     * Sets parms
     *
     * @param \Swagger\Client\Model\SteeringParms $parms parms
     *
     * @return $this
     */
    public function setParms($parms)
    {
        $this->container['parms'] = $parms;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Value code, eg: \"EV000001\"
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets deprecated
     *
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool $deprecated deprecated
     *
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->container['deprecated'] = $deprecated;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Value description for requested language
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return \Swagger\Client\Model\EtimTranslation[]
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param \Swagger\Client\Model\EtimTranslation[] $translations Value translations for all entitled languages
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
