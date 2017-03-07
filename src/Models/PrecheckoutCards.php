<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutCards
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutCards : This class contains different methods related to precheckout card.
 *
 * @category    Class
 * @description This class contains different methods related to precheckout card.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutCards
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Card' => 'PrecheckoutCard',
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
        'card' => 'setCard',
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
        'card' => 'getCard',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $card the card information.
      * @var \mastercard_masterpass_merchant\model\PrecheckoutCard[]
      */
    public $Card;

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
            $this->Card = isset($data["Card"])?$data["Card"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets card
     * @return \mastercard_masterpass_merchant\model\PrecheckoutCard[]
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * Sets card
     * @param \mastercard_masterpass_merchant\model\PrecheckoutCard[] $card the card information.
     * @return $this
     */
    public function setCard($card)
    {

        $this->Card = $card;
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

