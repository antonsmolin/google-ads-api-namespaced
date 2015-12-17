<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:45
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * A non-mutable specialization of an Advertising Channel.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdvertisingChannelSubType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdvertisingChannelSubType";

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