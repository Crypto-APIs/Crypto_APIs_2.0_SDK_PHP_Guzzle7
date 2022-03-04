<?php
/**
 * GetBlockDetailsByBlockHashRIBS
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
 * GetBlockDetailsByBlockHashRIBS Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetBlockDetailsByBlockHashRIBS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockDetailsByBlockHashRIBS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'difficulty' => 'string',
        'nonce' => 'string',
        'size' => 'int',
        'bits' => 'string',
        'chainwork' => 'string',
        'merkle_root' => 'string',
        'stripped_size' => 'int',
        'version' => 'int',
        'version_hex' => 'string',
        'weight' => 'int',
        'extra_data' => 'string',
        'gas_limit' => 'string',
        'gas_used' => 'string',
        'mined_in_seconds' => 'int',
        'sha3_uncles' => 'string',
        'total_difficulty' => 'string',
        'uncles' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'difficulty' => null,
        'nonce' => null,
        'size' => null,
        'bits' => null,
        'chainwork' => null,
        'merkle_root' => null,
        'stripped_size' => null,
        'version' => null,
        'version_hex' => null,
        'weight' => null,
        'extra_data' => null,
        'gas_limit' => null,
        'gas_used' => null,
        'mined_in_seconds' => null,
        'sha3_uncles' => null,
        'total_difficulty' => null,
        'uncles' => null
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
        'difficulty' => 'difficulty',
        'nonce' => 'nonce',
        'size' => 'size',
        'bits' => 'bits',
        'chainwork' => 'chainwork',
        'merkle_root' => 'merkleRoot',
        'stripped_size' => 'strippedSize',
        'version' => 'version',
        'version_hex' => 'versionHex',
        'weight' => 'weight',
        'extra_data' => 'extraData',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'mined_in_seconds' => 'minedInSeconds',
        'sha3_uncles' => 'sha3Uncles',
        'total_difficulty' => 'totalDifficulty',
        'uncles' => 'uncles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'difficulty' => 'setDifficulty',
        'nonce' => 'setNonce',
        'size' => 'setSize',
        'bits' => 'setBits',
        'chainwork' => 'setChainwork',
        'merkle_root' => 'setMerkleRoot',
        'stripped_size' => 'setStrippedSize',
        'version' => 'setVersion',
        'version_hex' => 'setVersionHex',
        'weight' => 'setWeight',
        'extra_data' => 'setExtraData',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'mined_in_seconds' => 'setMinedInSeconds',
        'sha3_uncles' => 'setSha3Uncles',
        'total_difficulty' => 'setTotalDifficulty',
        'uncles' => 'setUncles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'difficulty' => 'getDifficulty',
        'nonce' => 'getNonce',
        'size' => 'getSize',
        'bits' => 'getBits',
        'chainwork' => 'getChainwork',
        'merkle_root' => 'getMerkleRoot',
        'stripped_size' => 'getStrippedSize',
        'version' => 'getVersion',
        'version_hex' => 'getVersionHex',
        'weight' => 'getWeight',
        'extra_data' => 'getExtraData',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'mined_in_seconds' => 'getMinedInSeconds',
        'sha3_uncles' => 'getSha3Uncles',
        'total_difficulty' => 'getTotalDifficulty',
        'uncles' => 'getUncles'
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
        $this->container['difficulty'] = $data['difficulty'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['bits'] = $data['bits'] ?? null;
        $this->container['chainwork'] = $data['chainwork'] ?? null;
        $this->container['merkle_root'] = $data['merkle_root'] ?? null;
        $this->container['stripped_size'] = $data['stripped_size'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['version_hex'] = $data['version_hex'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['extra_data'] = $data['extra_data'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['mined_in_seconds'] = $data['mined_in_seconds'] ?? null;
        $this->container['sha3_uncles'] = $data['sha3_uncles'] ?? null;
        $this->container['total_difficulty'] = $data['total_difficulty'] ?? null;
        $this->container['uncles'] = $data['uncles'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['difficulty'] === null) {
            $invalidProperties[] = "'difficulty' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['bits'] === null) {
            $invalidProperties[] = "'bits' can't be null";
        }
        if ($this->container['chainwork'] === null) {
            $invalidProperties[] = "'chainwork' can't be null";
        }
        if ($this->container['merkle_root'] === null) {
            $invalidProperties[] = "'merkle_root' can't be null";
        }
        if ($this->container['stripped_size'] === null) {
            $invalidProperties[] = "'stripped_size' can't be null";
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
        if ($this->container['extra_data'] === null) {
            $invalidProperties[] = "'extra_data' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['mined_in_seconds'] === null) {
            $invalidProperties[] = "'mined_in_seconds' can't be null";
        }
        if ($this->container['sha3_uncles'] === null) {
            $invalidProperties[] = "'sha3_uncles' can't be null";
        }
        if ($this->container['total_difficulty'] === null) {
            $invalidProperties[] = "'total_difficulty' can't be null";
        }
        if ($this->container['uncles'] === null) {
            $invalidProperties[] = "'uncles' can't be null";
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
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce Represents a random value that can be adjusted to satisfy the Proof of Work.
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
     * @param string $bits Represents a specific sub-unit of Zcash. Bits have two-decimal precision
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
     * Gets stripped_size
     *
     * @return int
     */
    public function getStrippedSize()
    {
        return $this->container['stripped_size'];
    }

    /**
     * Sets stripped_size
     *
     * @param int $stripped_size Defines the numeric representation of the block size excluding the witness data.
     *
     * @return self
     */
    public function setStrippedSize($stripped_size)
    {
        $this->container['stripped_size'] = $stripped_size;

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
     * @param int $version Represents the block version number.
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
     * Gets extra_data
     *
     * @return string
     */
    public function getExtraData()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param string $extra_data Represents any data that can be included by the miner in the block.
     *
     * @return self
     */
    public function setExtraData($extra_data)
    {
        $this->container['extra_data'] = $extra_data;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return string
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param string $gas_limit Defines the total gas limit of all transactions in the block.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return string
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param string $gas_used Represents the total amount of gas used by all transactions in this block.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets mined_in_seconds
     *
     * @return int
     */
    public function getMinedInSeconds()
    {
        return $this->container['mined_in_seconds'];
    }

    /**
     * Sets mined_in_seconds
     *
     * @param int $mined_in_seconds Specifies the amount of time required for the block to be mined in seconds.
     *
     * @return self
     */
    public function setMinedInSeconds($mined_in_seconds)
    {
        $this->container['mined_in_seconds'] = $mined_in_seconds;

        return $this;
    }

    /**
     * Gets sha3_uncles
     *
     * @return string
     */
    public function getSha3Uncles()
    {
        return $this->container['sha3_uncles'];
    }

    /**
     * Sets sha3_uncles
     *
     * @param string $sha3_uncles Defines the combined hash of all uncles for a given paren
     *
     * @return self
     */
    public function setSha3Uncles($sha3_uncles)
    {
        $this->container['sha3_uncles'] = $sha3_uncles;

        return $this;
    }

    /**
     * Gets total_difficulty
     *
     * @return string
     */
    public function getTotalDifficulty()
    {
        return $this->container['total_difficulty'];
    }

    /**
     * Sets total_difficulty
     *
     * @param string $total_difficulty Defines the total difficulty of the chain until this block, i.e. how difficult it is for a specific miner to mine a new block.
     *
     * @return self
     */
    public function setTotalDifficulty($total_difficulty)
    {
        $this->container['total_difficulty'] = $total_difficulty;

        return $this;
    }

    /**
     * Gets uncles
     *
     * @return string[]
     */
    public function getUncles()
    {
        return $this->container['uncles'];
    }

    /**
     * Sets uncles
     *
     * @param string[] $uncles uncles
     *
     * @return self
     */
    public function setUncles($uncles)
    {
        $this->container['uncles'] = $uncles;

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


