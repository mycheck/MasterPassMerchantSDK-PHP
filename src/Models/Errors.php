<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * Errors
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * Errors : This class contains methods require for error handling.
 *
 * @category    Class
 * @description This class contains methods require for error handling.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class Errors
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Error' => 'Error'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'error' => 'setError'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'error' => 'getError'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $error
      * @var \mastercard_masterpass_merchant\model\Error[]
      */
    public $Error;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Error = isset($data["Error"])?$data["Error"]:"";
        }
    }

    /**
     * Gets error
     * @return \mastercard_masterpass_merchant\model\Error[]
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Sets error
     * @param \mastercard_masterpass_merchant\model\Error[] $error
     * @return $this
     */
    public function setError($error)
    {

        $this->Error = $error;
        return $this;
    }




}

