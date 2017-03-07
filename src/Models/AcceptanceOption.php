<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * AcceptanceOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * AcceptanceOption : This class contains methods to set acceptance options.
 *
 * @category    Class
 * @description This class contains methods to set acceptance options.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class AcceptanceOption
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'BrandId' => 'BrandId',
        'Types' => 'Types'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'brand_id' => 'setBrandId',
        'types' => 'setTypes'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'brand_id' => 'getBrandId',
        'types' => 'getTypes'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $brand_id the brand id.
      * @var string
      */
    public $BrandId;

    /**
      * $types the types.
      * @var \mastercard_masterpass_merchant\model\Types
      */
    public $Types;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->BrandId = isset($data["BrandId"])?$data["BrandId"]:"";
            $this->Types = isset($data["Types"])?$data["Types"]:"";
        }
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
     * @param string $brand_id the brand id.
     * @return $this
     */
    public function setBrandId($brand_id)
    {

        $this->BrandId = $brand_id;
        return $this;
    }

    /**
     * Gets types
     * @return \mastercard_masterpass_merchant\model\Types
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets types
     * @param \mastercard_masterpass_merchant\model\Types $types the types.
     * @return $this
     */
    public function setTypes($types)
    {

        $this->Types = $types;
        return $this;
    }




}

