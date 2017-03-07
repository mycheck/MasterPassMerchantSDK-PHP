<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * InstallmentOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * InstallmentOptions : This class contains methods regarding installment options.
 *
 * @category    Class
 * @description This class contains methods regarding installment options.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class InstallmentOptions
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'InstallmentOption' => 'InstallmentOption'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'installment_option' => 'setInstallmentOption'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'installment_option' => 'getInstallmentOption'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $installment_option the installment option.
      * @var \mastercard_masterpass_merchant\model\InstallmentOption
      */
    public $InstallmentOption;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->InstallmentOption = isset($data["InstallmentOption"])?$data["InstallmentOption"]:"";
        }
    }

    /**
     * Gets installment_option
     * @return \mastercard_masterpass_merchant\model\InstallmentOption
     */
    public function getInstallmentOption()
    {
        return $this->InstallmentOption;
    }

    /**
     * Sets installment_option
     * @param \mastercard_masterpass_merchant\model\InstallmentOption $installment_option the installment option.
     * @return $this
     */
    public function setInstallmentOption($installment_option)
    {

        $this->InstallmentOption = $installment_option;
        return $this;
    }




}

