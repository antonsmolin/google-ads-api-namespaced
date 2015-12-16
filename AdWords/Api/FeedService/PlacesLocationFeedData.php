<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 15:08
 */

namespace GoogleAdsApi\AdWords\Api\FeedService;
use GoogleAdsApi\AdWords\Util\SystemFeedGenerationData;

/**
 * Data used to configure a location feed populated from
 * Google My Business Locations.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class PlacesLocationFeedData extends SystemFeedGenerationData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "PlacesLocationFeedData";

    /**
     * @access public
     * @var OAuthInfo
     */
    public $oAuthInfo;

    /**
     * @access public
     * @var string
     */
    public $emailAddress;

    /**
     * @access public
     * @var string
     */
    public $businessAccountIdentifier;

    /**
     * @access public
     * @var string
     */
    public $businessNameFilter;

    /**
     * @access public
     * @var string[]
     */
    public $categoryFilters;

    /**
     * @access public
     * @var string[]
     */
    public $labelFilters;

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

    public function __construct($oAuthInfo = null, $emailAddress = null, $businessAccountIdentifier = null, $businessNameFilter = null, $categoryFilters = null, $labelFilters = null, $SystemFeedGenerationDataType = null)
    {
        parent::__construct();
        $this->oAuthInfo = $oAuthInfo;
        $this->emailAddress = $emailAddress;
        $this->businessAccountIdentifier = $businessAccountIdentifier;
        $this->businessNameFilter = $businessNameFilter;
        $this->categoryFilters = $categoryFilters;
        $this->labelFilters = $labelFilters;
        $this->SystemFeedGenerationDataType = $SystemFeedGenerationDataType;
    }

}