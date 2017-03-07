<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * ShoppingCartRequestExtensionPoint
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * ShoppingCartRequestExtensionPoint : This class contains additional details for the shopping cart request.
 *
 * @category    Class
 * @description This class contains additional details for the shopping cart request.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class ShoppingCartRequestExtensionPoint
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'SecondaryOriginUrl' => 'SecondaryOriginUrl'
    );

    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'secondary_origin_url' => 'setSecondaryOriginUrl'
    );

    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'secondary_origin_url' => 'getSecondaryOriginUrl'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $secondary_origin_url the secondary URL.
      * @var string
      */
    public $SecondaryOriginUrl;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->SecondaryOriginUrl = isset($data["SecondaryOriginUrl"])?$data["SecondaryOriginUrl"]:"";
        }
    }

    /**
     * Gets secondary_origin_url
     * @return string
     */
    public function getSecondaryOriginUrl()
    {
        return $this->SecondaryOriginUrl;
    }

    /**
     * Sets secondary_origin_url
     * @param string $secondary_origin_url the secondary URL.
     * @return $this
     */
    public function setSecondaryOriginUrl($secondary_origin_url)
    {

        $this->SecondaryOriginUrl = $secondary_origin_url;
        return $this;
    }




}

