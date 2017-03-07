<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * Installment
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * Installment : This class contains methods regarding installment.
 *
 * @category    Class
 * @description This class contains methods regarding installment.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class Installment
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Brands' => 'Brands',
        'Issuers' => 'Issuers',
        'CurrencyCode' => 'CurrencyCode',
        'ShippingCalculation' => 'ShippingCalculation',
        'InstallmentOptions' => 'InstallmentOptions'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'brands' => 'setBrands',
        'issuers' => 'setIssuers',
        'currency_code' => 'setCurrencyCode',
        'shipping_calculation' => 'setShippingCalculation',
        'installment_options' => 'setInstallmentOptions'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'brands' => 'getBrands',
        'issuers' => 'getIssuers',
        'currency_code' => 'getCurrencyCode',
        'shipping_calculation' => 'getShippingCalculation',
        'installment_options' => 'getInstallmentOptions'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $brands the brand details.
      * @var \mastercard_masterpass_merchant\model\Brands
      */
    public $Brands;

    /**
      * $issuers the issuers details.
      * @var \mastercard_masterpass_merchant\model\Issuers
      */
    public $Issuers;

    /**
      * $currency_code the currency code.
      * @var string
      */
    public $CurrencyCode;

    /**
      * $shipping_calculation the shipping calculation types.
      * @var string
      */
    public $ShippingCalculation;

    /**
      * $installment_options the installment options.
      * @var \mastercard_masterpass_merchant\model\InstallmentOptions
      */
    public $InstallmentOptions;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Brands = isset($data["Brands"])?$data["Brands"]:"";
            $this->Issuers = isset($data["Issuers"])?$data["Issuers"]:"";
            $this->CurrencyCode = isset($data["CurrencyCode"])?$data["CurrencyCode"]:"";
            $this->ShippingCalculation = isset($data["ShippingCalculation"])?$data["ShippingCalculation"]:"";
            $this->InstallmentOptions = isset($data["InstallmentOptions"])?$data["InstallmentOptions"]:"";
        }
    }

    /**
     * Gets brands
     * @return \mastercard_masterpass_merchant\model\Brands
     */
    public function getBrands()
    {
        return $this->Brands;
    }

    /**
     * Sets brands
     * @param \mastercard_masterpass_merchant\model\Brands $brands the brand details.
     * @return $this
     */
    public function setBrands($brands)
    {

        $this->Brands = $brands;
        return $this;
    }

    /**
     * Gets issuers
     * @return \mastercard_masterpass_merchant\model\Issuers
     */
    public function getIssuers()
    {
        return $this->Issuers;
    }

    /**
     * Sets issuers
     * @param \mastercard_masterpass_merchant\model\Issuers $issuers the issuers details.
     * @return $this
     */
    public function setIssuers($issuers)
    {

        $this->Issuers = $issuers;
        return $this;
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
     * @param string $currency_code the currency code.
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->CurrencyCode = $currency_code;
        return $this;
    }

    /**
     * Gets shipping_calculation
     * @return string
     */
    public function getShippingCalculation()
    {
        return $this->ShippingCalculation;
    }

    /**
     * Sets shipping_calculation
     * @param string $shipping_calculation the shipping calculation types.
     * @return $this
     */
    public function setShippingCalculation($shipping_calculation)
    {
        $allowed_values = array("FREE_SHIPPING", "SHIPPING_INCLUDED", "SHIPPING_NOT_INCLUDED");
        if (!in_array($shipping_calculation, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'shipping_calculation', must be one of 'FREE_SHIPPING', 'SHIPPING_INCLUDED', 'SHIPPING_NOT_INCLUDED'");
        }
        $this->ShippingCalculation = $shipping_calculation;
        return $this;
    }

    /**
     * Gets installment_options
     * @return \mastercard_masterpass_merchant\model\InstallmentOptions
     */
    public function getInstallmentOptions()
    {
        return $this->InstallmentOptions;
    }

    /**
     * Sets installment_options
     * @param \mastercard_masterpass_merchant\model\InstallmentOptions $installment_options the installment options.
     * @return $this
     */
    public function setInstallmentOptions($installment_options)
    {

        $this->InstallmentOptions = $installment_options;
        return $this;
    }




}

