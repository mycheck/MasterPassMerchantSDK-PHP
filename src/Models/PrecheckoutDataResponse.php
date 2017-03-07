<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutDataResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutDataResponse : This class returns the precheckout data.
 *
 * @category    Class
 * @description This class returns the precheckout data.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutDataResponse
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'PrecheckoutData' => 'PrecheckoutData',
        'WalletPartnerLogoUrl' => 'WalletPartnerLogoUrl',
        'MasterpassLogoUrl' => 'MasterpassLogoUrl',
        'LongAccessToken' => 'LongAccessToken',
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
        'precheckout_data' => 'setPrecheckoutData',
        'wallet_partner_logo_url' => 'setWalletPartnerLogoUrl',
        'masterpass_logo_url' => 'setMasterpassLogoUrl',
        'long_access_token' => 'setLongAccessToken',
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
        'precheckout_data' => 'getPrecheckoutData',
        'wallet_partner_logo_url' => 'getWalletPartnerLogoUrl',
        'masterpass_logo_url' => 'getMasterpassLogoUrl',
        'long_access_token' => 'getLongAccessToken',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $precheckout_data the precheckout data details.
      * @var \mastercard_masterpass_merchant\model\PrecheckoutData
      */
    public $PrecheckoutData;

    /**
      * $wallet_partner_logo_url the wallet partner logo url.
      * @var string
      */
    public $WalletPartnerLogoUrl;

    /**
      * $masterpass_logo_url the MasterPass logo url.
      * @var string
      */
    public $MasterpassLogoUrl;

    /**
      * $long_access_token the long access token.
      * @var string
      */
    public $LongAccessToken;

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
            $this->PrecheckoutData = isset($data["PrecheckoutData"])?$data["PrecheckoutData"]:"";
            $this->WalletPartnerLogoUrl = isset($data["WalletPartnerLogoUrl"])?$data["WalletPartnerLogoUrl"]:"";
            $this->MasterpassLogoUrl = isset($data["MasterpassLogoUrl"])?$data["MasterpassLogoUrl"]:"";
            $this->LongAccessToken = isset($data["LongAccessToken"])?$data["LongAccessToken"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets precheckout_data
     * @return \mastercard_masterpass_merchant\model\PrecheckoutData
     */
    public function getPrecheckoutData()
    {
        return $this->PrecheckoutData;
    }

    /**
     * Sets precheckout_data
     * @param \mastercard_masterpass_merchant\model\PrecheckoutData $precheckout_data the precheckout data details.
     * @return $this
     */
    public function setPrecheckoutData($precheckout_data)
    {

        $this->PrecheckoutData = $precheckout_data;
        return $this;
    }

    /**
     * Gets wallet_partner_logo_url
     * @return string
     */
    public function getWalletPartnerLogoUrl()
    {
        return $this->WalletPartnerLogoUrl;
    }

    /**
     * Sets wallet_partner_logo_url
     * @param string $wallet_partner_logo_url the wallet partner logo url.
     * @return $this
     */
    public function setWalletPartnerLogoUrl($wallet_partner_logo_url)
    {

        $this->WalletPartnerLogoUrl = $wallet_partner_logo_url;
        return $this;
    }

    /**
     * Gets masterpass_logo_url
     * @return string
     */
    public function getMasterpassLogoUrl()
    {
        return $this->MasterpassLogoUrl;
    }

    /**
     * Sets masterpass_logo_url
     * @param string $masterpass_logo_url the MasterPass logo url.
     * @return $this
     */
    public function setMasterpassLogoUrl($masterpass_logo_url)
    {

        $this->MasterpassLogoUrl = $masterpass_logo_url;
        return $this;
    }

    /**
     * Gets long_access_token
     * @return string
     */
    public function getLongAccessToken()
    {
        return $this->LongAccessToken;
    }

    /**
     * Sets long_access_token
     * @param string $long_access_token the long access token.
     * @return $this
     */
    public function setLongAccessToken($long_access_token)
    {

        $this->LongAccessToken = $long_access_token;
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

