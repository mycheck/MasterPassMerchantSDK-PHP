<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutCard
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutCard :
 *
 * @category    Class
 * @description
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutCard extends BaseCard
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'LastFour' => 'LastFour',
        'CardId' => 'CardId',
        'BrandId' => 'BrandId',
        'CardAlias' => 'CardAlias',
        'ExpiryMonth' => 'ExpiryMonth',
        'SelectedAsDefault' => 'SelectedAsDefault',
        'BNBUnverified' => 'BNBUnverified',
        'CardHolderName' => 'CardHolderName',
        'ExtensionPoint' => 'CardExtension',
        'BillingAddress' => 'Address',
        'BrandName' => 'BrandName',
        'ExpiryYear' => 'ExpiryYear'
    );

    static function attributeMap() {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'last_four' => 'setLastFour',
        'card_id' => 'setCardId',
        'brand_id' => 'setBrandId',
        'card_alias' => 'setCardAlias',
        'expiry_month' => 'setExpiryMonth',
        'selected_as_default' => 'setSelectedAsDefault',
        'bnb_unverified' => 'setBnbUnverified',
        'card_holder_name' => 'setCardHolderName',
        'extension_point' => 'setExtensionPoint',
        'billing_address' => 'setBillingAddress',
        'brand_name' => 'setBrandName',
        'expiry_year' => 'setExpiryYear'
    );

    static function setters() {
        return parent::setters() + self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'last_four' => 'getLastFour',
        'card_id' => 'getCardId',
        'brand_id' => 'getBrandId',
        'card_alias' => 'getCardAlias',
        'expiry_month' => 'getExpiryMonth',
        'selected_as_default' => 'getSelectedAsDefault',
        'bnb_unverified' => 'getBnbUnverified',
        'card_holder_name' => 'getCardHolderName',
        'extension_point' => 'getExtensionPoint',
        'billing_address' => 'getBillingAddress',
        'brand_name' => 'getBrandName',
        'expiry_year' => 'getExpiryYear'
    );

    static function getters() {
        return parent::getters() + self::$getters;
    }


    /**
      * $last_four the last four digits of card.
      * @var string
      */
    public $LastFour;

    /**
      * $card_id the card id.
      * @var string
      */
    public $CardId;

    /**
      * $brand_id the card brand id, for example, master for MasterCard.
      * @var string
      */
    public $BrandId;

    /**
      * $card_alias the card alias.
      * @var string
      */
    public $CardAlias;

    /**
      * $expiry_month the expiration month displayed on the payment card.
      * @var int
      */
    public $ExpiryMonth;

    /**
      * $selected_as_default the default selection.
      * @var bool
      */
    public $SelectedAsDefault;

    /**
      * $bnb_unverified the flag for BNB unverified.
      * @var bool
      */
    public $BNBUnverified;

    /**
      * $card_holder_name the cardholder name.
      * @var string
      */
    public $CardHolderName;

    /**
      * $extension_point the ExtensionPoint for future enhancement.
      * @var \mastercard_masterpass_merchant\model\CardExtension
      */
    public $ExtensionPoint;

    /**
      * $billing_address the billing address for the card holder.
      * @var \mastercard_masterpass_merchant\model\Address
      */
    public $BillingAddress;

    /**
      * $brand_name the card brand name, for example, MasterCard.
      * @var string
      */
    public $BrandName;

    /**
      * $expiry_year the expiration year displayed on the payment card.
      * @var int
      */
    public $ExpiryYear;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        if ($data != null) {
            $this->LastFour = isset($data["LastFour"])?$data["LastFour"]:"";
            $this->CardId = isset($data["CardId"])?$data["CardId"]:"";
            $this->BrandId = isset($data["BrandId"])?$data["BrandId"]:"";
            $this->CardAlias = isset($data["CardAlias"])?$data["CardAlias"]:"";
            $this->ExpiryMonth = isset($data["ExpiryMonth"])?$data["ExpiryMonth"]:"";
            $this->SelectedAsDefault = isset($data["SelectedAsDefault"])?$data["SelectedAsDefault"]:"";
            $this->BNBUnverified = isset($data["BNBUnverified"])?$data["BNBUnverified"]:"";
            $this->CardHolderName = isset($data["CardHolderName"])?$data["CardHolderName"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
            $this->BillingAddress = isset($data["BillingAddress"])?$data["BillingAddress"]:"";
            $this->BrandName = isset($data["BrandName"])?$data["BrandName"]:"";
            $this->ExpiryYear = isset($data["ExpiryYear"])?$data["ExpiryYear"]:"";
        }
    }

    /**
     * Gets last_four
     * @return string
     */
    public function getLastFour()
    {
        return $this->LastFour;
    }

    /**
     * Sets last_four
     * @param string $last_four the last four digits of card.
     * @return $this
     */
    public function setLastFour($last_four)
    {

        $this->LastFour = $last_four;
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
     * @param string $card_id the card id.
     * @return $this
     */
    public function setCardId($card_id)
    {

        $this->CardId = $card_id;
        return $this;
    }

    /**
     * Gets brand_id
     * @return string
     */
    public function getBrandId()
    {
        return $this->BrandId;
    }

    /**
     * Sets brand_id
     * @param string $brand_id the card brand id, for example, master for MasterCard.
     * @return $this
     */
    public function setBrandId($brand_id)
    {

        $this->BrandId = $brand_id;
        return $this;
    }

    /**
     * Gets card_alias
     * @return string
     */
    public function getCardAlias()
    {
        return $this->CardAlias;
    }

    /**
     * Sets card_alias
     * @param string $card_alias the card alias.
     * @return $this
     */
    public function setCardAlias($card_alias)
    {

        $this->CardAlias = $card_alias;
        return $this;
    }

    /**
     * Gets expiry_month
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->ExpiryMonth;
    }

    /**
     * Sets expiry_month
     * @param int $expiry_month the expiration month displayed on the payment card.
     * @return $this
     */
    public function setExpiryMonth($expiry_month)
    {

        $this->ExpiryMonth = $expiry_month;
        return $this;
    }

    /**
     * Gets selected_as_default
     * @return bool
     */
    public function getSelectedAsDefault()
    {
        return $this->SelectedAsDefault;
    }

    /**
     * Sets selected_as_default
     * @param bool $selected_as_default the default selection.
     * @return $this
     */
    public function setSelectedAsDefault($selected_as_default)
    {

        $this->SelectedAsDefault = $selected_as_default;
        return $this;
    }

    /**
     * Gets bnb_unverified
     * @return bool
     */
    public function getBnbUnverified()
    {
        return $this->BNBUnverified;
    }

    /**
     * Sets bnb_unverified
     * @param bool $bnb_unverified the flag for BNB unverified.
     * @return $this
     */
    public function setBnbUnverified($bnb_unverified)
    {

        $this->BNBUnverified = $bnb_unverified;
        return $this;
    }

    /**
     * Gets card_holder_name
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }

    /**
     * Sets card_holder_name
     * @param string $card_holder_name the cardholder name.
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {

        $this->CardHolderName = $card_holder_name;
        return $this;
    }

    /**
     * Gets extension_point
     * @return \mastercard_masterpass_merchant\model\CardExtension
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param \mastercard_masterpass_merchant\model\CardExtension $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {

        $this->ExtensionPoint = $extension_point;
        return $this;
    }

    /**
     * Gets billing_address
     * @return \mastercard_masterpass_merchant\model\Address
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }

    /**
     * Sets billing_address
     * @param \mastercard_masterpass_merchant\model\Address $billing_address the billing address for the card holder.
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {

        $this->BillingAddress = $billing_address;
        return $this;
    }

    /**
     * Gets brand_name
     * @return string
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }

    /**
     * Sets brand_name
     * @param string $brand_name the card brand name, for example, MasterCard.
     * @return $this
     */
    public function setBrandName($brand_name)
    {

        $this->BrandName = $brand_name;
        return $this;
    }

    /**
     * Gets expiry_year
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->ExpiryYear;
    }

    /**
     * Sets expiry_year
     * @param int $expiry_year the expiration year displayed on the payment card.
     * @return $this
     */
    public function setExpiryYear($expiry_year)
    {

        $this->ExpiryYear = $expiry_year;
        return $this;
    }




}

