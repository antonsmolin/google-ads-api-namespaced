<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:48
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Scope of products. Contains a set of product dimensions, all of which a product has to match to
 * be included in the campaign. These product dimensions must have a value; the "everything else"
 * case without a value is not allowed.
 *
 * <p>If there is no {@code ProductScope}, all products are included in the campaign. If a campaign
 * has more than one {@code ProductScope}, products are included as long as they match any.
 * Campaigns of {@link AdvertisingChannelType#SHOPPING} can have at most one {@code ProductScope}.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ProductScope extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ProductScope";

    /**
     * @access public
     * @var ProductDimension[]
     */
    public $dimensions;

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

    public function __construct($dimensions = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->dimensions = $dimensions;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}