<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PaymentAcceptance
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PaymentAcceptance : This class contains methods to set payment acceptance options.
 *
 * @category    Class
 * @description This class contains methods to set payment acceptance options.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PaymentAcceptance
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'AcceptanceOption' => 'AcceptanceOption'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'acceptance_option' => 'setAcceptanceOption'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'acceptance_option' => 'getAcceptanceOption'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $acceptance_option the acceptance option.
      * @var \mastercard_masterpass_merchant\model\AcceptanceOption
      */
    public $AcceptanceOption;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->AcceptanceOption = isset($data["AcceptanceOption"])?$data["AcceptanceOption"]:"";
        }
    }

    /**
     * Gets acceptance_option
     * @return \mastercard_masterpass_merchant\model\AcceptanceOption
     */
    public function getAcceptanceOption()
    {
        return $this->AcceptanceOption;
    }

    /**
     * Sets acceptance_option
     * @param \mastercard_masterpass_merchant\model\AcceptanceOption $acceptance_option the acceptance option.
     * @return $this
     */
    public function setAcceptanceOption($acceptance_option)
    {

        $this->AcceptanceOption = $acceptance_option;
        return $this;
    }




}

