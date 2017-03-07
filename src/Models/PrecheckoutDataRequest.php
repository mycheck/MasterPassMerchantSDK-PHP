<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutDataRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutDataRequest : This class contains methods to set different parameters required to get the details of pairing details during precheckout.
 *
 * @category    Class
 * @description This class contains methods to set different parameters required to get the details of pairing details during precheckout.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutDataRequest
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'PairingDataTypes' => 'PairingDataTypes',
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
        'pairing_data_types' => 'setPairingDataTypes',
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
        'pairing_data_types' => 'getPairingDataTypes',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $pairing_data_types the paring data types.
      * @var \mastercard_masterpass_merchant\model\PairingDataTypes
      */
    public $PairingDataTypes;

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
            $this->PairingDataTypes = isset($data["PairingDataTypes"])?$data["PairingDataTypes"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets pairing_data_types
     * @return \mastercard_masterpass_merchant\model\PairingDataTypes
     */
    public function getPairingDataTypes()
    {
        return $this->PairingDataTypes;
    }

    /**
     * Sets pairing_data_types
     * @param \mastercard_masterpass_merchant\model\PairingDataTypes $pairing_data_types the paring data types.
     * @return $this
     */
    public function setPairingDataTypes($pairing_data_types)
    {

        $this->PairingDataTypes = $pairing_data_types;
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

