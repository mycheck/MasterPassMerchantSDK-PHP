<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PaymentOptionsExtensions
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PaymentOptionsExtensions : This class contains methods to set extensions such as installments, payment acceptance.
 *
 * @category    Class
 * @description This class contains methods to set extensions such as installments, payment acceptance.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PaymentOptionsExtensions
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Installments' => 'Installments',
        'PaymentAcceptance' => 'PaymentAcceptance'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'installments' => 'setInstallments',
        'payment_acceptance' => 'setPaymentAcceptance'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'installments' => 'getInstallments',
        'payment_acceptance' => 'getPaymentAcceptance'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $installments the installments.
      * @var \mastercard_masterpass_merchant\model\Installments
      */
    public $Installments;

    /**
      * $payment_acceptance the payment acceptance.
      * @var \mastercard_masterpass_merchant\model\PaymentAcceptance
      */
    public $PaymentAcceptance;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Installments = isset($data["Installments"])?$data["Installments"]:"";
            $this->PaymentAcceptance = isset($data["PaymentAcceptance"])?$data["PaymentAcceptance"]:"";
        }
    }

    /**
     * Gets installments
     * @return \mastercard_masterpass_merchant\model\Installments
     */
    public function getInstallments()
    {
        return $this->Installments;
    }

    /**
     * Sets installments
     * @param \mastercard_masterpass_merchant\model\Installments $installments the installments.
     * @return $this
     */
    public function setInstallments($installments)
    {

        $this->Installments = $installments;
        return $this;
    }

    /**
     * Gets payment_acceptance
     * @return \mastercard_masterpass_merchant\model\PaymentAcceptance
     */
    public function getPaymentAcceptance()
    {
        return $this->PaymentAcceptance;
    }

    /**
     * Sets payment_acceptance
     * @param \mastercard_masterpass_merchant\model\PaymentAcceptance $payment_acceptance the payment acceptance.
     * @return $this
     */
    public function setPaymentAcceptance($payment_acceptance)
    {

        $this->PaymentAcceptance = $payment_acceptance;
        return $this;
    }




}

