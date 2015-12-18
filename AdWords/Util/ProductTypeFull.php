<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:48
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * A full product type string. Category of the product according to the merchant's own
 * classification. Example:
 *
 * <pre>{@code "Home & Garden > Kitchen & Dining > Kitchen Appliances > Refrigerators"}</pre>
 *
 * <p>Not supported by campaigns of {@link AdvertisingChannelType#SHOPPING}.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ProductTypeFull extends ProductDimension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ProductTypeFull";

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($value = null, $ProductDimensionType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ProductDimensionType = $ProductDimensionType;
    }

}