<?php
/**
 * GetTransactionDetailsByTransactionIDRIBSZVJoinSplitInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2021-03-20
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
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
 * GetTransactionDetailsByTransactionIDRIBSZVJoinSplitInner Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetTransactionDetailsByTransactionIDRIBSZVJoinSplitInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionDetailsByTransactionIDRIBSZ_vJoinSplit_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'anchor' => 'string',
        'cipher_texts' => 'string[]',
        'commitments' => 'string[]',
        'macs' => 'string[]',
        'nullifiers' => 'string[]',
        'one_time_pub_key' => 'string',
        'proof' => 'string',
        'random_seed' => 'string',
        'v_pub_new' => 'string',
        'v_pub_old' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'anchor' => null,
        'cipher_texts' => null,
        'commitments' => null,
        'macs' => null,
        'nullifiers' => null,
        'one_time_pub_key' => null,
        'proof' => null,
        'random_seed' => null,
        'v_pub_new' => null,
        'v_pub_old' => null
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
        'anchor' => 'anchor',
        'cipher_texts' => 'cipherTexts',
        'commitments' => 'commitments',
        'macs' => 'macs',
        'nullifiers' => 'nullifiers',
        'one_time_pub_key' => 'oneTimePubKey',
        'proof' => 'proof',
        'random_seed' => 'randomSeed',
        'v_pub_new' => 'vPubNew',
        'v_pub_old' => 'vPubOld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anchor' => 'setAnchor',
        'cipher_texts' => 'setCipherTexts',
        'commitments' => 'setCommitments',
        'macs' => 'setMacs',
        'nullifiers' => 'setNullifiers',
        'one_time_pub_key' => 'setOneTimePubKey',
        'proof' => 'setProof',
        'random_seed' => 'setRandomSeed',
        'v_pub_new' => 'setVPubNew',
        'v_pub_old' => 'setVPubOld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anchor' => 'getAnchor',
        'cipher_texts' => 'getCipherTexts',
        'commitments' => 'getCommitments',
        'macs' => 'getMacs',
        'nullifiers' => 'getNullifiers',
        'one_time_pub_key' => 'getOneTimePubKey',
        'proof' => 'getProof',
        'random_seed' => 'getRandomSeed',
        'v_pub_new' => 'getVPubNew',
        'v_pub_old' => 'getVPubOld'
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
        $this->container['anchor'] = $data['anchor'] ?? null;
        $this->container['cipher_texts'] = $data['cipher_texts'] ?? null;
        $this->container['commitments'] = $data['commitments'] ?? null;
        $this->container['macs'] = $data['macs'] ?? null;
        $this->container['nullifiers'] = $data['nullifiers'] ?? null;
        $this->container['one_time_pub_key'] = $data['one_time_pub_key'] ?? null;
        $this->container['proof'] = $data['proof'] ?? null;
        $this->container['random_seed'] = $data['random_seed'] ?? null;
        $this->container['v_pub_new'] = $data['v_pub_new'] ?? null;
        $this->container['v_pub_old'] = $data['v_pub_old'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['anchor'] === null) {
            $invalidProperties[] = "'anchor' can't be null";
        }
        if ($this->container['cipher_texts'] === null) {
            $invalidProperties[] = "'cipher_texts' can't be null";
        }
        if ($this->container['commitments'] === null) {
            $invalidProperties[] = "'commitments' can't be null";
        }
        if ($this->container['macs'] === null) {
            $invalidProperties[] = "'macs' can't be null";
        }
        if ($this->container['nullifiers'] === null) {
            $invalidProperties[] = "'nullifiers' can't be null";
        }
        if ($this->container['one_time_pub_key'] === null) {
            $invalidProperties[] = "'one_time_pub_key' can't be null";
        }
        if ($this->container['proof'] === null) {
            $invalidProperties[] = "'proof' can't be null";
        }
        if ($this->container['random_seed'] === null) {
            $invalidProperties[] = "'random_seed' can't be null";
        }
        if ($this->container['v_pub_new'] === null) {
            $invalidProperties[] = "'v_pub_new' can't be null";
        }
        if ($this->container['v_pub_old'] === null) {
            $invalidProperties[] = "'v_pub_old' can't be null";
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
     * Gets anchor
     *
     * @return string
     */
    public function getAnchor()
    {
        return $this->container['anchor'];
    }

    /**
     * Sets anchor
     *
     * @param string $anchor Defines a Merkle tree root of a note commitment tree which uniquely identifies a note commitment tree state given the assumed security properties of the Merkle tree’s  hash function.
     *
     * @return self
     */
    public function setAnchor($anchor)
    {
        $this->container['anchor'] = $anchor;

        return $this;
    }

    /**
     * Gets cipher_texts
     *
     * @return string[]
     */
    public function getCipherTexts()
    {
        return $this->container['cipher_texts'];
    }

    /**
     * Sets cipher_texts
     *
     * @param string[] $cipher_texts cipher_texts
     *
     * @return self
     */
    public function setCipherTexts($cipher_texts)
    {
        $this->container['cipher_texts'] = $cipher_texts;

        return $this;
    }

    /**
     * Gets commitments
     *
     * @return string[]
     */
    public function getCommitments()
    {
        return $this->container['commitments'];
    }

    /**
     * Sets commitments
     *
     * @param string[] $commitments commitments
     *
     * @return self
     */
    public function setCommitments($commitments)
    {
        $this->container['commitments'] = $commitments;

        return $this;
    }

    /**
     * Gets macs
     *
     * @return string[]
     */
    public function getMacs()
    {
        return $this->container['macs'];
    }

    /**
     * Sets macs
     *
     * @param string[] $macs macs
     *
     * @return self
     */
    public function setMacs($macs)
    {
        $this->container['macs'] = $macs;

        return $this;
    }

    /**
     * Gets nullifiers
     *
     * @return string[]
     */
    public function getNullifiers()
    {
        return $this->container['nullifiers'];
    }

    /**
     * Sets nullifiers
     *
     * @param string[] $nullifiers nullifiers
     *
     * @return self
     */
    public function setNullifiers($nullifiers)
    {
        $this->container['nullifiers'] = $nullifiers;

        return $this;
    }

    /**
     * Gets one_time_pub_key
     *
     * @return string
     */
    public function getOneTimePubKey()
    {
        return $this->container['one_time_pub_key'];
    }

    /**
     * Sets one_time_pub_key
     *
     * @param string $one_time_pub_key Defines the one time public key.
     *
     * @return self
     */
    public function setOneTimePubKey($one_time_pub_key)
    {
        $this->container['one_time_pub_key'] = $one_time_pub_key;

        return $this;
    }

    /**
     * Gets proof
     *
     * @return string
     */
    public function getProof()
    {
        return $this->container['proof'];
    }

    /**
     * Sets proof
     *
     * @param string $proof Defines the proof.
     *
     * @return self
     */
    public function setProof($proof)
    {
        $this->container['proof'] = $proof;

        return $this;
    }

    /**
     * Gets random_seed
     *
     * @return string
     */
    public function getRandomSeed()
    {
        return $this->container['random_seed'];
    }

    /**
     * Sets random_seed
     *
     * @param string $random_seed Represents a 256-bit seed that must be chosen independently at random for each JoinSplit description.
     *
     * @return self
     */
    public function setRandomSeed($random_seed)
    {
        $this->container['random_seed'] = $random_seed;

        return $this;
    }

    /**
     * Gets v_pub_new
     *
     * @return string
     */
    public function getVPubNew()
    {
        return $this->container['v_pub_new'];
    }

    /**
     * Sets v_pub_new
     *
     * @param string $v_pub_new Defines the value that the joinSplit transfer will insert into the transparent transaction value pool
     *
     * @return self
     */
    public function setVPubNew($v_pub_new)
    {
        $this->container['v_pub_new'] = $v_pub_new;

        return $this;
    }

    /**
     * Gets v_pub_old
     *
     * @return string
     */
    public function getVPubOld()
    {
        return $this->container['v_pub_old'];
    }

    /**
     * Sets v_pub_old
     *
     * @param string $v_pub_old Defines the value that the joinSplit transfer will remove from the transparent transaction value pool.
     *
     * @return self
     */
    public function setVPubOld($v_pub_old)
    {
        $this->container['v_pub_old'] = $v_pub_old;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


