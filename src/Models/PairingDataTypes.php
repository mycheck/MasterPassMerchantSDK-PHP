<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PairingDataTypes
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PairingDataTypes : This class contains methods for different pairing data types arrays.
 *
 * @category    Class
 * @description This class contains methods for different pairing data types arrays.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PairingDataTypes
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'PairingDataType' => 'PairingDataType',
        'ExtensionPoint' => 'ExtensionPoint'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'pairing_data_type' => 'setPairingDataType',
        'extension_point' => 'setExtensionPoint'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'pairing_data_type' => 'getPairingDataType',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $pairing_data_type the pairing data type.
      * @var \mastercard_masterpass_merchant\model\PairingDataType[]
      */
    public $PairingDataType;

    /**
      * $extension_point the ExtensionPoint for future enhancement.
      * @var \mastercard_masterpass_merchant\model\ExtensionPoint
      */
    public $ExtensionPoint;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->PairingDataType = isset($data["PairingDataType"])?$data["PairingDataType"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets pairing_data_type
     * @return \mastercard_masterpass_merchant\model\PairingDataType[]
     */
    public function getPairingDataType()
    {
        return $this->PairingDataType;
    }

    /**
     * Sets pairing_data_type
     * @param \mastercard_masterpass_merchant\model\PairingDataType[] $pairing_data_type the pairing data type.
     * @return $this
     */
    public function setPairingDataType($pairing_data_type)
    {

        $this->PairingDataType = $pairing_data_type;
        return $this;
    }

    /**
     * Gets extension_point
     * @return \mastercard_masterpass_merchant\model\ExtensionPoint
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param \mastercard_masterpass_merchant\model\ExtensionPoint $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {

        $this->ExtensionPoint = $extension_point;
        return $this;
    }




}

