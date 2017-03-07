<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutData
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutData : This class contains different methods for different types of precheckout data like card, contact, shipping address and reward program details.
 *
 * @category    Class
 * @description This class contains different methods for different types of precheckout data like card, contact, shipping address and reward program details.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutData
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Cards' => 'PrecheckoutCards',
        'Contact' => 'Contact',
        'ShippingAddresses' => 'PrecheckoutShippingAddresses',
        'RewardPrograms' => 'RewardPrograms',
        'WalletName' => 'WalletName',
        'PrecheckoutTransactionId' => 'PrecheckoutTransactionId',
        'ConsumerWalletId' => 'ConsumerWalletId',
        'Errors' => 'Errors',
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
        'cards' => 'setCards',
        'contact' => 'setContact',
        'shipping_addresses' => 'setShippingAddresses',
        'reward_programs' => 'setRewardPrograms',
        'wallet_name' => 'setWalletName',
        'precheckout_transaction_id' => 'setPrecheckoutTransactionId',
        'consumer_wallet_id' => 'setConsumerWalletId',
        'errors' => 'setErrors',
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
        'cards' => 'getCards',
        'contact' => 'getContact',
        'shipping_addresses' => 'getShippingAddresses',
        'reward_programs' => 'getRewardPrograms',
        'wallet_name' => 'getWalletName',
        'precheckout_transaction_id' => 'getPrecheckoutTransactionId',
        'consumer_wallet_id' => 'getConsumerWalletId',
        'errors' => 'getErrors',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $cards the cards.
      * @var \mastercard_masterpass_merchant\model\PrecheckoutCards
      */
    public $Cards;

    /**
      * $contact the contact details.
      * @var \mastercard_masterpass_merchant\model\Contact
      */
    public $Contact;

    /**
      * $shipping_addresses the shipping address details.
      * @var \mastercard_masterpass_merchant\model\PrecheckoutShippingAddresses
      */
    public $ShippingAddresses;

    /**
      * $reward_programs the reward program details.
      * @var \mastercard_masterpass_merchant\model\RewardPrograms
      */
    public $RewardPrograms;

    /**
      * $wallet_name the wallet name.
      * @var string
      */
    public $WalletName;

    /**
      * $precheckout_transaction_id the precheckout transaction id.
      * @var string
      */
    public $PrecheckoutTransactionId;

    /**
      * $consumer_wallet_id the consumer wallet id.
      * @var string
      */
    public $ConsumerWalletId;

    /**
      * $errors the errors information.
      * @var \mastercard_masterpass_merchant\model\Errors
      */
    public $Errors;

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
            $this->Cards = isset($data["Cards"])?$data["Cards"]:"";
            $this->Contact = isset($data["Contact"])?$data["Contact"]:"";
            $this->ShippingAddresses = isset($data["ShippingAddresses"])?$data["ShippingAddresses"]:"";
            $this->RewardPrograms = isset($data["RewardPrograms"])?$data["RewardPrograms"]:"";
            $this->WalletName = isset($data["WalletName"])?$data["WalletName"]:"";
            $this->PrecheckoutTransactionId = isset($data["PrecheckoutTransactionId"])?$data["PrecheckoutTransactionId"]:"";
            $this->ConsumerWalletId = isset($data["ConsumerWalletId"])?$data["ConsumerWalletId"]:"";
            $this->Errors = isset($data["Errors"])?$data["Errors"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets cards
     * @return \mastercard_masterpass_merchant\model\PrecheckoutCards
     */
    public function getCards()
    {
        return $this->Cards;
    }

    /**
     * Sets cards
     * @param \mastercard_masterpass_merchant\model\PrecheckoutCards $cards the cards.
     * @return $this
     */
    public function setCards($cards)
    {

        $this->Cards = $cards;
        return $this;
    }

    /**
     * Gets contact
     * @return \mastercard_masterpass_merchant\model\Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * Sets contact
     * @param \mastercard_masterpass_merchant\model\Contact $contact the contact details.
     * @return $this
     */
    public function setContact($contact)
    {

        $this->Contact = $contact;
        return $this;
    }

    /**
     * Gets shipping_addresses
     * @return \mastercard_masterpass_merchant\model\PrecheckoutShippingAddresses
     */
    public function getShippingAddresses()
    {
        return $this->ShippingAddresses;
    }

    /**
     * Sets shipping_addresses
     * @param \mastercard_masterpass_merchant\model\PrecheckoutShippingAddresses $shipping_addresses the shipping address details.
     * @return $this
     */
    public function setShippingAddresses($shipping_addresses)
    {

        $this->ShippingAddresses = $shipping_addresses;
        return $this;
    }

    /**
     * Gets reward_programs
     * @return \mastercard_masterpass_merchant\model\RewardPrograms
     */
    public function getRewardPrograms()
    {
        return $this->RewardPrograms;
    }

    /**
     * Sets reward_programs
     * @param \mastercard_masterpass_merchant\model\RewardPrograms $reward_programs the reward program details.
     * @return $this
     */
    public function setRewardPrograms($reward_programs)
    {

        $this->RewardPrograms = $reward_programs;
        return $this;
    }

    /**
     * Gets wallet_name
     * @return string
     */
    public function getWalletName()
    {
        return $this->WalletName;
    }

    /**
     * Sets wallet_name
     * @param string $wallet_name the wallet name.
     * @return $this
     */
    public function setWalletName($wallet_name)
    {

        $this->WalletName = $wallet_name;
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
     * @param string $precheckout_transaction_id the precheckout transaction id.
     * @return $this
     */
    public function setPrecheckoutTransactionId($precheckout_transaction_id)
    {

        $this->PrecheckoutTransactionId = $precheckout_transaction_id;
        return $this;
    }

    /**
     * Gets consumer_wallet_id
     * @return string
     */
    public function getConsumerWalletId()
    {
        return $this->ConsumerWalletId;
    }

    /**
     * Sets consumer_wallet_id
     * @param string $consumer_wallet_id the consumer wallet id.
     * @return $this
     */
    public function setConsumerWalletId($consumer_wallet_id)
    {

        $this->ConsumerWalletId = $consumer_wallet_id;
        return $this;
    }

    /**
     * Gets errors
     * @return \mastercard_masterpass_merchant\model\Errors
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets errors
     * @param \mastercard_masterpass_merchant\model\Errors $errors the errors information.
     * @return $this
     */
    public function setErrors($errors)
    {

        $this->Errors = $errors;
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

