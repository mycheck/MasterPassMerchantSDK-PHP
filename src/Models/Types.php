<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * Types
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * Types : This class contains methods to set different types.
 *
 * @category    Class
 * @description This class contains methods to set different types.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class Types
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'Type' => 'Type'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $type the type.
      * @var string
      */
    public $Type;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Type = isset($data["Type"])?$data["Type"]:"";
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
     * @param string $type the type.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("CREDIT", "DEBIT");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'CREDIT', 'DEBIT'");
        }
        $this->Type = $type;
        return $this;
    }




}

