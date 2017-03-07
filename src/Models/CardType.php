<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * CardType
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * CardType : This class contains methods to set different card types.
 *
 * @category    Class
 * @description This class contains methods to set different card types.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class CardType
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
      * @var string
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
     * @return string
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * Sets card_type
     * @param string $card_type the card type.
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowed_values = array("CREDIT", "DEBIT");
        if (!in_array($card_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'card_type', must be one of 'CREDIT', 'DEBIT'");
        }
        $this->CardType = $card_type;
        return $this;
    }




}

