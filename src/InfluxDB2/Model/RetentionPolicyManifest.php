<?php
/**
 * RetentionPolicyManifest
 *
 * PHP version 5
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Influx OSS API Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfluxDB2\Model;

use \ArrayAccess;
use \InfluxDB2\ObjectSerializer;

/**
 * RetentionPolicyManifest Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetentionPolicyManifest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetentionPolicyManifest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'replica_n' => 'int',
        'duration' => 'int',
        'shard_group_duration' => 'int',
        'shard_groups' => '\InfluxDB2\Model\ShardGroupManifest[]',
        'subscriptions' => '\InfluxDB2\Model\SubscriptionManifest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'replica_n' => 'int32',
        'duration' => 'int64',
        'shard_group_duration' => 'int64',
        'shard_groups' => null,
        'subscriptions' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'replica_n' => 'replicaN',
        'duration' => 'duration',
        'shard_group_duration' => 'shardGroupDuration',
        'shard_groups' => 'shardGroups',
        'subscriptions' => 'subscriptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'replica_n' => 'setReplicaN',
        'duration' => 'setDuration',
        'shard_group_duration' => 'setShardGroupDuration',
        'shard_groups' => 'setShardGroups',
        'subscriptions' => 'setSubscriptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'replica_n' => 'getReplicaN',
        'duration' => 'getDuration',
        'shard_group_duration' => 'getShardGroupDuration',
        'shard_groups' => 'getShardGroups',
        'subscriptions' => 'getSubscriptions'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['replica_n'] = isset($data['replica_n']) ? $data['replica_n'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['shard_group_duration'] = isset($data['shard_group_duration']) ? $data['shard_group_duration'] : null;
        $this->container['shard_groups'] = isset($data['shard_groups']) ? $data['shard_groups'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['replica_n'] === null) {
            $invalidProperties[] = "'replica_n' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['shard_group_duration'] === null) {
            $invalidProperties[] = "'shard_group_duration' can't be null";
        }
        if ($this->container['shard_groups'] === null) {
            $invalidProperties[] = "'shard_groups' can't be null";
        }
        if ($this->container['subscriptions'] === null) {
            $invalidProperties[] = "'subscriptions' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets replica_n
     *
     * @return int
     */
    public function getReplicaN()
    {
        return $this->container['replica_n'];
    }

    /**
     * Sets replica_n
     *
     * @param int $replica_n replica_n
     *
     * @return $this
     */
    public function setReplicaN($replica_n)
    {
        $this->container['replica_n'] = $replica_n;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets shard_group_duration
     *
     * @return int
     */
    public function getShardGroupDuration()
    {
        return $this->container['shard_group_duration'];
    }

    /**
     * Sets shard_group_duration
     *
     * @param int $shard_group_duration shard_group_duration
     *
     * @return $this
     */
    public function setShardGroupDuration($shard_group_duration)
    {
        $this->container['shard_group_duration'] = $shard_group_duration;

        return $this;
    }

    /**
     * Gets shard_groups
     *
     * @return \InfluxDB2\Model\ShardGroupManifest[]
     */
    public function getShardGroups()
    {
        return $this->container['shard_groups'];
    }

    /**
     * Sets shard_groups
     *
     * @param \InfluxDB2\Model\ShardGroupManifest[] $shard_groups shard_groups
     *
     * @return $this
     */
    public function setShardGroups($shard_groups)
    {
        $this->container['shard_groups'] = $shard_groups;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return \InfluxDB2\Model\SubscriptionManifest[]
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param \InfluxDB2\Model\SubscriptionManifest[] $subscriptions subscriptions
     *
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

