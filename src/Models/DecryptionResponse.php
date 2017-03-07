<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * DecryptionResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * DecryptionResponse : the decryption service response for android SDK.
 *
 * @category    Class
 * @description the decryption service response for android SDK.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class DecryptionResponse
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Data' => 'Data'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'data' => 'setData'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'data' => 'getData'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $data the Data details.
      * @var string
      */
    public $Data;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Data = isset($data["Data"])?$data["Data"]:"";
        }
    }

    /**
     * Gets data
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Sets data
     * @param string $data the Data details.
     * @return $this
     */
    public function setData($data)
    {

        $this->Data = $data;
        return $this;
    }




}

