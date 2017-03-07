<?php

namespace Masterpass\MerchantSDK\Models;

/**
 * PrecheckoutRewardProgram
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * PrecheckoutRewardProgram : This class contains the methods for reward program such as reward id, reward name etc along with program expiry details.
 *
 * @category    Class
 * @description This class contains the methods for reward program such as reward id, reward name etc along with program expiry details.
 * @package     masterpass-merchant
 * @subpackage  model
 */

class PrecheckoutRewardProgram
{
    /**
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[]
      */
    static $attributeMap = array(
        'RewardNumber' => 'RewardNumber',
        'RewardId' => 'RewardId',
        'RewardName' => 'RewardName',
        'ExpiryMonth' => 'ExpiryMonth',
        'ExpiryYear' => 'ExpiryYear',
        'RewardProgramId' => 'RewardProgramId',
        'RewardLogoUrl' => 'RewardLogoUrl',
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
        'reward_number' => 'setRewardNumber',
        'reward_id' => 'setRewardId',
        'reward_name' => 'setRewardName',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
        'reward_program_id' => 'setRewardProgramId',
        'reward_logo_url' => 'setRewardLogoUrl',
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
        'reward_number' => 'getRewardNumber',
        'reward_id' => 'getRewardId',
        'reward_name' => 'getRewardName',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
        'reward_program_id' => 'getRewardProgramId',
        'reward_logo_url' => 'getRewardLogoUrl',
        'extension_point' => 'getExtensionPoint'
    );

    static function getters() {
        return self::$getters;
    }


    /**
      * $reward_number the consumers reward number associated with the reward program.
      * @var string
      */
    public $RewardNumber;

    /**
      * $reward_id the id associated with the reward program.
      * @var string
      */
    public $RewardId;

    /**
      * $reward_name the name of reward program.
      * @var string
      */
    public $RewardName;

    /**
      * $expiry_month the month when the reward program expires.
      * @var int
      */
    public $ExpiryMonth;

    /**
      * $expiry_year the year when the reward program expires.
      * @var int
      */
    public $ExpiryYear;

    /**
      * $reward_program_id the reward program id.
      * @var string
      */
    public $RewardProgramId;

    /**
      * $reward_logo_url the reward logo url.
      * @var string
      */
    public $RewardLogoUrl;

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
            $this->RewardNumber = isset($data["RewardNumber"])?$data["RewardNumber"]:"";
            $this->RewardId = isset($data["RewardId"])?$data["RewardId"]:"";
            $this->RewardName = isset($data["RewardName"])?$data["RewardName"]:"";
            $this->ExpiryMonth = isset($data["ExpiryMonth"])?$data["ExpiryMonth"]:"";
            $this->ExpiryYear = isset($data["ExpiryYear"])?$data["ExpiryYear"]:"";
            $this->RewardProgramId = isset($data["RewardProgramId"])?$data["RewardProgramId"]:"";
            $this->RewardLogoUrl = isset($data["RewardLogoUrl"])?$data["RewardLogoUrl"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }

    /**
     * Gets reward_number
     * @return string
     */
    public function getRewardNumber()
    {
        return $this->RewardNumber;
    }

    /**
     * Sets reward_number
     * @param string $reward_number the consumers reward number associated with the reward program.
     * @return $this
     */
    public function setRewardNumber($reward_number)
    {

        $this->RewardNumber = $reward_number;
        return $this;
    }

    /**
     * Gets reward_id
     * @return string
     */
    public function getRewardId()
    {
        return $this->RewardId;
    }

    /**
     * Sets reward_id
     * @param string $reward_id the id associated with the reward program.
     * @return $this
     */
    public function setRewardId($reward_id)
    {

        $this->RewardId = $reward_id;
        return $this;
    }

    /**
     * Gets reward_name
     * @return string
     */
    public function getRewardName()
    {
        return $this->RewardName;
    }

    /**
     * Sets reward_name
     * @param string $reward_name the name of reward program.
     * @return $this
     */
    public function setRewardName($reward_name)
    {

        $this->RewardName = $reward_name;
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
     * @param int $expiry_month the month when the reward program expires.
     * @return $this
     */
    public function setExpiryMonth($expiry_month)
    {

        $this->ExpiryMonth = $expiry_month;
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
     * @param int $expiry_year the year when the reward program expires.
     * @return $this
     */
    public function setExpiryYear($expiry_year)
    {

        $this->ExpiryYear = $expiry_year;
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
     * @param string $reward_program_id the reward program id.
     * @return $this
     */
    public function setRewardProgramId($reward_program_id)
    {

        $this->RewardProgramId = $reward_program_id;
        return $this;
    }

    /**
     * Gets reward_logo_url
     * @return string
     */
    public function getRewardLogoUrl()
    {
        return $this->RewardLogoUrl;
    }

    /**
     * Sets reward_logo_url
     * @param string $reward_logo_url the reward logo url.
     * @return $this
     */
    public function setRewardLogoUrl($reward_logo_url)
    {

        $this->RewardLogoUrl = $reward_logo_url;
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

