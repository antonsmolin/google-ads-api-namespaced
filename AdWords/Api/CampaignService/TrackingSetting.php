<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:43
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * Campaign level settings for tracking information.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class TrackingSetting extends Setting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "TrackingSetting";

    /**
     * @access public
     * @var string
     */
    public $trackingUrl;

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

    public function __construct($trackingUrl = null, $SettingType = null)
    {
        parent::__construct();
        $this->trackingUrl = $trackingUrl;
        $this->SettingType = $SettingType;
    }

}