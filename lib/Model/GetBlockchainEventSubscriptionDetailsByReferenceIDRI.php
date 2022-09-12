<?php
/**
 * GetBlockchainEventSubscriptionDetailsByReferenceIDRI
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
 * GetBlockchainEventSubscriptionDetailsByReferenceIDRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetBlockchainEventSubscriptionDetailsByReferenceIDRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockchainEventSubscriptionDetailsByReferenceIDRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'blockchain' => 'string',
        'callback_secret_key' => 'string',
        'callback_url' => 'string',
        'confirmations_count' => 'int',
        'created_timestamp' => 'int',
        'deactivation_reasons' => '\CryptoAPIs\Model\ListBlockchainEventsSubscriptionsRIDeactivationReasonsInner[]',
        'event_type' => 'string',
        'is_active' => 'bool',
        'network' => 'string',
        'reference_id' => 'string',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'blockchain' => null,
        'callback_secret_key' => null,
        'callback_url' => null,
        'confirmations_count' => null,
        'created_timestamp' => null,
        'deactivation_reasons' => null,
        'event_type' => null,
        'is_active' => null,
        'network' => null,
        'reference_id' => null,
        'transaction_id' => null
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
        'address' => 'address',
        'blockchain' => 'blockchain',
        'callback_secret_key' => 'callbackSecretKey',
        'callback_url' => 'callbackUrl',
        'confirmations_count' => 'confirmationsCount',
        'created_timestamp' => 'createdTimestamp',
        'deactivation_reasons' => 'deactivationReasons',
        'event_type' => 'eventType',
        'is_active' => 'isActive',
        'network' => 'network',
        'reference_id' => 'referenceId',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'blockchain' => 'setBlockchain',
        'callback_secret_key' => 'setCallbackSecretKey',
        'callback_url' => 'setCallbackUrl',
        'confirmations_count' => 'setConfirmationsCount',
        'created_timestamp' => 'setCreatedTimestamp',
        'deactivation_reasons' => 'setDeactivationReasons',
        'event_type' => 'setEventType',
        'is_active' => 'setIsActive',
        'network' => 'setNetwork',
        'reference_id' => 'setReferenceId',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'blockchain' => 'getBlockchain',
        'callback_secret_key' => 'getCallbackSecretKey',
        'callback_url' => 'getCallbackUrl',
        'confirmations_count' => 'getConfirmationsCount',
        'created_timestamp' => 'getCreatedTimestamp',
        'deactivation_reasons' => 'getDeactivationReasons',
        'event_type' => 'getEventType',
        'is_active' => 'getIsActive',
        'network' => 'getNetwork',
        'reference_id' => 'getReferenceId',
        'transaction_id' => 'getTransactionId'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['blockchain'] = $data['blockchain'] ?? null;
        $this->container['callback_secret_key'] = $data['callback_secret_key'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['confirmations_count'] = $data['confirmations_count'] ?? null;
        $this->container['created_timestamp'] = $data['created_timestamp'] ?? null;
        $this->container['deactivation_reasons'] = $data['deactivation_reasons'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['network'] = $data['network'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
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
        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['created_timestamp'] === null) {
            $invalidProperties[] = "'created_timestamp' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Represents the address of the transaction.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
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
     * Gets callback_secret_key
     *
     * @return string|null
     */
    public function getCallbackSecretKey()
    {
        return $this->container['callback_secret_key'];
    }

    /**
     * Sets callback_secret_key
     *
     * @param string|null $callback_secret_key Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security).
     *
     * @return self
     */
    public function setCallbackSecretKey($callback_secret_key)
    {
        $this->container['callback_secret_key'] = $callback_secret_key;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets confirmations_count
     *
     * @return int|null
     */
    public function getConfirmationsCount()
    {
        return $this->container['confirmations_count'];
    }

    /**
     * Sets confirmations_count
     *
     * @param int|null $confirmations_count Represents the number of confirmations, i.e. the amount of blocks that have been built on top of this block.
     *
     * @return self
     */
    public function setConfirmationsCount($confirmations_count)
    {
        $this->container['confirmations_count'] = $confirmations_count;

        return $this;
    }

    /**
     * Gets created_timestamp
     *
     * @return int
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param int $created_timestamp Defines the specific time/date when the subscription was created in Unix Timestamp.
     *
     * @return self
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets deactivation_reasons
     *
     * @return \CryptoAPIs\Model\ListBlockchainEventsSubscriptionsRIDeactivationReasonsInner[]|null
     */
    public function getDeactivationReasons()
    {
        return $this->container['deactivation_reasons'];
    }

    /**
     * Sets deactivation_reasons
     *
     * @param \CryptoAPIs\Model\ListBlockchainEventsSubscriptionsRIDeactivationReasonsInner[]|null $deactivation_reasons Represents the deactivation reason details, available when a blockchain event subscription has status isActive - false.
     *
     * @return self
     */
    public function setDeactivationReasons($deactivation_reasons)
    {
        $this->container['deactivation_reasons'] = $deactivation_reasons;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type Defines the type of the specific event available for the customer to subscribe to for callback notification.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Defines whether the subscription is active or not. Set as boolean.
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id Represents a unique ID used to reference the specific callback subscription.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id Represents the unique identification string that defines the transaction.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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


