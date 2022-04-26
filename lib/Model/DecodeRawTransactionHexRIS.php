<?php
/**
 * DecodeRawTransactionHexRIS
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
 * DecodeRawTransactionHexRIS Class Doc Comment
 *
 * @category Class
 * @description Represents the specific transaction data according to the blockchain
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DecodeRawTransactionHexRIS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DecodeRawTransactionHexRIS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locktime' => 'int',
        'transaction_hash' => 'string',
        'v_size' => 'int',
        'version' => 'int',
        'vin' => '\CryptoAPIs\Model\DecodeRawTransactionHexRISZVin[]',
        'vout' => '\CryptoAPIs\Model\DecodeRawTransactionHexRISZVout[]',
        'weight' => 'int',
        'approximate_fee' => 'string',
        'approximate_minimum_required_fee' => 'string',
        'gas_limit' => 'string',
        'gas_paid_for_data' => 'string',
        'gas_price' => 'string',
        'input_data' => 'string',
        'max_fee_per_gas' => 'string',
        'max_fee_priority_per_gas' => 'string',
        'nonce' => 'int',
        'r' => 'string',
        'recipient' => 'string',
        's' => 'string',
        'sender' => 'string',
        'type' => 'int',
        'v' => 'string',
        'value' => 'string',
        'expiry_height' => 'int',
        'overwintered' => 'bool',
        'saplinged' => 'bool',
        'value_balance' => 'string',
        'version_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'locktime' => null,
        'transaction_hash' => null,
        'v_size' => null,
        'version' => null,
        'vin' => null,
        'vout' => null,
        'weight' => null,
        'approximate_fee' => null,
        'approximate_minimum_required_fee' => null,
        'gas_limit' => null,
        'gas_paid_for_data' => null,
        'gas_price' => null,
        'input_data' => null,
        'max_fee_per_gas' => null,
        'max_fee_priority_per_gas' => null,
        'nonce' => null,
        'r' => null,
        'recipient' => null,
        's' => null,
        'sender' => null,
        'type' => null,
        'v' => null,
        'value' => null,
        'expiry_height' => null,
        'overwintered' => null,
        'saplinged' => null,
        'value_balance' => null,
        'version_group_id' => null
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
        'locktime' => 'locktime',
        'transaction_hash' => 'transactionHash',
        'v_size' => 'vSize',
        'version' => 'version',
        'vin' => 'vin',
        'vout' => 'vout',
        'weight' => 'weight',
        'approximate_fee' => 'approximateFee',
        'approximate_minimum_required_fee' => 'approximateMinimumRequiredFee',
        'gas_limit' => 'gasLimit',
        'gas_paid_for_data' => 'gasPaidForData',
        'gas_price' => 'gasPrice',
        'input_data' => 'inputData',
        'max_fee_per_gas' => 'maxFeePerGas',
        'max_fee_priority_per_gas' => 'maxFeePriorityPerGas',
        'nonce' => 'nonce',
        'r' => 'r',
        'recipient' => 'recipient',
        's' => 's',
        'sender' => 'sender',
        'type' => 'type',
        'v' => 'v',
        'value' => 'value',
        'expiry_height' => 'expiryHeight',
        'overwintered' => 'overwintered',
        'saplinged' => 'saplinged',
        'value_balance' => 'valueBalance',
        'version_group_id' => 'versionGroupId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locktime' => 'setLocktime',
        'transaction_hash' => 'setTransactionHash',
        'v_size' => 'setVSize',
        'version' => 'setVersion',
        'vin' => 'setVin',
        'vout' => 'setVout',
        'weight' => 'setWeight',
        'approximate_fee' => 'setApproximateFee',
        'approximate_minimum_required_fee' => 'setApproximateMinimumRequiredFee',
        'gas_limit' => 'setGasLimit',
        'gas_paid_for_data' => 'setGasPaidForData',
        'gas_price' => 'setGasPrice',
        'input_data' => 'setInputData',
        'max_fee_per_gas' => 'setMaxFeePerGas',
        'max_fee_priority_per_gas' => 'setMaxFeePriorityPerGas',
        'nonce' => 'setNonce',
        'r' => 'setR',
        'recipient' => 'setRecipient',
        's' => 'setS',
        'sender' => 'setSender',
        'type' => 'setType',
        'v' => 'setV',
        'value' => 'setValue',
        'expiry_height' => 'setExpiryHeight',
        'overwintered' => 'setOverwintered',
        'saplinged' => 'setSaplinged',
        'value_balance' => 'setValueBalance',
        'version_group_id' => 'setVersionGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locktime' => 'getLocktime',
        'transaction_hash' => 'getTransactionHash',
        'v_size' => 'getVSize',
        'version' => 'getVersion',
        'vin' => 'getVin',
        'vout' => 'getVout',
        'weight' => 'getWeight',
        'approximate_fee' => 'getApproximateFee',
        'approximate_minimum_required_fee' => 'getApproximateMinimumRequiredFee',
        'gas_limit' => 'getGasLimit',
        'gas_paid_for_data' => 'getGasPaidForData',
        'gas_price' => 'getGasPrice',
        'input_data' => 'getInputData',
        'max_fee_per_gas' => 'getMaxFeePerGas',
        'max_fee_priority_per_gas' => 'getMaxFeePriorityPerGas',
        'nonce' => 'getNonce',
        'r' => 'getR',
        'recipient' => 'getRecipient',
        's' => 'getS',
        'sender' => 'getSender',
        'type' => 'getType',
        'v' => 'getV',
        'value' => 'getValue',
        'expiry_height' => 'getExpiryHeight',
        'overwintered' => 'getOverwintered',
        'saplinged' => 'getSaplinged',
        'value_balance' => 'getValueBalance',
        'version_group_id' => 'getVersionGroupId'
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
        $this->container['locktime'] = $data['locktime'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['v_size'] = $data['v_size'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['vin'] = $data['vin'] ?? null;
        $this->container['vout'] = $data['vout'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['approximate_fee'] = $data['approximate_fee'] ?? null;
        $this->container['approximate_minimum_required_fee'] = $data['approximate_minimum_required_fee'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_paid_for_data'] = $data['gas_paid_for_data'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['input_data'] = $data['input_data'] ?? null;
        $this->container['max_fee_per_gas'] = $data['max_fee_per_gas'] ?? null;
        $this->container['max_fee_priority_per_gas'] = $data['max_fee_priority_per_gas'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['r'] = $data['r'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['s'] = $data['s'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['v'] = $data['v'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['expiry_height'] = $data['expiry_height'] ?? null;
        $this->container['overwintered'] = $data['overwintered'] ?? null;
        $this->container['saplinged'] = $data['saplinged'] ?? null;
        $this->container['value_balance'] = $data['value_balance'] ?? null;
        $this->container['version_group_id'] = $data['version_group_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locktime'] === null) {
            $invalidProperties[] = "'locktime' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['v_size'] === null) {
            $invalidProperties[] = "'v_size' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['vin'] === null) {
            $invalidProperties[] = "'vin' can't be null";
        }
        if ($this->container['vout'] === null) {
            $invalidProperties[] = "'vout' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['expiry_height'] === null) {
            $invalidProperties[] = "'expiry_height' can't be null";
        }
        if ($this->container['overwintered'] === null) {
            $invalidProperties[] = "'overwintered' can't be null";
        }
        if ($this->container['saplinged'] === null) {
            $invalidProperties[] = "'saplinged' can't be null";
        }
        if ($this->container['value_balance'] === null) {
            $invalidProperties[] = "'value_balance' can't be null";
        }
        if ($this->container['version_group_id'] === null) {
            $invalidProperties[] = "'version_group_id' can't be null";
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
     * Gets locktime
     *
     * @return int
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param int $locktime Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid.
     *
     * @return self
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

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
     * @param string $transaction_hash Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets v_size
     *
     * @return int
     */
    public function getVSize()
    {
        return $this->container['v_size'];
    }

    /**
     * Sets v_size
     *
     * @param int $v_size Represents the virtual size of this transaction.
     *
     * @return self
     */
    public function setVSize($v_size)
    {
        $this->container['v_size'] = $v_size;

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
     * @param int $version Represents the transaction version number.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return \CryptoAPIs\Model\DecodeRawTransactionHexRISZVin[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \CryptoAPIs\Model\DecodeRawTransactionHexRISZVin[] $vin Represents the Inputs of the transaction
     *
     * @return self
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \CryptoAPIs\Model\DecodeRawTransactionHexRISZVout[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \CryptoAPIs\Model\DecodeRawTransactionHexRISZVout[] $vout Represents the Inputs of the transaction
     *
     * @return self
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight Represents the size of a block, measured in weight units and including the segwit discount.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets approximate_fee
     *
     * @return string|null
     */
    public function getApproximateFee()
    {
        return $this->container['approximate_fee'];
    }

    /**
     * Sets approximate_fee
     *
     * @param string|null $approximate_fee Defines the approximate fee value. When isConfirmed is True - Defines the amount of the transaction fee When isConfirmed is False - For ETH-based blockchains this attribute represents the max fee value.
     *
     * @return self
     */
    public function setApproximateFee($approximate_fee)
    {
        $this->container['approximate_fee'] = $approximate_fee;

        return $this;
    }

    /**
     * Gets approximate_minimum_required_fee
     *
     * @return string|null
     */
    public function getApproximateMinimumRequiredFee()
    {
        return $this->container['approximate_minimum_required_fee'];
    }

    /**
     * Sets approximate_minimum_required_fee
     *
     * @param string|null $approximate_minimum_required_fee Defines the approximate minimum fee that is required for the transaction.
     *
     * @return self
     */
    public function setApproximateMinimumRequiredFee($approximate_minimum_required_fee)
    {
        $this->container['approximate_minimum_required_fee'] = $approximate_minimum_required_fee;

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
     * @param string $gas_limit Represents the amount of gas used by this specific transaction alone.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_paid_for_data
     *
     * @return string|null
     */
    public function getGasPaidForData()
    {
        return $this->container['gas_paid_for_data'];
    }

    /**
     * Sets gas_paid_for_data
     *
     * @param string|null $gas_paid_for_data Represents the amount of gas paid for the data in the transaction.
     *
     * @return self
     */
    public function setGasPaidForData($gas_paid_for_data)
    {
        $this->container['gas_paid_for_data'] = $gas_paid_for_data;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return string|null
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param string|null $gas_price Represents the price offered to the miner to purchase this amount of gas.
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets input_data
     *
     * @return string|null
     */
    public function getInputData()
    {
        return $this->container['input_data'];
    }

    /**
     * Sets input_data
     *
     * @param string|null $input_data Represents additional information that is required for the transaction.
     *
     * @return self
     */
    public function setInputData($input_data)
    {
        $this->container['input_data'] = $input_data;

        return $this;
    }

    /**
     * Gets max_fee_per_gas
     *
     * @return string|null
     */
    public function getMaxFeePerGas()
    {
        return $this->container['max_fee_per_gas'];
    }

    /**
     * Sets max_fee_per_gas
     *
     * @param string|null $max_fee_per_gas Defines the maximum amount that customer is willing to pay per unit of gas to get his transaction included in a block.
     *
     * @return self
     */
    public function setMaxFeePerGas($max_fee_per_gas)
    {
        $this->container['max_fee_per_gas'] = $max_fee_per_gas;

        return $this;
    }

    /**
     * Gets max_fee_priority_per_gas
     *
     * @return string|null
     */
    public function getMaxFeePriorityPerGas()
    {
        return $this->container['max_fee_priority_per_gas'];
    }

    /**
     * Sets max_fee_priority_per_gas
     *
     * @param string|null $max_fee_priority_per_gas Represents determined by the user value that is paid directly to miners.
     *
     * @return self
     */
    public function setMaxFeePriorityPerGas($max_fee_priority_per_gas)
    {
        $this->container['max_fee_priority_per_gas'] = $max_fee_priority_per_gas;

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
     * @param int $nonce Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender's address.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets r
     *
     * @return string|null
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     *
     * @param string|null $r Represents output of an ECDSA signature.
     *
     * @return self
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets s
     *
     * @return string|null
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     *
     * @param string|null $s Represents output of an ECDSA signature.
     *
     * @return self
     */
    public function setS($s)
    {
        $this->container['s'] = $s;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sender.
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Specifies the transaction type as one from three options: if response returns a `\"0\"` it means the raw transaction includes legacy transaction data, if it is `\"1\"` - includes access lists for EIP2930, and if it is `\"2\"` - EIP1559 data.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets v
     *
     * @return string|null
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param string|null $v Defines the the recovery id.
     *
     * @return self
     */
    public function setV($v)
    {
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Represents the sent/received amount.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets expiry_height
     *
     * @return int
     */
    public function getExpiryHeight()
    {
        return $this->container['expiry_height'];
    }

    /**
     * Sets expiry_height
     *
     * @param int $expiry_height Represents a block height after which the transaction will expire.
     *
     * @return self
     */
    public function setExpiryHeight($expiry_height)
    {
        $this->container['expiry_height'] = $expiry_height;

        return $this;
    }

    /**
     * Gets overwintered
     *
     * @return bool
     */
    public function getOverwintered()
    {
        return $this->container['overwintered'];
    }

    /**
     * Sets overwintered
     *
     * @param bool $overwintered \"Overwinter\" is the network upgrade for the Zcash blockchain.
     *
     * @return self
     */
    public function setOverwintered($overwintered)
    {
        $this->container['overwintered'] = $overwintered;

        return $this;
    }

    /**
     * Gets saplinged
     *
     * @return bool
     */
    public function getSaplinged()
    {
        return $this->container['saplinged'];
    }

    /**
     * Sets saplinged
     *
     * @param bool $saplinged Defines if the transaction includes sapling or not.
     *
     * @return self
     */
    public function setSaplinged($saplinged)
    {
        $this->container['saplinged'] = $saplinged;

        return $this;
    }

    /**
     * Gets value_balance
     *
     * @return string
     */
    public function getValueBalance()
    {
        return $this->container['value_balance'];
    }

    /**
     * Sets value_balance
     *
     * @param string $value_balance Defines the transaction value balance.
     *
     * @return self
     */
    public function setValueBalance($value_balance)
    {
        $this->container['value_balance'] = $value_balance;

        return $this;
    }

    /**
     * Gets version_group_id
     *
     * @return string
     */
    public function getVersionGroupId()
    {
        return $this->container['version_group_id'];
    }

    /**
     * Sets version_group_id
     *
     * @param string $version_group_id Represents the transaction version group ID
     *
     * @return self
     */
    public function setVersionGroupId($version_group_id)
    {
        $this->container['version_group_id'] = $version_group_id;

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


