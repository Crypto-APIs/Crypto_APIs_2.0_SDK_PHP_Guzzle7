<?php
/**
 * TransactionRequestRejectionDataItem
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
 * TransactionRequestRejectionDataItem Class Doc Comment
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
class TransactionRequestRejectionDataItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionRequestRejection_data_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockchain' => 'string',
        'network' => 'string',
        'required_approvals' => 'int',
        'required_rejections' => 'int',
        'current_approvals' => 'int',
        'current_rejections' => 'int'
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
        'required_approvals' => null,
        'required_rejections' => null,
        'current_approvals' => null,
        'current_rejections' => null
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
        'required_approvals' => 'requiredApprovals',
        'required_rejections' => 'requiredRejections',
        'current_approvals' => 'currentApprovals',
        'current_rejections' => 'currentRejections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockchain' => 'setBlockchain',
        'network' => 'setNetwork',
        'required_approvals' => 'setRequiredApprovals',
        'required_rejections' => 'setRequiredRejections',
        'current_approvals' => 'setCurrentApprovals',
        'current_rejections' => 'setCurrentRejections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockchain' => 'getBlockchain',
        'network' => 'getNetwork',
        'required_approvals' => 'getRequiredApprovals',
        'required_rejections' => 'getRequiredRejections',
        'current_approvals' => 'getCurrentApprovals',
        'current_rejections' => 'getCurrentRejections'
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
        $this->container['network'] = $data['network'] ?? null;
        $this->container['required_approvals'] = $data['required_approvals'] ?? null;
        $this->container['required_rejections'] = $data['required_rejections'] ?? null;
        $this->container['current_approvals'] = $data['current_approvals'] ?? null;
        $this->container['current_rejections'] = $data['current_rejections'] ?? null;
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
        if ($this->container['required_approvals'] === null) {
            $invalidProperties[] = "'required_approvals' can't be null";
        }
        if ($this->container['required_rejections'] === null) {
            $invalidProperties[] = "'required_rejections' can't be null";
        }
        if ($this->container['current_approvals'] === null) {
            $invalidProperties[] = "'current_approvals' can't be null";
        }
        if ($this->container['current_rejections'] === null) {
            $invalidProperties[] = "'current_rejections' can't be null";
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
     * Gets required_approvals
     *
     * @return int
     */
    public function getRequiredApprovals()
    {
        return $this->container['required_approvals'];
    }

    /**
     * Sets required_approvals
     *
     * @param int $required_approvals The required number of approvals needed to approve the transaction.
     *
     * @return self
     */
    public function setRequiredApprovals($required_approvals)
    {
        $this->container['required_approvals'] = $required_approvals;

        return $this;
    }

    /**
     * Gets required_rejections
     *
     * @return int
     */
    public function getRequiredRejections()
    {
        return $this->container['required_rejections'];
    }

    /**
     * Sets required_rejections
     *
     * @param int $required_rejections The required number of rejections needed to reject the transaction.
     *
     * @return self
     */
    public function setRequiredRejections($required_rejections)
    {
        $this->container['required_rejections'] = $required_rejections;

        return $this;
    }

    /**
     * Gets current_approvals
     *
     * @return int
     */
    public function getCurrentApprovals()
    {
        return $this->container['current_approvals'];
    }

    /**
     * Sets current_approvals
     *
     * @param int $current_approvals The current number of approvals given for the transaction.
     *
     * @return self
     */
    public function setCurrentApprovals($current_approvals)
    {
        $this->container['current_approvals'] = $current_approvals;

        return $this;
    }

    /**
     * Gets current_rejections
     *
     * @return int
     */
    public function getCurrentRejections()
    {
        return $this->container['current_rejections'];
    }

    /**
     * Sets current_rejections
     *
     * @param int $current_rejections The current number of rejections given for the transaction.
     *
     * @return self
     */
    public function setCurrentRejections($current_rejections)
    {
        $this->container['current_rejections'] = $current_rejections;

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


