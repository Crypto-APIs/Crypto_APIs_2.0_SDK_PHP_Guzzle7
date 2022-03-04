<?php
/**
 * AddressTokensTransactionUnconfirmedDataItem
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
 * AddressTokensTransactionUnconfirmedDataItem Class Doc Comment
 *
 * @category Class
 * @description Defines an &#x60;item&#x60; as one result.
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddressTokensTransactionUnconfirmedDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressTokensTransactionUnconfirmed_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockchain' => 'string',
        'network' => 'string',
        'address' => 'string',
        'transaction_id' => 'string',
        'token_type' => 'string',
        'token' => '\CryptoAPIs\Model\AddressTokensTransactionUnconfirmedToken',
        'direction' => 'string',
        'first_seen_in_mempool_timestamp' => 'int'
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
        'network' => null,
        'address' => null,
        'transaction_id' => null,
        'token_type' => null,
        'token' => null,
        'direction' => null,
        'first_seen_in_mempool_timestamp' => null
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
        'network' => 'network',
        'address' => 'address',
        'transaction_id' => 'transactionId',
        'token_type' => 'tokenType',
        'token' => 'token',
        'direction' => 'direction',
        'first_seen_in_mempool_timestamp' => 'firstSeenInMempoolTimestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockchain' => 'setBlockchain',
        'network' => 'setNetwork',
        'address' => 'setAddress',
        'transaction_id' => 'setTransactionId',
        'token_type' => 'setTokenType',
        'token' => 'setToken',
        'direction' => 'setDirection',
        'first_seen_in_mempool_timestamp' => 'setFirstSeenInMempoolTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockchain' => 'getBlockchain',
        'network' => 'getNetwork',
        'address' => 'getAddress',
        'transaction_id' => 'getTransactionId',
        'token_type' => 'getTokenType',
        'token' => 'getToken',
        'direction' => 'getDirection',
        'first_seen_in_mempool_timestamp' => 'getFirstSeenInMempoolTimestamp'
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

    const TOKEN_TYPE_ERC_20 = 'ERC-20';
    const TOKEN_TYPE_ERC_721 = 'ERC-721';
    const TOKEN_TYPE_OMNI = 'OMNI';
    const DIRECTION_INCOMING = 'incoming';
    const DIRECTION_OUTGOING = 'outgoing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTokenTypeAllowableValues()
    {
        return [
            self::TOKEN_TYPE_ERC_20,
            self::TOKEN_TYPE_ERC_721,
            self::TOKEN_TYPE_OMNI,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INCOMING,
            self::DIRECTION_OUTGOING,
        ];
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
        $this->container['network'] = $data['network'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['token_type'] = $data['token_type'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['direction'] = $data['direction'] ?? null;
        $this->container['first_seen_in_mempool_timestamp'] = $data['first_seen_in_mempool_timestamp'] ?? null;
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
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['token_type'] === null) {
            $invalidProperties[] = "'token_type' can't be null";
        }
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!is_null($this->container['token_type']) && !in_array($this->container['token_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'token_type', must be one of '%s'",
                $this->container['token_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['first_seen_in_mempool_timestamp'] === null) {
            $invalidProperties[] = "'first_seen_in_mempool_timestamp' can't be null";
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
     * @param string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\", \"rinkeby\" are test networks.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Defines the specific address to which the token transaction has been sent and is pending confirmation.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Defines the unique ID of the specific transaction, i.e. its identification number.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type Defines the type of token sent with the transaction, e.g. ERC 20.
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!in_array($token_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'token_type', must be one of '%s'",
                    $token_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return \CryptoAPIs\Model\AddressTokensTransactionUnconfirmedToken
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \CryptoAPIs\Model\AddressTokensTransactionUnconfirmedToken $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Defines whether the transaction is \"incoming\" or \"outgoing\".
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direction', must be one of '%s'",
                    $direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets first_seen_in_mempool_timestamp
     *
     * @return int
     */
    public function getFirstSeenInMempoolTimestamp()
    {
        return $this->container['first_seen_in_mempool_timestamp'];
    }

    /**
     * Sets first_seen_in_mempool_timestamp
     *
     * @param int $first_seen_in_mempool_timestamp Defines the exact time the transaction has been first accepted into the mempool to await confirmation as timestamp.
     *
     * @return self
     */
    public function setFirstSeenInMempoolTimestamp($first_seen_in_mempool_timestamp)
    {
        $this->container['first_seen_in_mempool_timestamp'] = $first_seen_in_mempool_timestamp;

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


