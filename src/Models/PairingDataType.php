<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PairingDataType
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PairingDataType : This class contains methods to set different pairing data types.
 *
 * @category    Class
 * @description This class contains methods to set different pairing data types.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PairingDataType
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Type' => 'Type',
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
        'type' => 'setType',
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
        'type' => 'getType',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $type the different pairing data types like Card, Address, Reward Program and Profile.
      * @var string
      */
    public $Type;

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
            $this->Type = isset($data["Type"])?$data["Type"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets type
     * @param string $type the different pairing data types like Card, Address, Reward Program and Profile.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("CARD", "ADDRESS", "REWARD_PROGRAM", "PROFILE");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'CARD', 'ADDRESS', 'REWARD_PROGRAM', 'PROFILE'");
        }
        $this->Type = $type;
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

