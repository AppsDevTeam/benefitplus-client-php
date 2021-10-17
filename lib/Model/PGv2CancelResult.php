<?php
/**
 * PGv2CancelResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Benefit Plus payment gate API (version 2)
 *
 * OpenAPI dokumentace k [Platební bráně Benefit Plus v2](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125646355/Dokumentace+k+nov+platebn+br+n+pro+e-shopy+v2).
 *
 * OpenAPI spec version: 2.1.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BenefitPlus\Model;

use \ArrayAccess;
use \BenefitPlus\ObjectSerializer;

/**
 * PGv2CancelResult Class Doc Comment
 *
 * @category Class
 * @description DTO slouží pro vracení informací o provedení storna. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/BP/pages/1125744726/DTO+PGv2+Cancel+Result)
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PGv2CancelResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PGv2_Cancel_Result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'canceled_price' => 'float',
'is_partial_cancel' => 'bool',
'payment_result' => '\BenefitPlus\Model\PGv2PaymentResult'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'canceled_price' => null,
'is_partial_cancel' => null,
'payment_result' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'canceled_price' => 'CanceledPrice',
'is_partial_cancel' => 'IsPartialCancel',
'payment_result' => 'PaymentResult'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canceled_price' => 'setCanceledPrice',
'is_partial_cancel' => 'setIsPartialCancel',
'payment_result' => 'setPaymentResult'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canceled_price' => 'getCanceledPrice',
'is_partial_cancel' => 'getIsPartialCancel',
'payment_result' => 'getPaymentResult'    ];

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
        return self::$swaggerModelName;
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
        $this->container['canceled_price'] = isset($data['canceled_price']) ? $data['canceled_price'] : null;
        $this->container['is_partial_cancel'] = isset($data['is_partial_cancel']) ? $data['is_partial_cancel'] : null;
        $this->container['payment_result'] = isset($data['payment_result']) ? $data['payment_result'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets canceled_price
     *
     * @return float
     */
    public function getCanceledPrice()
    {
        return $this->container['canceled_price'];
    }

    /**
     * Sets canceled_price
     *
     * @param float $canceled_price Částka, kterou se podařilo stornovat.
     *
     * @return $this
     */
    public function setCanceledPrice($canceled_price)
    {
        $this->container['canceled_price'] = $canceled_price;

        return $this;
    }

    /**
     * Gets is_partial_cancel
     *
     * @return bool
     */
    public function getIsPartialCancel()
    {
        return $this->container['is_partial_cancel'];
    }

    /**
     * Sets is_partial_cancel
     *
     * @param bool $is_partial_cancel Zda proběhlé strono bylo částečné (true), nebo úplné (false).
     *
     * @return $this
     */
    public function setIsPartialCancel($is_partial_cancel)
    {
        $this->container['is_partial_cancel'] = $is_partial_cancel;

        return $this;
    }

    /**
     * Gets payment_result
     *
     * @return \BenefitPlus\Model\PGv2PaymentResult
     */
    public function getPaymentResult()
    {
        return $this->container['payment_result'];
    }

    /**
     * Sets payment_result
     *
     * @param \BenefitPlus\Model\PGv2PaymentResult $payment_result payment_result
     *
     * @return $this
     */
    public function setPaymentResult($payment_result)
    {
        $this->container['payment_result'] = $payment_result;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
