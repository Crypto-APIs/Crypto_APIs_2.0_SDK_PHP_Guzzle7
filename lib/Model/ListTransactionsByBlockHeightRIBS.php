<?php
/**
 * ListTransactionsByBlockHeightRIBS
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
 * ListTransactionsByBlockHeightRIBS Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListTransactionsByBlockHeightRIBS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListTransactionsByBlockHeightRIBS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locktime' => 'int',
        'size' => 'int',
        'v_size' => 'int',
        'version' => 'int',
        'vin' => '\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVin[]',
        'vout' => '\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVout[]',
        'contract' => 'string',
        'gas_limit' => 'string',
        'gas_price' => '\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSBSCGasPrice',
        'gas_used' => 'string',
        'input_data' => 'string',
        'nonce' => 'int',
        'transaction_status' => 'string',
        'binding_sig' => 'string',
        'expiry_height' => 'int',
        'join_split_pub_key' => 'string',
        'join_split_sig' => 'string',
        'overwintered' => 'bool',
        'v_join_split' => '\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVJoinSplit[]',
        'v_shielded_output' => '\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVShieldedOutput[]',
        'v_shielded_spend' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[]',
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
        'size' => null,
        'v_size' => null,
        'version' => null,
        'vin' => null,
        'vout' => null,
        'contract' => null,
        'gas_limit' => null,
        'gas_price' => null,
        'gas_used' => null,
        'input_data' => null,
        'nonce' => null,
        'transaction_status' => null,
        'binding_sig' => null,
        'expiry_height' => null,
        'join_split_pub_key' => null,
        'join_split_sig' => null,
        'overwintered' => null,
        'v_join_split' => null,
        'v_shielded_output' => null,
        'v_shielded_spend' => null,
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
        'size' => 'size',
        'v_size' => 'vSize',
        'version' => 'version',
        'vin' => 'vin',
        'vout' => 'vout',
        'contract' => 'contract',
        'gas_limit' => 'gasLimit',
        'gas_price' => 'gasPrice',
        'gas_used' => 'gasUsed',
        'input_data' => 'inputData',
        'nonce' => 'nonce',
        'transaction_status' => 'transactionStatus',
        'binding_sig' => 'bindingSig',
        'expiry_height' => 'expiryHeight',
        'join_split_pub_key' => 'joinSplitPubKey',
        'join_split_sig' => 'joinSplitSig',
        'overwintered' => 'overwintered',
        'v_join_split' => 'vJoinSplit',
        'v_shielded_output' => 'vShieldedOutput',
        'v_shielded_spend' => 'vShieldedSpend',
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
        'size' => 'setSize',
        'v_size' => 'setVSize',
        'version' => 'setVersion',
        'vin' => 'setVin',
        'vout' => 'setVout',
        'contract' => 'setContract',
        'gas_limit' => 'setGasLimit',
        'gas_price' => 'setGasPrice',
        'gas_used' => 'setGasUsed',
        'input_data' => 'setInputData',
        'nonce' => 'setNonce',
        'transaction_status' => 'setTransactionStatus',
        'binding_sig' => 'setBindingSig',
        'expiry_height' => 'setExpiryHeight',
        'join_split_pub_key' => 'setJoinSplitPubKey',
        'join_split_sig' => 'setJoinSplitSig',
        'overwintered' => 'setOverwintered',
        'v_join_split' => 'setVJoinSplit',
        'v_shielded_output' => 'setVShieldedOutput',
        'v_shielded_spend' => 'setVShieldedSpend',
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
        'size' => 'getSize',
        'v_size' => 'getVSize',
        'version' => 'getVersion',
        'vin' => 'getVin',
        'vout' => 'getVout',
        'contract' => 'getContract',
        'gas_limit' => 'getGasLimit',
        'gas_price' => 'getGasPrice',
        'gas_used' => 'getGasUsed',
        'input_data' => 'getInputData',
        'nonce' => 'getNonce',
        'transaction_status' => 'getTransactionStatus',
        'binding_sig' => 'getBindingSig',
        'expiry_height' => 'getExpiryHeight',
        'join_split_pub_key' => 'getJoinSplitPubKey',
        'join_split_sig' => 'getJoinSplitSig',
        'overwintered' => 'getOverwintered',
        'v_join_split' => 'getVJoinSplit',
        'v_shielded_output' => 'getVShieldedOutput',
        'v_shielded_spend' => 'getVShieldedSpend',
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
        $this->container['size'] = $data['size'] ?? null;
        $this->container['v_size'] = $data['v_size'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['vin'] = $data['vin'] ?? null;
        $this->container['vout'] = $data['vout'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['input_data'] = $data['input_data'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
        $this->container['binding_sig'] = $data['binding_sig'] ?? null;
        $this->container['expiry_height'] = $data['expiry_height'] ?? null;
        $this->container['join_split_pub_key'] = $data['join_split_pub_key'] ?? null;
        $this->container['join_split_sig'] = $data['join_split_sig'] ?? null;
        $this->container['overwintered'] = $data['overwintered'] ?? null;
        $this->container['v_join_split'] = $data['v_join_split'] ?? null;
        $this->container['v_shielded_output'] = $data['v_shielded_output'] ?? null;
        $this->container['v_shielded_spend'] = $data['v_shielded_spend'] ?? null;
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
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
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
        if ($this->container['input_data'] === null) {
            $invalidProperties[] = "'input_data' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['transaction_status'] === null) {
            $invalidProperties[] = "'transaction_status' can't be null";
        }
        if ($this->container['binding_sig'] === null) {
            $invalidProperties[] = "'binding_sig' can't be null";
        }
        if ($this->container['expiry_height'] === null) {
            $invalidProperties[] = "'expiry_height' can't be null";
        }
        if ($this->container['join_split_pub_key'] === null) {
            $invalidProperties[] = "'join_split_pub_key' can't be null";
        }
        if ($this->container['join_split_sig'] === null) {
            $invalidProperties[] = "'join_split_sig' can't be null";
        }
        if ($this->container['overwintered'] === null) {
            $invalidProperties[] = "'overwintered' can't be null";
        }
        if ($this->container['v_join_split'] === null) {
            $invalidProperties[] = "'v_join_split' can't be null";
        }
        if ($this->container['v_shielded_output'] === null) {
            $invalidProperties[] = "'v_shielded_output' can't be null";
        }
        if ($this->container['v_shielded_spend'] === null) {
            $invalidProperties[] = "'v_shielded_spend' can't be null";
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
     * @param int $locktime Represents the time at which a particular transaction can be added to the blockchain.
     *
     * @return self
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

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
     * @param int $size Represents the total size of this transaction.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @return \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVin[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVin[] $vin Object Array representation of transaction inputs
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
     * @return \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVout[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVout[] $vout Object Array representation of transaction outputs
     *
     * @return self
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract Represents the specific transaction contract.
     *
     * @return self
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

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
     * Gets gas_price
     *
     * @return \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSBSCGasPrice
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSBSCGasPrice $gas_price gas_price
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
     * @return string
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param string $gas_used Represents the exact unit of gas that was used for the transaction.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets input_data
     *
     * @return string
     */
    public function getInputData()
    {
        return $this->container['input_data'];
    }

    /**
     * Sets input_data
     *
     * @param string $input_data Represents additional information that is required for the transaction.
     *
     * @return self
     */
    public function setInputData($input_data)
    {
        $this->container['input_data'] = $input_data;

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
     * @param string $transaction_status Represents the status of this transaction
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets binding_sig
     *
     * @return string
     */
    public function getBindingSig()
    {
        return $this->container['binding_sig'];
    }

    /**
     * Sets binding_sig
     *
     * @param string $binding_sig It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions.
     *
     * @return self
     */
    public function setBindingSig($binding_sig)
    {
        $this->container['binding_sig'] = $binding_sig;

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
     * Gets join_split_pub_key
     *
     * @return string
     */
    public function getJoinSplitPubKey()
    {
        return $this->container['join_split_pub_key'];
    }

    /**
     * Sets join_split_pub_key
     *
     * @param string $join_split_pub_key Represents an encoding of a JoinSplitSig public validating key.
     *
     * @return self
     */
    public function setJoinSplitPubKey($join_split_pub_key)
    {
        $this->container['join_split_pub_key'] = $join_split_pub_key;

        return $this;
    }

    /**
     * Gets join_split_sig
     *
     * @return string
     */
    public function getJoinSplitSig()
    {
        return $this->container['join_split_sig'];
    }

    /**
     * Sets join_split_sig
     *
     * @param string $join_split_sig Is used to sign transactions that contain at least one JoinSplit description.
     *
     * @return self
     */
    public function setJoinSplitSig($join_split_sig)
    {
        $this->container['join_split_sig'] = $join_split_sig;

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
     * Gets v_join_split
     *
     * @return \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVJoinSplit[]
     */
    public function getVJoinSplit()
    {
        return $this->container['v_join_split'];
    }

    /**
     * Sets v_join_split
     *
     * @param \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVJoinSplit[] $v_join_split Represents a sequence of JoinSplit descriptions using BCTV14 proofs.
     *
     * @return self
     */
    public function setVJoinSplit($v_join_split)
    {
        $this->container['v_join_split'] = $v_join_split;

        return $this;
    }

    /**
     * Gets v_shielded_output
     *
     * @return \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVShieldedOutput[]
     */
    public function getVShieldedOutput()
    {
        return $this->container['v_shielded_output'];
    }

    /**
     * Sets v_shielded_output
     *
     * @param \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVShieldedOutput[] $v_shielded_output Object Array representation of transaction output descriptions
     *
     * @return self
     */
    public function setVShieldedOutput($v_shielded_output)
    {
        $this->container['v_shielded_output'] = $v_shielded_output;

        return $this;
    }

    /**
     * Gets v_shielded_spend
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[]
     */
    public function getVShieldedSpend()
    {
        return $this->container['v_shielded_spend'];
    }

    /**
     * Sets v_shielded_spend
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[] $v_shielded_spend Object Array representation of transaction spend descriptions
     *
     * @return self
     */
    public function setVShieldedSpend($v_shielded_spend)
    {
        $this->container['v_shielded_spend'] = $v_shielded_spend;

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
     * @param string $version_group_id Represents the transaction version group ID.
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


