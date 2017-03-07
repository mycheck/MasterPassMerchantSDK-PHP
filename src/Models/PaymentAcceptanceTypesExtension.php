<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PaymentAcceptanceTypesExtension
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PaymentAcceptanceTypesExtension : This class contains types of payment extension.
 *
 * @category    Class
 * @description This class contains types of payment extension.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PaymentAcceptanceTypesExtension
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'CardTypes' => 'CardTypes'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'card_types' => 'setCardTypes'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'card_types' => 'getCardTypes'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $card_types the card types for payment.
      * @var \mastercard_masterpass_merchant\model\CardTypes
      */
    public $CardTypes;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->CardTypes = isset($data["CardTypes"])?$data["CardTypes"]:"";
        }
    }

    /**
     * Gets card_types
     * @return \mastercard_masterpass_merchant\model\CardTypes
     */
    public function getCardTypes()
    {
        return $this->CardTypes;
    }

    /**
     * Sets card_types
     * @param \mastercard_masterpass_merchant\model\CardTypes $card_types the card types for payment.
     * @return $this
     */
    public function setCardTypes($card_types)
    {

        $this->CardTypes = $card_types;
        return $this;
    }




}

