<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:14
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Content label type.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ContentLabelType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ContentLabelType";

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