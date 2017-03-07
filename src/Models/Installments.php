<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * Installments
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * Installments : This class contains methods for payment installment options.
 *
 * @category    Class
 * @description This class contains methods for payment installment options.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class Installments
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Installment' => 'Installment'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'installment' => 'setInstallment'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'installment' => 'getInstallment'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $installment the acceptance options.
      * @var \mastercard_masterpass_merchant\model\Installment[]
      */
    public $Installment;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Installment = isset($data["Installment"])?$data["Installment"]:"";
        }
    }

    /**
     * Gets installment
     * @return \mastercard_masterpass_merchant\model\Installment[]
     */
    public function getInstallment()
    {
        return $this->Installment;
    }

    /**
     * Sets installment
     * @param \mastercard_masterpass_merchant\model\Installment[] $installment the acceptance options.
     * @return $this
     */
    public function setInstallment($installment)
    {

        $this->Installment = $installment;
        return $this;
    }




}

