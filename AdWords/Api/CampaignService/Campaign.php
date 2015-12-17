<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:04
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * Data representing an AdWords campaign.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Campaign
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Campaign";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsCampaignStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsServingStatus
     */
    public $servingStatus;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

    /**
     * @access public
     * @var Budget
     */
    public $budget;

    /**
     * @access public
     * @var ConversionOptimizerEligibility
     */
    public $conversionOptimizerEligibility;

    /**
     * @access public
     * @var tnsAdServingOptimizationStatus
     */
    public $adServingOptimizationStatus;

    /**
     * @access public
     * @var FrequencyCap
     */
    public $frequencyCap;

    /**
     * @access public
     * @var Setting[]
     */
    public $settings;

    /**
     * @access public
     * @var tnsAdvertisingChannelType
     */
    public $advertisingChannelType;

    /**
     * @access public
     * @var tnsAdvertisingChannelSubType
     */
    public $advertisingChannelSubType;

    /**
     * @access public
     * @var NetworkSetting
     */
    public $networkSetting;

    /**
     * @access public
     * @var Label[]
     */
    public $labels;

    /**
     * @access public
     * @var BiddingStrategyConfiguration
     */
    public $biddingStrategyConfiguration;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

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

    public function __construct($id = null, $name = null, $status = null, $servingStatus = null, $startDate = null, $endDate = null, $budget = null, $conversionOptimizerEligibility = null, $adServingOptimizationStatus = null, $frequencyCap = null, $settings = null, $advertisingChannelType = null, $advertisingChannelSubType = null, $networkSetting = null, $labels = null, $biddingStrategyConfiguration = null, $forwardCompatibilityMap = null, $trackingUrlTemplate = null, $urlCustomParameters = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->servingStatus = $servingStatus;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->budget = $budget;
        $this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
        $this->adServingOptimizationStatus = $adServingOptimizationStatus;
        $this->frequencyCap = $frequencyCap;
        $this->settings = $settings;
        $this->advertisingChannelType = $advertisingChannelType;
        $this->advertisingChannelSubType = $advertisingChannelSubType;
        $this->networkSetting = $networkSetting;
        $this->labels = $labels;
        $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
        $this->urlCustomParameters = $urlCustomParameters;
    }

}