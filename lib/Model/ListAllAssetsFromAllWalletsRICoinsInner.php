<?php
/**
 * ListAllAssetsFromAllWalletsRICoinsInner
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
 * ListAllAssetsFromAllWalletsRICoinsInner Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListAllAssetsFromAllWalletsRICoinsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListAllAssetsFromAllWalletsRI_coins_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockchain' => 'string',
        'confirmed_balance' => 'string',
        'network' => 'string',
        'total_received' => 'string',
        'total_spent' => 'string',
        'unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'blockchain' => null,
        'confirmed_balance' => null,
        'network' => null,
        'total_received' => null,
        'total_spent' => null,
        'unit' => null
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
        'blockchain' => 'blockchain',
        'confirmed_balance' => 'confirmedBalance',
        'network' => 'network',
        'total_received' => 'totalReceived',
        'total_spent' => 'totalSpent',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockchain' => 'setBlockchain',
        'confirmed_balance' => 'setConfirmedBalance',
        'network' => 'setNetwork',
        'total_received' => 'setTotalReceived',
        'total_spent' => 'setTotalSpent',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockchain' => 'getBlockchain',
        'confirmed_balance' => 'getConfirmedBalance',
        'network' => 'getNetwork',
        'total_received' => 'getTotalReceived',
        'total_spent' => 'getTotalSpent',
        'unit' => 'getUnit'
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
        $this->container['blockchain'] = $data['blockchain'] ?? null;
        $this->container['confirmed_balance'] = $data['confirmed_balance'] ?? null;
        $this->container['network'] = $data['network'] ?? null;
        $this->container['total_received'] = $data['total_received'] ?? null;
        $this->container['total_spent'] = $data['total_spent'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['blockchain'] === null) {
            $invalidProperties[] = "'blockchain' can't be null";
        }
        if ($this->container['confirmed_balance'] === null) {
            $invalidProperties[] = "'confirmed_balance' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['total_received'] === null) {
            $invalidProperties[] = "'total_received' can't be null";
        }
        if ($this->container['total_spent'] === null) {
            $invalidProperties[] = "'total_spent' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
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
     * Gets blockchain
     *
     * @return string
     */
    public function getBlockchain()
    {
        return $this->container['blockchain'];
    }

    /**
     * Sets blockchain
     *
     * @param string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
     *
     * @return self
     */
    public function setBlockchain($blockchain)
    {
        $this->container['blockchain'] = $blockchain;

        return $this;
    }

    /**
     * Gets confirmed_balance
     *
     * @return string
     */
    public function getConfirmedBalance()
    {
        return $this->container['confirmed_balance'];
    }

    /**
     * Sets confirmed_balance
     *
     * @param string $confirmed_balance Defines the total balance of the address that is confirmed. It doesn't include unconfirmed transactions.
     *
     * @return self
     */
    public function setConfirmedBalance($confirmed_balance)
    {
        $this->container['confirmed_balance'] = $confirmed_balance;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets total_received
     *
     * @return string
     */
    public function getTotalReceived()
    {
        return $this->container['total_received'];
    }

    /**
     * Sets total_received
     *
     * @param string $total_received Defines the total amount of all coins received to the address, based on confirmed transactions.
     *
     * @return self
     */
    public function setTotalReceived($total_received)
    {
        $this->container['total_received'] = $total_received;

        return $this;
    }

    /**
     * Gets total_spent
     *
     * @return string
     */
    public function getTotalSpent()
    {
        return $this->container['total_spent'];
    }

    /**
     * Sets total_spent
     *
     * @param string $total_spent Defines the total amount of all spent by this address coins, based on confirmed transactions.
     *
     * @return self
     */
    public function setTotalSpent($total_spent)
    {
        $this->container['total_spent'] = $total_spent;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit Represents the unit of the confirmed balance.
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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


