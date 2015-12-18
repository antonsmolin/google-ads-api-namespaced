<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:18
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Income tiers that specify the income bracket a household falls under. TIER_1
 * belongs to the highest income bracket. The income bracket range associated with
 * each tier is defined per country and computed based on income percentiles.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class IncomeTier
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "IncomeTier";

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