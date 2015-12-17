<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:03
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * Setting for controlling Dynamic Search Ads (DSA). Contains the domain name and the language
 * used by the DSA system to automatically generate landing pages and keywords for a campaign.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class DynamicSearchAdsSetting extends Setting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "DynamicSearchAdsSetting";

    /**
     * @access public
     * @var string
     */
    public $domainName;

    /**
     * @access public
     * @var string
     */
    public $languageCode;

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

    public function __construct($domainName = null, $languageCode = null, $SettingType = null)
    {
        parent::__construct();
        $this->domainName = $domainName;
        $this->languageCode = $languageCode;
        $this->SettingType = $SettingType;
    }

}