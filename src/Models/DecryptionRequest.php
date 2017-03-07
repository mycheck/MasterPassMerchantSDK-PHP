<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * DecryptionRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * DecryptionRequest : the decryption service request for android SDK.
 *
 * @category    Class
 * @description the decryption service request for android SDK.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class DecryptionRequest
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Data' => 'Data',
        'DataEncryptionKey' => 'DataEncryptionKey',
        'DataEncryptionIV' => 'DataEncryptionIV',
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
        'data' => 'setData',
        'data_encryption_key' => 'setDataEncryptionKey',
        'data_encryption_iv' => 'setDataEncryptionIv',
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
        'data' => 'getData',
        'data_encryption_key' => 'getDataEncryptionKey',
        'data_encryption_iv' => 'getDataEncryptionIv',
        'extension_point' => 'getExtensionPoint'
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
      * $data_encryption_key the DataEncryptionKey details.
      * @var string
      */
    public $DataEncryptionKey;

    /**
      * $data_encryption_iv the DataEncryptionIV details.
      * @var string
      */
    public $DataEncryptionIV;

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
            $this->Data = isset($data["Data"])?$data["Data"]:"";
            $this->DataEncryptionKey = isset($data["DataEncryptionKey"])?$data["DataEncryptionKey"]:"";
            $this->DataEncryptionIV = isset($data["DataEncryptionIV"])?$data["DataEncryptionIV"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
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

    /**
     * Gets data_encryption_key
     * @return string
     */
    public function getDataEncryptionKey()
    {
        return $this->DataEncryptionKey;
    }

    /**
     * Sets data_encryption_key
     * @param string $data_encryption_key the DataEncryptionKey details.
     * @return $this
     */
    public function setDataEncryptionKey($data_encryption_key)
    {

        $this->DataEncryptionKey = $data_encryption_key;
        return $this;
    }

    /**
     * Gets data_encryption_iv
     * @return string
     */
    public function getDataEncryptionIv()
    {
        return $this->DataEncryptionIV;
    }

    /**
     * Sets data_encryption_iv
     * @param string $data_encryption_iv the DataEncryptionIV details.
     * @return $this
     */
    public function setDataEncryptionIv($data_encryption_iv)
    {

        $this->DataEncryptionIV = $data_encryption_iv;
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

