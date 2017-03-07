<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * ShoppingCart
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * ShoppingCart : This class contains various methods for to set different shopping cart parameters required for Shopping Cart Service.
 *
 * @category    Class
 * @description This class contains various methods for to set different shopping cart parameters required for Shopping Cart Service.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class ShoppingCart
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'CurrencyCode' => 'CurrencyCode',
        'Subtotal' => 'Subtotal',
        'ShoppingCartItem' => 'ShoppingCartItem',
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
        'currency_code' => 'setCurrencyCode',
        'subtotal' => 'setSubtotal',
        'shopping_cart_item' => 'setShoppingCartItem',
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
        'currency_code' => 'getCurrencyCode',
        'subtotal' => 'getSubtotal',
        'shopping_cart_item' => 'getShoppingCartItem',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $currency_code the currency code defined by ISO 4217. Its should be exactly three characters, such as, USD for US Dollars. All MonetaryValues will be modified by the CurrencyCode.
      * @var string
      */
    public $CurrencyCode;

    /**
      * $subtotal the total sum of all the items in the cart excluding shipping, handling and tax. Integer without the decimal, for example, USD 119.00 will be 11900.
      * @var int
      */
    public $Subtotal;

    /**
      * $shopping_cart_item the details of a single shopping cart item.
      * @var \mastercard_masterpass_merchant\model\ShoppingCartItem[]
      */
    public $ShoppingCartItem;

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
            $this->CurrencyCode = isset($data["CurrencyCode"])?$data["CurrencyCode"]:"";
            $this->Subtotal = isset($data["Subtotal"])?$data["Subtotal"]:"";
            $this->ShoppingCartItem = isset($data["ShoppingCartItem"])?$data["ShoppingCartItem"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets currency_code
     * @param string $currency_code the currency code defined by ISO 4217. Its should be exactly three characters, such as, USD for US Dollars. All MonetaryValues will be modified by the CurrencyCode.
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->CurrencyCode = $currency_code;
        return $this;
    }

    /**
     * Gets subtotal
     * @return int
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }

    /**
     * Sets subtotal
     * @param int $subtotal the total sum of all the items in the cart excluding shipping, handling and tax. Integer without the decimal, for example, USD 119.00 will be 11900.
     * @return $this
     */
    public function setSubtotal($subtotal)
    {

        $this->Subtotal = $subtotal;
        return $this;
    }

    /**
     * Gets shopping_cart_item
     * @return \mastercard_masterpass_merchant\model\ShoppingCartItem[]
     */
    public function getShoppingCartItem()
    {
        return $this->ShoppingCartItem;
    }

    /**
     * Sets shopping_cart_item
     * @param \mastercard_masterpass_merchant\model\ShoppingCartItem[] $shopping_cart_item the details of a single shopping cart item.
     * @return $this
     */
    public function setShoppingCartItem($shopping_cart_item)
    {

        $this->ShoppingCartItem = $shopping_cart_item;
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

