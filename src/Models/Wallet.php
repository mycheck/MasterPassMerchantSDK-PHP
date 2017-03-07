<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * Wallet
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * Wallet : This class contains methods related to wallet details during DSRP.
 *
 * @category    Class
 * @description This class contains methods related to wallet details during DSRP.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class Wallet
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'CardVerificationStatus' => 'CardVerificationStatus',
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
        'card_verification_status' => 'setCardVerificationStatus',
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
        'card_verification_status' => 'getCardVerificationStatus',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $card_verification_status the card verification status.
      * @var string
      */
    public $CardVerificationStatus;

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
            $this->CardVerificationStatus = isset($data["CardVerificationStatus"])?$data["CardVerificationStatus"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets card_verification_status
     * @return string
     */
    public function getCardVerificationStatus()
    {
        return $this->CardVerificationStatus;
    }

    /**
     * Sets card_verification_status
     * @param string $card_verification_status the card verification status.
     * @return $this
     */
    public function setCardVerificationStatus($card_verification_status)
    {

        $this->CardVerificationStatus = $card_verification_status;
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

