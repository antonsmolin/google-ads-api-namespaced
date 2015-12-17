<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 13:10
 */

namespace GoogleAdsApi\AdWords\Api\FeedItemService;

/**
 * Represents an item in a feed.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "FeedItem";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $feedItemId;

    /**
     * @access public
     * @var tnsFeedItemStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $startTime;

    /**
     * @access public
     * @var string
     */
    public $endTime;

    /**
     * @access public
     * @var FeedItemAttributeValue[]
     */
    public $attributeValues;

    /**
     * @access public
     * @var FeedItemPolicyData[]
     */
    public $policyData;

    /**
     * @access public
     * @var FeedItemDevicePreference
     */
    public $devicePreference;

    /**
     * @access public
     * @var FeedItemScheduling
     */
    public $scheduling;

    /**
     * @access public
     * @var FeedItemCampaignTargeting
     */
    public $campaignTargeting;

    /**
     * @access public
     * @var FeedItemAdGroupTargeting
     */
    public $adGroupTargeting;

    /**
     * @access public
     * @var Keyword
     */
    public $keywordTargeting;

    /**
     * @access public
     * @var Location
     */
    public $geoTargeting;

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

    public function __construct($feedId = null, $feedItemId = null, $status = null, $startTime = null, $endTime = null, $attributeValues = null, $policyData = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $urlCustomParameters = null)
    {
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->attributeValues = $attributeValues;
        $this->policyData = $policyData;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->campaignTargeting = $campaignTargeting;
        $this->adGroupTargeting = $adGroupTargeting;
        $this->keywordTargeting = $keywordTargeting;
        $this->geoTargeting = $geoTargeting;
        $this->urlCustomParameters = $urlCustomParameters;
    }

}