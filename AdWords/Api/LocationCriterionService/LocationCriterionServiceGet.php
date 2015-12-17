<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:34
 */

namespace GoogleAdsApi\AdWords\Api\LocationCriterionService;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of {@link LocationCriterion}'s that match the specified selector.
 *
 * @param selector filters the LocationCriterion to be returned.
 *
 * @return A list of location criterion.
 * @throws ApiException when there is at least one error with the request.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LocationCriterionServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }

}