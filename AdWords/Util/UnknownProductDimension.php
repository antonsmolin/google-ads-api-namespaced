<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:49
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * An unknown product dimension type which will be returned in place of any ProductDimension not
 * supported by the clients current API version.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class UnknownProductDimension extends ProductDimension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "UnknownProductDimension";

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

    public function __construct($ProductDimensionType = null)
    {
        parent::__construct();
        $this->ProductDimensionType = $ProductDimensionType;
    }

}