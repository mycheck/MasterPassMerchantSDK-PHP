<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrivateDatas
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrivateDatas : This class contains methods require to set private data details.
 *
 * @category    Class
 * @description This class contains methods require to set private data details.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrivateDatas
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'PrivateData' => 'PrivateData'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'private_data' => 'setPrivateData'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'private_data' => 'getPrivateData'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $private_data the private data.
      * @var \mastercard_masterpass_merchant\model\PrivateData
      */
    public $PrivateData;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->PrivateData = isset($data["PrivateData"])?$data["PrivateData"]:"";
        }
    }

    /**
     * Gets private_data
     * @return \mastercard_masterpass_merchant\model\PrivateData
     */
    public function getPrivateData()
    {
        return $this->PrivateData;
    }

    /**
     * Sets private_data
     * @param \mastercard_masterpass_merchant\model\PrivateData $private_data the private data.
     * @return $this
     */
    public function setPrivateData($private_data)
    {

        $this->PrivateData = $private_data;
        return $this;
    }




}

