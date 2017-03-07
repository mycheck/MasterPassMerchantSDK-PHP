<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * DSRPOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * DSRPOptions : This class contains methods require to set DSRP options for merchant initialization request during DSRP.
 *
 * @category    Class
 * @description This class contains methods require to set DSRP options for merchant initialization request during DSRP.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class DSRPOptions
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Option' => 'Option',
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
        'option' => 'setOption',
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
        'option' => 'getOption',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $option the DSRP option.
      * @var \mastercard_masterpass_merchant\model\Option[]
      */
    public $Option;

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
            $this->Option = isset($data["Option"])?$data["Option"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets option
     * @return \mastercard_masterpass_merchant\model\Option[]
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Sets option
     * @param \mastercard_masterpass_merchant\model\Option[] $option the DSRP option.
     * @return $this
     */
    public function setOption($option)
    {

        $this->Option = $option;
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

