<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:39
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * Setting for shopping campaigns. Defines the universe of products covered by the campaign.
 * Encapsulates a merchant ID, sales country, and campaign priority.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ShoppingSetting extends Setting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ShoppingSetting";

    /**
     * @access public
     * @var integer
     */
    public $merchantId;

    /**
     * @access public
     * @var string
     */
    public $salesCountry;

    /**
     * @access public
     * @var integer
     */
    public $campaignPriority;

    /**
     * @access public
     * @var boolean
     */
    public $enableLocal;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($merchantId = null, $salesCountry = null, $campaignPriority = null, $enableLocal = null, $SettingType = null)
    {
        parent::__construct();
        $this->merchantId = $merchantId;
        $this->salesCountry = $salesCountry;
        $this->campaignPriority = $campaignPriority;
        $this->enableLocal = $enableLocal;
        $this->SettingType = $SettingType;
    }

}