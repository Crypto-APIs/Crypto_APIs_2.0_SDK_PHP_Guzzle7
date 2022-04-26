<?php
/**
 * GetOmniTransactionDetailsByTransactionIDTxidRI
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
 * GetOmniTransactionDetailsByTransactionIDTxidRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetOmniTransactionDetailsByTransactionIDTxidRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetOmniTransactionDetailsByTransactionIDTxidRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'divisible' => 'bool',
        'mined_in_block_hash' => 'string',
        'mined_in_block_height' => 'int',
        'property_id' => 'int',
        'recipients' => '\CryptoAPIs\Model\ListOmniTransactionsByAddressRIRecipients[]',
        'senders' => '\CryptoAPIs\Model\GetOmniTransactionDetailsByTransactionIDTxidRISenders[]',
        'timestamp' => 'int',
        'transaction_id' => 'string',
        'type' => 'string',
        'type_int' => 'int',
        'valid' => 'bool',
        'version' => 'int',
        'fee' => '\CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByAddressRIFee'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'divisible' => null,
        'mined_in_block_hash' => null,
        'mined_in_block_height' => null,
        'property_id' => null,
        'recipients' => null,
        'senders' => null,
        'timestamp' => null,
        'transaction_id' => null,
        'type' => null,
        'type_int' => null,
        'valid' => null,
        'version' => null,
        'fee' => null
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
        'amount' => 'amount',
        'divisible' => 'divisible',
        'mined_in_block_hash' => 'minedInBlockHash',
        'mined_in_block_height' => 'minedInBlockHeight',
        'property_id' => 'propertyId',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'timestamp' => 'timestamp',
        'transaction_id' => 'transactionId',
        'type' => 'type',
        'type_int' => 'typeInt',
        'valid' => 'valid',
        'version' => 'version',
        'fee' => 'fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'divisible' => 'setDivisible',
        'mined_in_block_hash' => 'setMinedInBlockHash',
        'mined_in_block_height' => 'setMinedInBlockHeight',
        'property_id' => 'setPropertyId',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'timestamp' => 'setTimestamp',
        'transaction_id' => 'setTransactionId',
        'type' => 'setType',
        'type_int' => 'setTypeInt',
        'valid' => 'setValid',
        'version' => 'setVersion',
        'fee' => 'setFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'divisible' => 'getDivisible',
        'mined_in_block_hash' => 'getMinedInBlockHash',
        'mined_in_block_height' => 'getMinedInBlockHeight',
        'property_id' => 'getPropertyId',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'timestamp' => 'getTimestamp',
        'transaction_id' => 'getTransactionId',
        'type' => 'getType',
        'type_int' => 'getTypeInt',
        'valid' => 'getValid',
        'version' => 'getVersion',
        'fee' => 'getFee'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['divisible'] = $data['divisible'] ?? null;
        $this->container['mined_in_block_hash'] = $data['mined_in_block_hash'] ?? null;
        $this->container['mined_in_block_height'] = $data['mined_in_block_height'] ?? null;
        $this->container['property_id'] = $data['property_id'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['senders'] = $data['senders'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['type_int'] = $data['type_int'] ?? null;
        $this->container['valid'] = $data['valid'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['divisible'] === null) {
            $invalidProperties[] = "'divisible' can't be null";
        }
        if ($this->container['mined_in_block_hash'] === null) {
            $invalidProperties[] = "'mined_in_block_hash' can't be null";
        }
        if ($this->container['mined_in_block_height'] === null) {
            $invalidProperties[] = "'mined_in_block_height' can't be null";
        }
        if ($this->container['property_id'] === null) {
            $invalidProperties[] = "'property_id' can't be null";
        }
        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['senders'] === null) {
            $invalidProperties[] = "'senders' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['type_int'] === null) {
            $invalidProperties[] = "'type_int' can't be null";
        }
        if ($this->container['valid'] === null) {
            $invalidProperties[] = "'valid' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Defines the amount of the sent tokens.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets divisible
     *
     * @return bool
     */
    public function getDivisible()
    {
        return $this->container['divisible'];
    }

    /**
     * Sets divisible
     *
     * @param bool $divisible Defines whether the attribute can be divisible or not, as boolean. E.g., if it is \"true\", the attribute is divisible.
     *
     * @return self
     */
    public function setDivisible($divisible)
    {
        $this->container['divisible'] = $divisible;

        return $this;
    }

    /**
     * Gets mined_in_block_hash
     *
     * @return string
     */
    public function getMinedInBlockHash()
    {
        return $this->container['mined_in_block_hash'];
    }

    /**
     * Sets mined_in_block_hash
     *
     * @param string $mined_in_block_hash Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setMinedInBlockHash($mined_in_block_hash)
    {
        $this->container['mined_in_block_hash'] = $mined_in_block_hash;

        return $this;
    }

    /**
     * Gets mined_in_block_height
     *
     * @return int
     */
    public function getMinedInBlockHeight()
    {
        return $this->container['mined_in_block_height'];
    }

    /**
     * Sets mined_in_block_height
     *
     * @param int $mined_in_block_height Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block.
     *
     * @return self
     */
    public function setMinedInBlockHeight($mined_in_block_height)
    {
        $this->container['mined_in_block_height'] = $mined_in_block_height;

        return $this;
    }

    /**
     * Gets property_id
     *
     * @return int
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int $property_id Represents the identifier of the tokens to send.
     *
     * @return self
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \CryptoAPIs\Model\ListOmniTransactionsByAddressRIRecipients[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \CryptoAPIs\Model\ListOmniTransactionsByAddressRIRecipients[] $recipients Represents an object of addresses that receive the transactions.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets senders
     *
     * @return \CryptoAPIs\Model\GetOmniTransactionDetailsByTransactionIDTxidRISenders[]
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \CryptoAPIs\Model\GetOmniTransactionDetailsByTransactionIDTxidRISenders[] $senders Represents an object of addresses that provide the funds.
     *
     * @return self
     */
    public function setSenders($senders)
    {
        $this->container['senders'] = $senders;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * @param string $transaction_id Represents the unique identifier of a transaction, i.e. it could be `transactionId` in UTXO-based protocols like Bitcoin, and transaction `hash` in Ethereum blockchain.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Defines the type of the transaction as a string.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_int
     *
     * @return int
     */
    public function getTypeInt()
    {
        return $this->container['type_int'];
    }

    /**
     * Sets type_int
     *
     * @param int $type_int Defines the type of the transaction as a number.
     *
     * @return self
     */
    public function setTypeInt($type_int)
    {
        $this->container['type_int'] = $type_int;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool $valid Defines whether the transaction is valid or not, as boolean. E.g. if set to \"true\", it means the transaction is valid.
     *
     * @return self
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

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
     * @param int $version Defines the specific version.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByAddressRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByAddressRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

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


