<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * MerchantTransactions
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * MerchantTransactions : This class contains methods to post the result of success and fail transactions. This contains information require for a service call from the merchant to MasterPass.
 *
 * @category    Class
 * @description This class contains methods to post the result of success and fail transactions. This contains information require for a service call from the merchant to MasterPass.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class MerchantTransactions
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'MerchantTransactions' => 'MerchantTransaction'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'merchant_transactions' => 'setMerchantTransactions'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'merchant_transactions' => 'getMerchantTransactions'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $merchant_transactions the merchant transaction details.
      * @var \mastercard_masterpass_merchant\model\MerchantTransaction[]
      */
    public $MerchantTransactions;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->MerchantTransactions = isset($data["MerchantTransactions"])?$data["MerchantTransactions"]:"";
        }
    }

    /**
     * Gets merchant_transactions
     * @return \mastercard_masterpass_merchant\model\MerchantTransaction[]
     */
    public function getMerchantTransactions()
    {
        return $this->MerchantTransactions;
    }

    /**
     * Sets merchant_transactions
     * @param \mastercard_masterpass_merchant\model\MerchantTransaction[] $merchant_transactions the merchant transaction details.
     * @return $this
     */
    public function setMerchantTransactions($merchant_transactions)
    {

        $this->MerchantTransactions = $merchant_transactions;
        return $this;
    }




}

