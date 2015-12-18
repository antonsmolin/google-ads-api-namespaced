<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:20
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Categories to identify places of interest.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class PlacesOfInterestOperandCategory
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "PlacesOfInterestOperand.Category";

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