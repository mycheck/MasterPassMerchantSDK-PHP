<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * CardTypes
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * CardTypes : This class contains the card type.
 *
 * @category    Class
 * @description This class contains the card type.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class CardTypes
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'CardType' => 'CardType'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'card_type' => 'setCardType'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'card_type' => 'getCardType'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $card_type the card type.
      * @var \mastercard_masterpass_merchant\model\CardType
      */
    public $CardType;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->CardType = isset($data["CardType"])?$data["CardType"]:"";
        }
    }

    /**
     * Gets card_type
     * @return \mastercard_masterpass_merchant\model\CardType
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * Sets card_type
     * @param \mastercard_masterpass_merchant\model\CardType $card_type the card type.
     * @return $this
     */
    public function setCardType($card_type)
    {

        $this->CardType = $card_type;
        return $this;
    }




}

