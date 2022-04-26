<?php
/**
 * GetAssetDetailsByAssetSymbolRIS
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
 * GetAssetDetailsByAssetSymbolRIS Class Doc Comment
 *
 * @category Class
 * @description Represents a specific asset&#39;s data depending on its type (whether it is \&quot;crypto\&quot; or \&quot;fiat\&quot;).
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetAssetDetailsByAssetSymbolRIS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAssetDetailsByAssetSymbolRIS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_1_hour_price_change_in_percentage' => 'string',
        '_1_week_price_change_in_percentage' => 'string',
        '_24_hours_price_change_in_percentage' => 'string',
        '_24_hours_trading_volume' => 'string',
        'asset_type' => 'string',
        'circulating_supply' => 'string',
        'market_cap_in_usd' => 'string',
        'max_supply' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_1_hour_price_change_in_percentage' => null,
        '_1_week_price_change_in_percentage' => null,
        '_24_hours_price_change_in_percentage' => null,
        '_24_hours_trading_volume' => null,
        'asset_type' => null,
        'circulating_supply' => null,
        'market_cap_in_usd' => null,
        'max_supply' => null
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
        '_1_hour_price_change_in_percentage' => '1HourPriceChangeInPercentage',
        '_1_week_price_change_in_percentage' => '1WeekPriceChangeInPercentage',
        '_24_hours_price_change_in_percentage' => '24HoursPriceChangeInPercentage',
        '_24_hours_trading_volume' => '24HoursTradingVolume',
        'asset_type' => 'assetType',
        'circulating_supply' => 'circulatingSupply',
        'market_cap_in_usd' => 'marketCapInUSD',
        'max_supply' => 'maxSupply'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_1_hour_price_change_in_percentage' => 'set1HourPriceChangeInPercentage',
        '_1_week_price_change_in_percentage' => 'set1WeekPriceChangeInPercentage',
        '_24_hours_price_change_in_percentage' => 'set24HoursPriceChangeInPercentage',
        '_24_hours_trading_volume' => 'set24HoursTradingVolume',
        'asset_type' => 'setAssetType',
        'circulating_supply' => 'setCirculatingSupply',
        'market_cap_in_usd' => 'setMarketCapInUsd',
        'max_supply' => 'setMaxSupply'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_1_hour_price_change_in_percentage' => 'get1HourPriceChangeInPercentage',
        '_1_week_price_change_in_percentage' => 'get1WeekPriceChangeInPercentage',
        '_24_hours_price_change_in_percentage' => 'get24HoursPriceChangeInPercentage',
        '_24_hours_trading_volume' => 'get24HoursTradingVolume',
        'asset_type' => 'getAssetType',
        'circulating_supply' => 'getCirculatingSupply',
        'market_cap_in_usd' => 'getMarketCapInUsd',
        'max_supply' => 'getMaxSupply'
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

    const ASSET_TYPE_COIN = 'coin';
    const ASSET_TYPE_TOKEN = 'token';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_COIN,
            self::ASSET_TYPE_TOKEN,
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
        $this->container['_1_hour_price_change_in_percentage'] = $data['_1_hour_price_change_in_percentage'] ?? null;
        $this->container['_1_week_price_change_in_percentage'] = $data['_1_week_price_change_in_percentage'] ?? null;
        $this->container['_24_hours_price_change_in_percentage'] = $data['_24_hours_price_change_in_percentage'] ?? null;
        $this->container['_24_hours_trading_volume'] = $data['_24_hours_trading_volume'] ?? null;
        $this->container['asset_type'] = $data['asset_type'] ?? null;
        $this->container['circulating_supply'] = $data['circulating_supply'] ?? null;
        $this->container['market_cap_in_usd'] = $data['market_cap_in_usd'] ?? null;
        $this->container['max_supply'] = $data['max_supply'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['_1_hour_price_change_in_percentage'] === null) {
            $invalidProperties[] = "'_1_hour_price_change_in_percentage' can't be null";
        }
        if ($this->container['_1_week_price_change_in_percentage'] === null) {
            $invalidProperties[] = "'_1_week_price_change_in_percentage' can't be null";
        }
        if ($this->container['_24_hours_price_change_in_percentage'] === null) {
            $invalidProperties[] = "'_24_hours_price_change_in_percentage' can't be null";
        }
        if ($this->container['_24_hours_trading_volume'] === null) {
            $invalidProperties[] = "'_24_hours_trading_volume' can't be null";
        }
        if ($this->container['asset_type'] === null) {
            $invalidProperties[] = "'asset_type' can't be null";
        }
        $allowedValues = $this->getAssetTypeAllowableValues();
        if (!is_null($this->container['asset_type']) && !in_array($this->container['asset_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'asset_type', must be one of '%s'",
                $this->container['asset_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['circulating_supply'] === null) {
            $invalidProperties[] = "'circulating_supply' can't be null";
        }
        if ($this->container['market_cap_in_usd'] === null) {
            $invalidProperties[] = "'market_cap_in_usd' can't be null";
        }
        if ($this->container['max_supply'] === null) {
            $invalidProperties[] = "'max_supply' can't be null";
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
     * Gets _1_hour_price_change_in_percentage
     *
     * @return string
     */
    public function get1HourPriceChangeInPercentage()
    {
        return $this->container['_1_hour_price_change_in_percentage'];
    }

    /**
     * Sets _1_hour_price_change_in_percentage
     *
     * @param string $_1_hour_price_change_in_percentage Represents the percentage of the asset's current price against the its price from 1 hour ago.
     *
     * @return self
     */
    public function set1HourPriceChangeInPercentage($_1_hour_price_change_in_percentage)
    {
        $this->container['_1_hour_price_change_in_percentage'] = $_1_hour_price_change_in_percentage;

        return $this;
    }

    /**
     * Gets _1_week_price_change_in_percentage
     *
     * @return string
     */
    public function get1WeekPriceChangeInPercentage()
    {
        return $this->container['_1_week_price_change_in_percentage'];
    }

    /**
     * Sets _1_week_price_change_in_percentage
     *
     * @param string $_1_week_price_change_in_percentage Represents the percentage of the asset's current price against the its price from 1 week ago.
     *
     * @return self
     */
    public function set1WeekPriceChangeInPercentage($_1_week_price_change_in_percentage)
    {
        $this->container['_1_week_price_change_in_percentage'] = $_1_week_price_change_in_percentage;

        return $this;
    }

    /**
     * Gets _24_hours_price_change_in_percentage
     *
     * @return string
     */
    public function get24HoursPriceChangeInPercentage()
    {
        return $this->container['_24_hours_price_change_in_percentage'];
    }

    /**
     * Sets _24_hours_price_change_in_percentage
     *
     * @param string $_24_hours_price_change_in_percentage Represents the percentage of the asset's current price against the its price from 24 hours ago.
     *
     * @return self
     */
    public function set24HoursPriceChangeInPercentage($_24_hours_price_change_in_percentage)
    {
        $this->container['_24_hours_price_change_in_percentage'] = $_24_hours_price_change_in_percentage;

        return $this;
    }

    /**
     * Gets _24_hours_trading_volume
     *
     * @return string
     */
    public function get24HoursTradingVolume()
    {
        return $this->container['_24_hours_trading_volume'];
    }

    /**
     * Sets _24_hours_trading_volume
     *
     * @param string $_24_hours_trading_volume Represents the trading volume of the asset for the time frame of 24 hours.
     *
     * @return self
     */
    public function set24HoursTradingVolume($_24_hours_trading_volume)
    {
        $this->container['_24_hours_trading_volume'] = $_24_hours_trading_volume;

        return $this;
    }

    /**
     * Gets asset_type
     *
     * @return string
     */
    public function getAssetType()
    {
        return $this->container['asset_type'];
    }

    /**
     * Sets asset_type
     *
     * @param string $asset_type Defines the type of the supported asset. This could be either \"crypto\" or \"fiat\".
     *
     * @return self
     */
    public function setAssetType($asset_type)
    {
        $allowedValues = $this->getAssetTypeAllowableValues();
        if (!in_array($asset_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'asset_type', must be one of '%s'",
                    $asset_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['asset_type'] = $asset_type;

        return $this;
    }

    /**
     * Gets circulating_supply
     *
     * @return string
     */
    public function getCirculatingSupply()
    {
        return $this->container['circulating_supply'];
    }

    /**
     * Sets circulating_supply
     *
     * @param string $circulating_supply Represents the amount of the asset that is circulating on the market and in public hands.
     *
     * @return self
     */
    public function setCirculatingSupply($circulating_supply)
    {
        $this->container['circulating_supply'] = $circulating_supply;

        return $this;
    }

    /**
     * Gets market_cap_in_usd
     *
     * @return string
     */
    public function getMarketCapInUsd()
    {
        return $this->container['market_cap_in_usd'];
    }

    /**
     * Sets market_cap_in_usd
     *
     * @param string $market_cap_in_usd Defines the total market value of the asset's circulating supply in USD.
     *
     * @return self
     */
    public function setMarketCapInUsd($market_cap_in_usd)
    {
        $this->container['market_cap_in_usd'] = $market_cap_in_usd;

        return $this;
    }

    /**
     * Gets max_supply
     *
     * @return string
     */
    public function getMaxSupply()
    {
        return $this->container['max_supply'];
    }

    /**
     * Sets max_supply
     *
     * @param string $max_supply Represents the maximum amount of all coins of a specific asset that will ever exist in its lifetime.
     *
     * @return self
     */
    public function setMaxSupply($max_supply)
    {
        $this->container['max_supply'] = $max_supply;

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


