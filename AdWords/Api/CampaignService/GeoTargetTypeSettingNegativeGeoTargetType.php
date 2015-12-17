<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:51
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * The various signals a negative location target may use.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class GeoTargetTypeSettingNegativeGeoTargetType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "GeoTargetTypeSetting.NegativeGeoTargetType";

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

    public function __construct()
    {
    }

}