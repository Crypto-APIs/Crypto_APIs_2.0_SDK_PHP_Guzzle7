<?php
/**
 * GetBlockDetailsByBlockHashFromCallbackRIBS
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
 * GetBlockDetailsByBlockHashFromCallbackRIBS Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetBlockDetailsByBlockHashFromCallbackRIBS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockDetailsByBlockHashFromCallbackRIBS';

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
        'nonce' => 'string',
        'size' => 'int',
        'stripped_size' => 'int',
        'version' => 'int',
        'version_hex' => 'string',
        'weight' => 'int',
        'strippedsize' => 'int',
        'extra_data' => 'string',
        'gas_limit' => 'int',
        'gas_used' => 'int',
        'mined_in_seconds' => 'int',
        'sha3_uncles' => 'string',
        'total_difficulty' => 'string',
        'uncles' => 'string[]',
        'ds_block' => 'int',
        'ds_difficulty' => 'string',
        'ds_leader' => 'string',
        'micro_blocks' => 'string[]',
        'total_coins' => '\CryptoAPIs\Model\GetLatestMinedXRPRippleBlockRITotalCoins',
        'total_fees' => '\CryptoAPIs\Model\GetLatestMinedXRPRippleBlockRITotalFees',
        'bandwidth_used' => 'string',
        'burned_trx' => 'string',
        'energy_used' => 'string'
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
        'stripped_size' => null,
        'version' => null,
        'version_hex' => null,
        'weight' => null,
        'strippedsize' => null,
        'extra_data' => null,
        'gas_limit' => null,
        'gas_used' => null,
        'mined_in_seconds' => null,
        'sha3_uncles' => null,
        'total_difficulty' => null,
        'uncles' => null,
        'ds_block' => null,
        'ds_difficulty' => null,
        'ds_leader' => null,
        'micro_blocks' => null,
        'total_coins' => null,
        'total_fees' => null,
        'bandwidth_used' => null,
        'burned_trx' => null,
        'energy_used' => null
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
        'stripped_size' => 'strippedSize',
        'version' => 'version',
        'version_hex' => 'versionHex',
        'weight' => 'weight',
        'strippedsize' => 'strippedsize',
        'extra_data' => 'extraData',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'mined_in_seconds' => 'minedInSeconds',
        'sha3_uncles' => 'sha3Uncles',
        'total_difficulty' => 'totalDifficulty',
        'uncles' => 'uncles',
        'ds_block' => 'dsBlock',
        'ds_difficulty' => 'dsDifficulty',
        'ds_leader' => 'dsLeader',
        'micro_blocks' => 'microBlocks',
        'total_coins' => 'totalCoins',
        'total_fees' => 'totalFees',
        'bandwidth_used' => 'bandwidthUsed',
        'burned_trx' => 'burnedTrx',
        'energy_used' => 'energyUsed'
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
        'stripped_size' => 'setStrippedSize',
        'version' => 'setVersion',
        'version_hex' => 'setVersionHex',
        'weight' => 'setWeight',
        'strippedsize' => 'setStrippedsize',
        'extra_data' => 'setExtraData',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'mined_in_seconds' => 'setMinedInSeconds',
        'sha3_uncles' => 'setSha3Uncles',
        'total_difficulty' => 'setTotalDifficulty',
        'uncles' => 'setUncles',
        'ds_block' => 'setDsBlock',
        'ds_difficulty' => 'setDsDifficulty',
        'ds_leader' => 'setDsLeader',
        'micro_blocks' => 'setMicroBlocks',
        'total_coins' => 'setTotalCoins',
        'total_fees' => 'setTotalFees',
        'bandwidth_used' => 'setBandwidthUsed',
        'burned_trx' => 'setBurnedTrx',
        'energy_used' => 'setEnergyUsed'
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
        'stripped_size' => 'getStrippedSize',
        'version' => 'getVersion',
        'version_hex' => 'getVersionHex',
        'weight' => 'getWeight',
        'strippedsize' => 'getStrippedsize',
        'extra_data' => 'getExtraData',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'mined_in_seconds' => 'getMinedInSeconds',
        'sha3_uncles' => 'getSha3Uncles',
        'total_difficulty' => 'getTotalDifficulty',
        'uncles' => 'getUncles',
        'ds_block' => 'getDsBlock',
        'ds_difficulty' => 'getDsDifficulty',
        'ds_leader' => 'getDsLeader',
        'micro_blocks' => 'getMicroBlocks',
        'total_coins' => 'getTotalCoins',
        'total_fees' => 'getTotalFees',
        'bandwidth_used' => 'getBandwidthUsed',
        'burned_trx' => 'getBurnedTrx',
        'energy_used' => 'getEnergyUsed'
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
        $this->container['stripped_size'] = $data['stripped_size'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['version_hex'] = $data['version_hex'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['strippedsize'] = $data['strippedsize'] ?? null;
        $this->container['extra_data'] = $data['extra_data'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['mined_in_seconds'] = $data['mined_in_seconds'] ?? null;
        $this->container['sha3_uncles'] = $data['sha3_uncles'] ?? null;
        $this->container['total_difficulty'] = $data['total_difficulty'] ?? null;
        $this->container['uncles'] = $data['uncles'] ?? null;
        $this->container['ds_block'] = $data['ds_block'] ?? null;
        $this->container['ds_difficulty'] = $data['ds_difficulty'] ?? null;
        $this->container['ds_leader'] = $data['ds_leader'] ?? null;
        $this->container['micro_blocks'] = $data['micro_blocks'] ?? null;
        $this->container['total_coins'] = $data['total_coins'] ?? null;
        $this->container['total_fees'] = $data['total_fees'] ?? null;
        $this->container['bandwidth_used'] = $data['bandwidth_used'] ?? null;
        $this->container['burned_trx'] = $data['burned_trx'] ?? null;
        $this->container['energy_used'] = $data['energy_used'] ?? null;
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
        if ($this->container['strippedsize'] === null) {
            $invalidProperties[] = "'strippedsize' can't be null";
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
        if ($this->container['ds_block'] === null) {
            $invalidProperties[] = "'ds_block' can't be null";
        }
        if ($this->container['ds_difficulty'] === null) {
            $invalidProperties[] = "'ds_difficulty' can't be null";
        }
        if ($this->container['ds_leader'] === null) {
            $invalidProperties[] = "'ds_leader' can't be null";
        }
        if ($this->container['micro_blocks'] === null) {
            $invalidProperties[] = "'micro_blocks' can't be null";
        }
        if ($this->container['total_coins'] === null) {
            $invalidProperties[] = "'total_coins' can't be null";
        }
        if ($this->container['total_fees'] === null) {
            $invalidProperties[] = "'total_fees' can't be null";
        }
        if ($this->container['bandwidth_used'] === null) {
            $invalidProperties[] = "'bandwidth_used' can't be null";
        }
        if ($this->container['burned_trx'] === null) {
            $invalidProperties[] = "'burned_trx' can't be null";
        }
        if ($this->container['energy_used'] === null) {
            $invalidProperties[] = "'energy_used' can't be null";
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
     * @param string $difficulty Defines how difficult it is for a specific miner to mine the block.
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
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce Represents a random value that can be adjusted to satisfy the proof of work
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
     * @param string $sha3_uncles Defines the combined hash of all uncles for a given parent.
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
     * @return string[]|null
     */
    public function getUncles()
    {
        return $this->container['uncles'];
    }

    /**
     * Sets uncles
     *
     * @param string[]|null $uncles uncles
     *
     * @return self
     */
    public function setUncles($uncles)
    {
        $this->container['uncles'] = $uncles;

        return $this;
    }

    /**
     * Gets ds_block
     *
     * @return int
     */
    public function getDsBlock()
    {
        return $this->container['ds_block'];
    }

    /**
     * Sets ds_block
     *
     * @param int $ds_block Represents the Directory Service block which contains metadata about the miners who participate in the consensus protocol.
     *
     * @return self
     */
    public function setDsBlock($ds_block)
    {
        $this->container['ds_block'] = $ds_block;

        return $this;
    }

    /**
     * Gets ds_difficulty
     *
     * @return string
     */
    public function getDsDifficulty()
    {
        return $this->container['ds_difficulty'];
    }

    /**
     * Sets ds_difficulty
     *
     * @param string $ds_difficulty Defines how difficult it is to mine the dsBlocks.
     *
     * @return self
     */
    public function setDsDifficulty($ds_difficulty)
    {
        $this->container['ds_difficulty'] = $ds_difficulty;

        return $this;
    }

    /**
     * Gets ds_leader
     *
     * @return string
     */
    public function getDsLeader()
    {
        return $this->container['ds_leader'];
    }

    /**
     * Sets ds_leader
     *
     * @param string $ds_leader Represents a part of the DS Committee which leads the consensus protocol for the epoch.
     *
     * @return self
     */
    public function setDsLeader($ds_leader)
    {
        $this->container['ds_leader'] = $ds_leader;

        return $this;
    }

    /**
     * Gets micro_blocks
     *
     * @return string[]
     */
    public function getMicroBlocks()
    {
        return $this->container['micro_blocks'];
    }

    /**
     * Sets micro_blocks
     *
     * @param string[] $micro_blocks micro_blocks
     *
     * @return self
     */
    public function setMicroBlocks($micro_blocks)
    {
        $this->container['micro_blocks'] = $micro_blocks;

        return $this;
    }

    /**
     * Gets total_coins
     *
     * @return \CryptoAPIs\Model\GetLatestMinedXRPRippleBlockRITotalCoins
     */
    public function getTotalCoins()
    {
        return $this->container['total_coins'];
    }

    /**
     * Sets total_coins
     *
     * @param \CryptoAPIs\Model\GetLatestMinedXRPRippleBlockRITotalCoins $total_coins total_coins
     *
     * @return self
     */
    public function setTotalCoins($total_coins)
    {
        $this->container['total_coins'] = $total_coins;

        return $this;
    }

    /**
     * Gets total_fees
     *
     * @return \CryptoAPIs\Model\GetLatestMinedXRPRippleBlockRITotalFees
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     *
     * @param \CryptoAPIs\Model\GetLatestMinedXRPRippleBlockRITotalFees $total_fees total_fees
     *
     * @return self
     */
    public function setTotalFees($total_fees)
    {
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets bandwidth_used
     *
     * @return string
     */
    public function getBandwidthUsed()
    {
        return $this->container['bandwidth_used'];
    }

    /**
     * Sets bandwidth_used
     *
     * @param string $bandwidth_used Represents the bandwidth used for the transaction.
     *
     * @return self
     */
    public function setBandwidthUsed($bandwidth_used)
    {
        $this->container['bandwidth_used'] = $bandwidth_used;

        return $this;
    }

    /**
     * Gets burned_trx
     *
     * @return string
     */
    public function getBurnedTrx()
    {
        return $this->container['burned_trx'];
    }

    /**
     * Sets burned_trx
     *
     * @param string $burned_trx Represents the block burned TRX.
     *
     * @return self
     */
    public function setBurnedTrx($burned_trx)
    {
        $this->container['burned_trx'] = $burned_trx;

        return $this;
    }

    /**
     * Gets energy_used
     *
     * @return string
     */
    public function getEnergyUsed()
    {
        return $this->container['energy_used'];
    }

    /**
     * Sets energy_used
     *
     * @param string $energy_used Representats the used energy for the transaction.
     *
     * @return self
     */
    public function setEnergyUsed($energy_used)
    {
        $this->container['energy_used'] = $energy_used;

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


