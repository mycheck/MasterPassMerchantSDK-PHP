<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * MerchantInitializationResponseExtension
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * MerchantInitializationResponseExtension : This class return the response for DSRP during merchant initialization service.
 *
 * @category    Class
 * @description This class return the response for DSRP during merchant initialization service.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class MerchantInitializationResponseExtension
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'UnpredictableNumber' => 'UnpredictableNumber'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'unpredictable_number' => 'setUnpredictableNumber'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'unpredictable_number' => 'getUnpredictableNumber'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $unpredictable_number the unpredictable number.
      * @var string
      */
    public $UnpredictableNumber;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->UnpredictableNumber = isset($data["UnpredictableNumber"])?$data["UnpredictableNumber"]:"";
        }
    }

    /**
     * Gets unpredictable_number
     * @return string
     */
    public function getUnpredictableNumber()
    {
        return $this->UnpredictableNumber;
    }

    /**
     * Sets unpredictable_number
     * @param string $unpredictable_number the unpredictable number.
     * @return $this
     */
    public function setUnpredictableNumber($unpredictable_number)
    {

        $this->UnpredictableNumber = $unpredictable_number;
        return $this;
    }




}

