<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:30
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * An {@code adwords grouping} string. Not supported by campaigns of
 * {@link AdvertisingChannelType#SHOPPING}.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ProductAdwordsGrouping extends ProductDimension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ProductAdwordsGrouping";

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