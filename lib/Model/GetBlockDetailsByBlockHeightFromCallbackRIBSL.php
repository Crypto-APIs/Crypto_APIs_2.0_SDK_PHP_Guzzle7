<?php
/**
 * GetBlockDetailsByBlockHeightFromCallbackRIBSL
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetBlockDetailsByBlockHeightFromCallbackRIBSL Class Doc Comment
 *
 * @category Class
 * @description Litecoin
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetBlockDetailsByBlockHeightFromCallbackRIBSL implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockDetailsByBlockHeightFromCallbackRIBSL';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bits' => 'string',
        'chainwork' => 'string',
        'difficulty' => 'string',
        'merkle_root' => 'string',
        'nonce' => 'int',
        'size' => 'int',
        'strippedsize' => 'int',
        'version' => 'int',
        'version_hex' => 'string',
        'weight' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bits' => null,
        'chainwork' => null,
        'difficulty' => null,
        'merkle_root' => null,
        'nonce' => null,
        'size' => null,
        'strippedsize' => null,
        'version' => null,
        'version_hex' => null,
        'weight' => null
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
        'bits' => 'bits',
        'chainwork' => 'chainwork',
        'difficulty' => 'difficulty',
        'merkle_root' => 'merkleRoot',
        'nonce' => 'nonce',
        'size' => 'size',
        'strippedsize' => 'strippedsize',
        'version' => 'version',
        'version_hex' => 'versionHex',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bits' => 'setBits',
        'chainwork' => 'setChainwork',
        'difficulty' => 'setDifficulty',
        'merkle_root' => 'setMerkleRoot',
        'nonce' => 'setNonce',
        'size' => 'setSize',
        'strippedsize' => 'setStrippedsize',
        'version' => 'setVersion',
        'version_hex' => 'setVersionHex',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bits' => 'getBits',
        'chainwork' => 'getChainwork',
        'difficulty' => 'getDifficulty',
        'merkle_root' => 'getMerkleRoot',
        'nonce' => 'getNonce',
        'size' => 'getSize',
        'strippedsize' => 'getStrippedsize',
        'version' => 'getVersion',
        'version_hex' => 'getVersionHex',
        'weight' => 'getWeight'
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
        $this->container['bits'] = $data['bits'] ?? null;
        $this->container['chainwork'] = $data['chainwork'] ?? null;
        $this->container['difficulty'] = $data['difficulty'] ?? null;
        $this->container['merkle_root'] = $data['merkle_root'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['strippedsize'] = $data['strippedsize'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['version_hex'] = $data['version_hex'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bits'] === null) {
            $invalidProperties[] = "'bits' can't be null";
        }
        if ($this->container['chainwork'] === null) {
            $invalidProperties[] = "'chainwork' can't be null";
        }
        if ($this->container['difficulty'] === null) {
            $invalidProperties[] = "'difficulty' can't be null";
        }
        if ($this->container['merkle_root'] === null) {
            $invalidProperties[] = "'merkle_root' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['strippedsize'] === null) {
            $invalidProperties[] = "'strippedsize' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['version_hex'] === null) {
            $invalidProperties[] = "'version_hex' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
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
     * Gets bits
     *
     * @return string
     */
    public function getBits()
    {
        return $this->container['bits'];
    }

    /**
     * Sets bits
     *
     * @param string $bits Represents a specific sub-unit of Litecoin. Bits have two-decimal precision.
     *
     * @return self
     */
    public function setBits($bits)
    {
        $this->container['bits'] = $bits;

        return $this;
    }

    /**
     * Gets chainwork
     *
     * @return string
     */
    public function getChainwork()
    {
        return $this->container['chainwork'];
    }

    /**
     * Sets chainwork
     *
     * @param string $chainwork Represents a hexadecimal number of all the hashes necessary to produce the current chain. E.g., when converting 0000000000000000000000000000000000000000000086859f7a841475b236fd to a decimal you get 635262017308958427068157 hashes, or 635262 exahashes.
     *
     * @return self
     */
    public function setChainwork($chainwork)
    {
        $this->container['chainwork'] = $chainwork;

        return $this;
    }

    /**
     * Gets difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param string $difficulty Represents a mathematical value of how hard it is to find a valid hash for this block.
     *
     * @return self
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets merkle_root
     *
     * @return string
     */
    public function getMerkleRoot()
    {
        return $this->container['merkle_root'];
    }

    /**
     * Sets merkle_root
     *
     * @param string $merkle_root Defines the single and final (root) node of a Merkle tree. It is the combined hash of all transactions' hashes that are part of a blockchain block.
     *
     * @return self
     */
    public function setMerkleRoot($merkle_root)
    {
        $this->container['merkle_root'] = $merkle_root;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int $nonce Represents a random value that can be adjusted to satisfy the proof of work
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Represents the total size of the block in Bytes.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets strippedsize
     *
     * @return int
     */
    public function getStrippedsize()
    {
        return $this->container['strippedsize'];
    }

    /**
     * Sets strippedsize
     *
     * @param int $strippedsize Defines the numeric representation of the block size excluding the witness data.
     *
     * @return self
     */
    public function setStrippedsize($strippedsize)
    {
        $this->container['strippedsize'] = $strippedsize;

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
     * @param int $version Represents the version of the specific block on the blockchain.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets version_hex
     *
     * @return string
     */
    public function getVersionHex()
    {
        return $this->container['version_hex'];
    }

    /**
     * Sets version_hex
     *
     * @param string $version_hex Is the hexadecimal string representation of the block's version.
     *
     * @return self
     */
    public function setVersionHex($version_hex)
    {
        $this->container['version_hex'] = $version_hex;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight Represents a measurement to compare the size of different transactions to each other in proportion to the block size limit.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


