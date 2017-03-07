<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutShippingAddresses
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutShippingAddresses : This class contains methods to get pre checkout shipping address details.
 *
 * @category    Class
 * @description This class contains methods to get pre checkout shipping address details.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutShippingAddresses
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'ShippingAddress' => 'PrecheckoutShippingAddress',
        'ExtensionPoint' => 'ExtensionPoint'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'shipping_address' => 'setShippingAddress',
        'extension_point' => 'setExtensionPoint'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'shipping_address' => 'getShippingAddress',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $shipping_address the shipping address details.
      * @var \mastercard_masterpass_merchant\model\PrecheckoutShippingAddress[]
      */
    public $ShippingAddress;

    /**
      * $extension_point the ExtensionPoint for future enhancement.
      * @var \mastercard_masterpass_merchant\model\ExtensionPoint
      */
    public $ExtensionPoint;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->ShippingAddress = isset($data["ShippingAddress"])?$data["ShippingAddress"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets shipping_address
     * @return \mastercard_masterpass_merchant\model\PrecheckoutShippingAddress[]
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }

    /**
     * Sets shipping_address
     * @param \mastercard_masterpass_merchant\model\PrecheckoutShippingAddress[] $shipping_address the shipping address details.
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {

        $this->ShippingAddress = $shipping_address;
        return $this;
    }

    /**
     * Gets extension_point
     * @return \mastercard_masterpass_merchant\model\ExtensionPoint
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param \mastercard_masterpass_merchant\model\ExtensionPoint $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {

        $this->ExtensionPoint = $extension_point;
        return $this;
    }




}

