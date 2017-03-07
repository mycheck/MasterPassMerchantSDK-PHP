<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * RewardPrograms
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * RewardPrograms : This class contains consumer reward program information.
 *
 * @category    Class
 * @description This class contains consumer reward program information.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class RewardPrograms
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'RewardProgram' => 'PrecheckoutRewardProgram',
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
        'reward_program' => 'setRewardProgram',
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
        'reward_program' => 'getRewardProgram',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $reward_program the reward program details.
      * @var \mastercard_masterpass_merchant\model\PrecheckoutRewardProgram[]
      */
    public $RewardProgram;

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
            $this->RewardProgram = isset($data["RewardProgram"])?$data["RewardProgram"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets reward_program
     * @return \mastercard_masterpass_merchant\model\PrecheckoutRewardProgram[]
     */
    public function getRewardProgram()
    {
        return $this->RewardProgram;
    }

    /**
     * Sets reward_program
     * @param \mastercard_masterpass_merchant\model\PrecheckoutRewardProgram[] $reward_program the reward program details.
     * @return $this
     */
    public function setRewardProgram($reward_program)
    {

        $this->RewardProgram = $reward_program;
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

