<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:48
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * One element of a product type string at a certain level. Top-level product types are at level 1,
 * their children at level 2, and so on. We currently support up to 5 levels. The user must specify
 * a dimension type that indicates the level of the product type. All cases of the same
 * subdivision must have the same dimension type (product type level).
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ProductType extends ProductDimension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ProductType";

    /**
     * @access public
     * @var tnsProductDimensionType
     */
    public $type;

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

    public function __construct($type = null, $value = null, $ProductDimensionType = null)
    {
        parent::__construct();
        $this->type = $type;
        $this->value = $value;
        $this->ProductDimensionType = $ProductDimensionType;
    }

}