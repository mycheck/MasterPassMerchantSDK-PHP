<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * SessionKeySigningRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * SessionKeySigningRequest : the decryption service request for android SDK.
 *
 * @category    Class
 * @description the decryption service request for android SDK.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class SessionKeySigningRequest
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'AppId' => 'AppId',
        'AppVersion' => 'AppVersion',
        'AppSigningPublicKey' => 'AppSigningPublicKey',
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
        'app_id' => 'setAppId',
        'app_version' => 'setAppVersion',
        'app_signing_public_key' => 'setAppSigningPublicKey',
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
        'app_id' => 'getAppId',
        'app_version' => 'getAppVersion',
        'app_signing_public_key' => 'getAppSigningPublicKey',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $app_id the AppId details.
      * @var string
      */
    public $AppId;

    /**
      * $app_version the AppVersion details.
      * @var string
      */
    public $AppVersion;

    /**
      * $app_signing_public_key the AppSigningPublicKey details.
      * @var string
      */
    public $AppSigningPublicKey;

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
            $this->AppId = isset($data["AppId"])?$data["AppId"]:"";
            $this->AppVersion = isset($data["AppVersion"])?$data["AppVersion"]:"";
            $this->AppSigningPublicKey = isset($data["AppSigningPublicKey"])?$data["AppSigningPublicKey"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets app_id
     * @return string
     */
    public function getAppId()
    {
        return $this->AppId;
    }

    /**
     * Sets app_id
     * @param string $app_id the AppId details.
     * @return $this
     */
    public function setAppId($app_id)
    {

        $this->AppId = $app_id;
        return $this;
    }

    /**
     * Gets app_version
     * @return string
     */
    public function getAppVersion()
    {
        return $this->AppVersion;
    }

    /**
     * Sets app_version
     * @param string $app_version the AppVersion details.
     * @return $this
     */
    public function setAppVersion($app_version)
    {

        $this->AppVersion = $app_version;
        return $this;
    }

    /**
     * Gets app_signing_public_key
     * @return string
     */
    public function getAppSigningPublicKey()
    {
        return $this->AppSigningPublicKey;
    }

    /**
     * Sets app_signing_public_key
     * @param string $app_signing_public_key the AppSigningPublicKey details.
     * @return $this
     */
    public function setAppSigningPublicKey($app_signing_public_key)
    {

        $this->AppSigningPublicKey = $app_signing_public_key;
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

