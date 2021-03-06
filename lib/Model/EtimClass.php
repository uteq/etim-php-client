<?php
/**
 * EtimClass
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
 * EtimClass Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EtimClass implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EtimClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parms' => '\Swagger\Client\Model\SteeringParms',
'code' => 'string',
'version' => 'int',
'status' => 'int',
'mutation_date' => '\DateTime',
'modelling' => 'bool',
'dimensional_drawing_svg_url' => 'string',
'description' => 'string',
'synonyms' => 'string[]',
'group' => '\Swagger\Client\Model\EtimGroup',
'features' => '\Swagger\Client\Model\EtimClassFeature[]',
'linked_modelling_classes' => '\Swagger\Client\Model\EtimClassMinimal[]',
'linked_regular_classes' => '\Swagger\Client\Model\EtimClassMinimal[]',
'releases' => 'string[]',
'translations' => '\Swagger\Client\Model\EtimClassTranslation[]',
'change_code' => '\Swagger\Client\Model\Changecode'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parms' => null,
'code' => null,
'version' => 'int32',
'status' => 'int32',
'mutation_date' => 'date-time',
'modelling' => null,
'dimensional_drawing_svg_url' => null,
'description' => null,
'synonyms' => null,
'group' => null,
'features' => null,
'linked_modelling_classes' => null,
'linked_regular_classes' => null,
'releases' => null,
'translations' => null,
'change_code' => null    ];

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
        'parms' => 'parms',
'code' => 'code',
'version' => 'version',
'status' => 'status',
'mutation_date' => 'mutationDate',
'modelling' => 'modelling',
'dimensional_drawing_svg_url' => 'dimensionalDrawingSvgUrl',
'description' => 'description',
'synonyms' => 'synonyms',
'group' => 'group',
'features' => 'features',
'linked_modelling_classes' => 'linkedModellingClasses',
'linked_regular_classes' => 'linkedRegularClasses',
'releases' => 'releases',
'translations' => 'translations',
'change_code' => 'changeCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parms' => 'setParms',
'code' => 'setCode',
'version' => 'setVersion',
'status' => 'setStatus',
'mutation_date' => 'setMutationDate',
'modelling' => 'setModelling',
'dimensional_drawing_svg_url' => 'setDimensionalDrawingSvgUrl',
'description' => 'setDescription',
'synonyms' => 'setSynonyms',
'group' => 'setGroup',
'features' => 'setFeatures',
'linked_modelling_classes' => 'setLinkedModellingClasses',
'linked_regular_classes' => 'setLinkedRegularClasses',
'releases' => 'setReleases',
'translations' => 'setTranslations',
'change_code' => 'setChangeCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parms' => 'getParms',
'code' => 'getCode',
'version' => 'getVersion',
'status' => 'getStatus',
'mutation_date' => 'getMutationDate',
'modelling' => 'getModelling',
'dimensional_drawing_svg_url' => 'getDimensionalDrawingSvgUrl',
'description' => 'getDescription',
'synonyms' => 'getSynonyms',
'group' => 'getGroup',
'features' => 'getFeatures',
'linked_modelling_classes' => 'getLinkedModellingClasses',
'linked_regular_classes' => 'getLinkedRegularClasses',
'releases' => 'getReleases',
'translations' => 'getTranslations',
'change_code' => 'getChangeCode'    ];

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
        $this->container['parms'] = isset($data['parms']) ? $data['parms'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mutation_date'] = isset($data['mutation_date']) ? $data['mutation_date'] : null;
        $this->container['modelling'] = isset($data['modelling']) ? $data['modelling'] : null;
        $this->container['dimensional_drawing_svg_url'] = isset($data['dimensional_drawing_svg_url']) ? $data['dimensional_drawing_svg_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['synonyms'] = isset($data['synonyms']) ? $data['synonyms'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['linked_modelling_classes'] = isset($data['linked_modelling_classes']) ? $data['linked_modelling_classes'] : null;
        $this->container['linked_regular_classes'] = isset($data['linked_regular_classes']) ? $data['linked_regular_classes'] : null;
        $this->container['releases'] = isset($data['releases']) ? $data['releases'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
        $this->container['change_code'] = isset($data['change_code']) ? $data['change_code'] : null;
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
     * @param string $code Class code, eg: \"EC000001\"
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Class version, eg: 4
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Class status  2 - Under construction  3 - Ready for publication  5 - Published  9 - Deleted
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets mutation_date
     *
     * @return \DateTime
     */
    public function getMutationDate()
    {
        return $this->container['mutation_date'];
    }

    /**
     * Sets mutation_date
     *
     * @param \DateTime $mutation_date mutation_date
     *
     * @return $this
     */
    public function setMutationDate($mutation_date)
    {
        $this->container['mutation_date'] = $mutation_date;

        return $this;
    }

    /**
     * Gets modelling
     *
     * @return bool
     */
    public function getModelling()
    {
        return $this->container['modelling'];
    }

    /**
     * Sets modelling
     *
     * @param bool $modelling Indicates if this is a modelling class
     *
     * @return $this
     */
    public function setModelling($modelling)
    {
        $this->container['modelling'] = $modelling;

        return $this;
    }

    /**
     * Gets dimensional_drawing_svg_url
     *
     * @return string
     */
    public function getDimensionalDrawingSvgUrl()
    {
        return $this->container['dimensional_drawing_svg_url'];
    }

    /**
     * Sets dimensional_drawing_svg_url
     *
     * @param string $dimensional_drawing_svg_url Dimensional Drawing Svg for modelling classes
     *
     * @return $this
     */
    public function setDimensionalDrawingSvgUrl($dimensional_drawing_svg_url)
    {
        $this->container['dimensional_drawing_svg_url'] = $dimensional_drawing_svg_url;

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
     * @param string $description Class description in the requested language
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets synonyms
     *
     * @return string[]
     */
    public function getSynonyms()
    {
        return $this->container['synonyms'];
    }

    /**
     * Sets synonyms
     *
     * @param string[] $synonyms Class synonyms in the requested language
     *
     * @return $this
     */
    public function setSynonyms($synonyms)
    {
        $this->container['synonyms'] = $synonyms;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Swagger\Client\Model\EtimGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Swagger\Client\Model\EtimGroup $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Swagger\Client\Model\EtimClassFeature[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Swagger\Client\Model\EtimClassFeature[] $features ETIM Features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets linked_modelling_classes
     *
     * @return \Swagger\Client\Model\EtimClassMinimal[]
     */
    public function getLinkedModellingClasses()
    {
        return $this->container['linked_modelling_classes'];
    }

    /**
     * Sets linked_modelling_classes
     *
     * @param \Swagger\Client\Model\EtimClassMinimal[] $linked_modelling_classes Linked modelling classes
     *
     * @return $this
     */
    public function setLinkedModellingClasses($linked_modelling_classes)
    {
        $this->container['linked_modelling_classes'] = $linked_modelling_classes;

        return $this;
    }

    /**
     * Gets linked_regular_classes
     *
     * @return \Swagger\Client\Model\EtimClassMinimal[]
     */
    public function getLinkedRegularClasses()
    {
        return $this->container['linked_regular_classes'];
    }

    /**
     * Sets linked_regular_classes
     *
     * @param \Swagger\Client\Model\EtimClassMinimal[] $linked_regular_classes Linked regular classes
     *
     * @return $this
     */
    public function setLinkedRegularClasses($linked_regular_classes)
    {
        $this->container['linked_regular_classes'] = $linked_regular_classes;

        return $this;
    }

    /**
     * Gets releases
     *
     * @return string[]
     */
    public function getReleases()
    {
        return $this->container['releases'];
    }

    /**
     * Sets releases
     *
     * @param string[] $releases ETIM Releases, \"DYNAMIC\", \"ETIM-8.0\", \"ETIM-7.0\", \"ETIM-6.0\", \"ETIM-5.0\", \"ETIM-4.0\"
     *
     * @return $this
     */
    public function setReleases($releases)
    {
        $this->container['releases'] = $releases;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return \Swagger\Client\Model\EtimClassTranslation[]
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param \Swagger\Client\Model\EtimClassTranslation[] $translations Translation
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

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
