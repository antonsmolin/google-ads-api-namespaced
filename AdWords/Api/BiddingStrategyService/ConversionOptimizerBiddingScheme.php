<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:08
 */

namespace GoogleAdsApi\AdWords\Api\BiddingStrategyService;

/**
 * Conversion optimizer bidding strategy helps you maximize your return on investment
 * (ROI) by automatically getting you the most possible conversions for your budget.
 *
 * <p class="warning">{@code pricingMode} currently defaults to {@code CLICKS} and
 * cannot be changed.</p>
 *
 * <p>Note that campaigns must meet <a
 * href="https://support.google.com/adwords/answer/2471188#CORequirements">
 * specific eligibility requirements</a> before they can use the
 * <code>ConversionOptimizer</code> bidding strategy.</p>
 *
 * <p>For more information on conversion optimizer, visit the
 * <a href="https://support.google.com/adwords/answer/2471188"
 * >Conversion Optimizer help center</a>.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ConversionOptimizerBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ConversionOptimizerBiddingScheme";

    /**
     * @access public
     * @var tnsConversionOptimizerBiddingSchemePricingMode
     */
    public $pricingMode;

    /**
     * @access public
     * @var tnsConversionOptimizerBiddingSchemeBidType
     */
    public $bidType;

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

    public function __construct($pricingMode = null, $bidType = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->pricingMode = $pricingMode;
        $this->bidType = $bidType;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }

}