<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * ExpressCheckoutRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * ExpressCheckoutRequest : This class contains methods require for express checkout request.
 *
 * @category    Class
 * @description This class contains methods require for express checkout request.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class ExpressCheckoutRequest
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'MerchantCheckoutId' => 'MerchantCheckoutId',
        'PrecheckoutTransactionId' => 'PrecheckoutTransactionId',
        'CurrencyCode' => 'CurrencyCode',
        'OrderAmount' => 'OrderAmount',
        'CardId' => 'CardId',
        'DigitalGoods' => 'DigitalGoods',
        'ShippingAddressId' => 'ShippingAddressId',
        'RewardProgramId' => 'RewardProgramId',
        'AdvancedCheckoutOverride' => 'AdvancedCheckoutOverride',
        'OriginUrl' => 'OriginUrl',
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
        'merchant_checkout_id' => 'setMerchantCheckoutId',
        'precheckout_transaction_id' => 'setPrecheckoutTransactionId',
        'currency_code' => 'setCurrencyCode',
        'order_amount' => 'setOrderAmount',
        'card_id' => 'setCardId',
        'digital_goods' => 'setDigitalGoods',
        'shipping_address_id' => 'setShippingAddressId',
        'reward_program_id' => 'setRewardProgramId',
        'advanced_checkout_override' => 'setAdvancedCheckoutOverride',
        'origin_url' => 'setOriginUrl',
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
        'merchant_checkout_id' => 'getMerchantCheckoutId',
        'precheckout_transaction_id' => 'getPrecheckoutTransactionId',
        'currency_code' => 'getCurrencyCode',
        'order_amount' => 'getOrderAmount',
        'card_id' => 'getCardId',
        'digital_goods' => 'getDigitalGoods',
        'shipping_address_id' => 'getShippingAddressId',
        'reward_program_id' => 'getRewardProgramId',
        'advanced_checkout_override' => 'getAdvancedCheckoutOverride',
        'origin_url' => 'getOriginUrl',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $merchant_checkout_id the merchant checkout id.
      * @var string
      */
    public $MerchantCheckoutId;

    /**
      * $precheckout_transaction_id the unique id of the transaction.
      * @var string
      */
    public $PrecheckoutTransactionId;

    /**
      * $currency_code the currency code as ISO 4217 standard (for example, USD).
      * @var string
      */
    public $CurrencyCode;

    /**
      * $order_amount the order amount of the transaction.
      * @var int
      */
    public $OrderAmount;

    /**
      * $card_id the id assigned to the card.
      * @var string
      */
    public $CardId;

    /**
      * $digital_goods the digital goods flag. Set to true if it's a digital good and no shipping is required (for example, digital music, online games, and so on); optional.
      * @var bool
      */
    public $DigitalGoods;

    /**
      * $shipping_address_id the id assigned to the shipping address.
      * @var string
      */
    public $ShippingAddressId;

    /**
      * $reward_program_id the id assigned to the reward program.
      * @var string
      */
    public $RewardProgramId;

    /**
      * $advanced_checkout_override the advanced checkout override flag. Set to true to override and disable 3-D Secure for current transaction.
      * @var bool
      */
    public $AdvancedCheckoutOverride;

    /**
      * $origin_url the URL that the merchant is using to initialize the Lightbox.
      * @var string
      */
    public $OriginUrl;

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
            $this->MerchantCheckoutId = isset($data["MerchantCheckoutId"])?$data["MerchantCheckoutId"]:"";
            $this->PrecheckoutTransactionId = isset($data["PrecheckoutTransactionId"])?$data["PrecheckoutTransactionId"]:"";
            $this->CurrencyCode = isset($data["CurrencyCode"])?$data["CurrencyCode"]:"";
            $this->OrderAmount = isset($data["OrderAmount"])?$data["OrderAmount"]:"";
            $this->CardId = isset($data["CardId"])?$data["CardId"]:"";
            $this->DigitalGoods = isset($data["DigitalGoods"])?$data["DigitalGoods"]:"";
            $this->ShippingAddressId = isset($data["ShippingAddressId"])?$data["ShippingAddressId"]:"";
            $this->RewardProgramId = isset($data["RewardProgramId"])?$data["RewardProgramId"]:"";
            $this->AdvancedCheckoutOverride = isset($data["AdvancedCheckoutOverride"])?$data["AdvancedCheckoutOverride"]:"";
            $this->OriginUrl = isset($data["OriginUrl"])?$data["OriginUrl"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets merchant_checkout_id
     * @return string
     */
    public function getMerchantCheckoutId()
    {
        return $this->MerchantCheckoutId;
    }

    /**
     * Sets merchant_checkout_id
     * @param string $merchant_checkout_id the merchant checkout id.
     * @return $this
     */
    public function setMerchantCheckoutId($merchant_checkout_id)
    {

        $this->MerchantCheckoutId = $merchant_checkout_id;
        return $this;
    }

    /**
     * Gets precheckout_transaction_id
     * @return string
     */
    public function getPrecheckoutTransactionId()
    {
        return $this->PrecheckoutTransactionId;
    }

    /**
     * Sets precheckout_transaction_id
     * @param string $precheckout_transaction_id the unique id of the transaction.
     * @return $this
     */
    public function setPrecheckoutTransactionId($precheckout_transaction_id)
    {

        $this->PrecheckoutTransactionId = $precheckout_transaction_id;
        return $this;
    }

    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets currency_code
     * @param string $currency_code the currency code as ISO 4217 standard (for example, USD).
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->CurrencyCode = $currency_code;
        return $this;
    }

    /**
     * Gets order_amount
     * @return int
     */
    public function getOrderAmount()
    {
        return $this->OrderAmount;
    }

    /**
     * Sets order_amount
     * @param int $order_amount the order amount of the transaction.
     * @return $this
     */
    public function setOrderAmount($order_amount)
    {

        $this->OrderAmount = $order_amount;
        return $this;
    }

    /**
     * Gets card_id
     * @return string
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * Sets card_id
     * @param string $card_id the id assigned to the card.
     * @return $this
     */
    public function setCardId($card_id)
    {

        $this->CardId = $card_id;
        return $this;
    }

    /**
     * Gets digital_goods
     * @return bool
     */
    public function getDigitalGoods()
    {
        return $this->DigitalGoods;
    }

    /**
     * Sets digital_goods
     * @param bool $digital_goods the digital goods flag. Set to true if it's a digital good and no shipping is required (for example, digital music, online games, and so on); optional.
     * @return $this
     */
    public function setDigitalGoods($digital_goods)
    {

        $this->DigitalGoods = $digital_goods;
        return $this;
    }

    /**
     * Gets shipping_address_id
     * @return string
     */
    public function getShippingAddressId()
    {
        return $this->ShippingAddressId;
    }

    /**
     * Sets shipping_address_id
     * @param string $shipping_address_id the id assigned to the shipping address.
     * @return $this
     */
    public function setShippingAddressId($shipping_address_id)
    {

        $this->ShippingAddressId = $shipping_address_id;
        return $this;
    }

    /**
     * Gets reward_program_id
     * @return string
     */
    public function getRewardProgramId()
    {
        return $this->RewardProgramId;
    }

    /**
     * Sets reward_program_id
     * @param string $reward_program_id the id assigned to the reward program.
     * @return $this
     */
    public function setRewardProgramId($reward_program_id)
    {

        $this->RewardProgramId = $reward_program_id;
        return $this;
    }

    /**
     * Gets advanced_checkout_override
     * @return bool
     */
    public function getAdvancedCheckoutOverride()
    {
        return $this->AdvancedCheckoutOverride;
    }

    /**
     * Sets advanced_checkout_override
     * @param bool $advanced_checkout_override the advanced checkout override flag. Set to true to override and disable 3-D Secure for current transaction.
     * @return $this
     */
    public function setAdvancedCheckoutOverride($advanced_checkout_override)
    {

        $this->AdvancedCheckoutOverride = $advanced_checkout_override;
        return $this;
    }

    /**
     * Gets origin_url
     * @return string
     */
    public function getOriginUrl()
    {
        return $this->OriginUrl;
    }

    /**
     * Sets origin_url
     * @param string $origin_url the URL that the merchant is using to initialize the Lightbox.
     * @return $this
     */
    public function setOriginUrl($origin_url)
    {

        $this->OriginUrl = $origin_url;
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

