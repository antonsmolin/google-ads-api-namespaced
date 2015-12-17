<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:57
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of campaigns that meet the selector criteria.
 *
 * @param serviceSelector the selector specifying the {@link Campaign}s to return.
 *
 * @return A list of campaigns.
 * @throws ApiException if problems occurred while fetching campaign information.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }

}