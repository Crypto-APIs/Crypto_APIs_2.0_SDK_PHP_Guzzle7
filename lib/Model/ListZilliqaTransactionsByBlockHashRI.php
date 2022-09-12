<?php
/**
 * ListZilliqaTransactionsByBlockHashRI
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
 * ListZilliqaTransactionsByBlockHashRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListZilliqaTransactionsByBlockHashRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListZilliqaTransactionsByBlockHashRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fee' => '\CryptoAPIs\Model\GetZilliqaTransactionDetailsByTransactionIDRIFee',
        'gas_limit' => 'int',
        'gas_price' => 'int',
        'gas_used' => 'int',
        'mined_in_block_height' => 'int',
        'nonce' => 'int',
        'recipients' => '\CryptoAPIs\Model\ListZilliqaTransactionsByAddressRIRecipientsInner[]',
        'senders' => '\CryptoAPIs\Model\ListZilliqaTransactionsByAddressRISendersInner[]',
        'timestamp' => 'int',
        'transaction_hash' => 'string',
        'transaction_index' => 'int',
        'transaction_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fee' => null,
        'gas_limit' => null,
        'gas_price' => null,
        'gas_used' => null,
        'mined_in_block_height' => null,
        'nonce' => null,
        'recipients' => null,
        'senders' => null,
        'timestamp' => null,
        'transaction_hash' => null,
        'transaction_index' => null,
        'transaction_status' => null
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
        'fee' => 'fee',
        'gas_limit' => 'gasLimit',
        'gas_price' => 'gasPrice',
        'gas_used' => 'gasUsed',
        'mined_in_block_height' => 'minedInBlockHeight',
        'nonce' => 'nonce',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'timestamp' => 'timestamp',
        'transaction_hash' => 'transactionHash',
        'transaction_index' => 'transactionIndex',
        'transaction_status' => 'transactionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fee' => 'setFee',
        'gas_limit' => 'setGasLimit',
        'gas_price' => 'setGasPrice',
        'gas_used' => 'setGasUsed',
        'mined_in_block_height' => 'setMinedInBlockHeight',
        'nonce' => 'setNonce',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'timestamp' => 'setTimestamp',
        'transaction_hash' => 'setTransactionHash',
        'transaction_index' => 'setTransactionIndex',
        'transaction_status' => 'setTransactionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fee' => 'getFee',
        'gas_limit' => 'getGasLimit',
        'gas_price' => 'getGasPrice',
        'gas_used' => 'getGasUsed',
        'mined_in_block_height' => 'getMinedInBlockHeight',
        'nonce' => 'getNonce',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'timestamp' => 'getTimestamp',
        'transaction_hash' => 'getTransactionHash',
        'transaction_index' => 'getTransactionIndex',
        'transaction_status' => 'getTransactionStatus'
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
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['mined_in_block_height'] = $data['mined_in_block_height'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['senders'] = $data['senders'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['transaction_index'] = $data['transaction_index'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_price'] === null) {
            $invalidProperties[] = "'gas_price' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['mined_in_block_height'] === null) {
            $invalidProperties[] = "'mined_in_block_height' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
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
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['transaction_index'] === null) {
            $invalidProperties[] = "'transaction_index' can't be null";
        }
        if ($this->container['transaction_status'] === null) {
            $invalidProperties[] = "'transaction_status' can't be null";
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
     * Gets fee
     *
     * @return \CryptoAPIs\Model\GetZilliqaTransactionDetailsByTransactionIDRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \CryptoAPIs\Model\GetZilliqaTransactionDetailsByTransactionIDRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return int
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param int $gas_limit Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return int
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param int $gas_price Defines the price of the gas.
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return int
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param int $gas_used Defines how much of the gas for the block has been used.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

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
     * @param int $mined_in_block_height Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
     *
     * @return self
     */
    public function setMinedInBlockHeight($mined_in_block_height)
    {
        $this->container['mined_in_block_height'] = $mined_in_block_height;

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
     * @param int $nonce Represents a random value that can be adjusted to satisfy the Proof of Work.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \CryptoAPIs\Model\ListZilliqaTransactionsByAddressRIRecipientsInner[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \CryptoAPIs\Model\ListZilliqaTransactionsByAddressRIRecipientsInner[] $recipients Defines an object array of the transaction recipients.
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
     * @return \CryptoAPIs\Model\ListZilliqaTransactionsByAddressRISendersInner[]
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \CryptoAPIs\Model\ListZilliqaTransactionsByAddressRISendersInner[] $senders Represents an object of addresses that provide the funds.
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
     * @param int $timestamp Defines the exact date/time when this block was mined in Unix Timestamp.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string $transaction_hash Represents the hash of the transaction, which is its unique identifier.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets transaction_index
     *
     * @return int
     */
    public function getTransactionIndex()
    {
        return $this->container['transaction_index'];
    }

    /**
     * Sets transaction_index
     *
     * @param int $transaction_index Defines the numeric representation of the transaction index.
     *
     * @return self
     */
    public function setTransactionIndex($transaction_index)
    {
        $this->container['transaction_index'] = $transaction_index;

        return $this;
    }

    /**
     * Gets transaction_status
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     *
     * @param string $transaction_status Defines the status of the transaction, whether it is e.g. pending or complete.
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

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


