<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:11
 */

namespace GoogleAdsApi\AdWords\Api\BiddingStrategyService;

/**
 * Enhanced CPC is a bidding strategy that raises your bids for clicks that seem more likely to
 * lead to a conversion and lowers them for clicks where they seem less likely.
 *
 * This bidding scheme does not support criteria level bidding strategy overrides.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class EnhancedCpcBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "EnhancedCpcBiddingScheme";

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

    public function __construct($BiddingSchemeType = null)
    {
        parent::__construct();
        $this->BiddingSchemeType = $BiddingSchemeType;
    }

}