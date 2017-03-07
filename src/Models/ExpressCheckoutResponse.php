<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * ExpressCheckoutResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * ExpressCheckoutResponse : This class contains methods require for express checkout response.
 *
 * @category    Class
 * @description This class contains methods require for express checkout response.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class ExpressCheckoutResponse
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Checkout' => 'Checkout',
        'LongAccessToken' => 'LongAccessToken',
        'Errors' => 'Errors',
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
        'checkout' => 'setCheckout',
        'long_access_token' => 'setLongAccessToken',
        'errors' => 'setErrors',
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
        'checkout' => 'getCheckout',
        'long_access_token' => 'getLongAccessToken',
        'errors' => 'getErrors',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $checkout the checkout details.
      * @var \mastercard_masterpass_merchant\model\Checkout
      */
    public $Checkout;

    /**
      * $long_access_token the long access token.
      * @var string
      */
    public $LongAccessToken;

    /**
      * $errors the errors information.
      * @var \mastercard_masterpass_merchant\model\Errors
      */
    public $Errors;

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
            $this->Checkout = isset($data["Checkout"])?$data["Checkout"]:"";
            $this->LongAccessToken = isset($data["LongAccessToken"])?$data["LongAccessToken"]:"";
            $this->Errors = isset($data["Errors"])?$data["Errors"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets checkout
     * @return \mastercard_masterpass_merchant\model\Checkout
     */
    public function getCheckout()
    {
        return $this->Checkout;
    }

    /**
     * Sets checkout
     * @param \mastercard_masterpass_merchant\model\Checkout $checkout the checkout details.
     * @return $this
     */
    public function setCheckout($checkout)
    {

        $this->Checkout = $checkout;
        return $this;
    }

    /**
     * Gets long_access_token
     * @return string
     */
    public function getLongAccessToken()
    {
        return $this->LongAccessToken;
    }

    /**
     * Sets long_access_token
     * @param string $long_access_token the long access token.
     * @return $this
     */
    public function setLongAccessToken($long_access_token)
    {

        $this->LongAccessToken = $long_access_token;
        return $this;
    }

    /**
     * Gets errors
     * @return \mastercard_masterpass_merchant\model\Errors
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets errors
     * @param \mastercard_masterpass_merchant\model\Errors $errors the errors information.
     * @return $this
     */
    public function setErrors($errors)
    {

        $this->Errors = $errors;
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

