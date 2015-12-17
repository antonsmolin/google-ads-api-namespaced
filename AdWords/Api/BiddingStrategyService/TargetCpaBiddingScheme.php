<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:41
 */

namespace GoogleAdsApi\AdWords\Api\BiddingStrategyService;

/**
 * Target Cpa bidding strategy helps you maximize your return on investment
 * (ROI) by automatically getting you the most possible conversions for your budget.
 *
 * This is similar to the <code>ConversionOptimizerBiddingScheme<code> but does not
 * support user-entered AdGroup-level target CPA bids, but rather a strategy-wide
 * average CPA target.
 *
 * <p>Note that campaigns must meet <a
 * href="//support.google.com/adwords/answer/2471188">specific
 * eligibility requirements</a> before they can use the <code>TargetCpaBiddingScheme</code>
 * bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class TargetCpaBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "TargetCpaBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $targetCpa;

    /**
     * @access public
     * @var Money
     */
    public $maxCpcBidCeiling;

    /**
     * @access public
     * @var Money
     */
    public $maxCpcBidFloor;

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

    public function __construct($targetCpa = null, $maxCpcBidCeiling = null, $maxCpcBidFloor = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->targetCpa = $targetCpa;
        $this->maxCpcBidCeiling = $maxCpcBidCeiling;
        $this->maxCpcBidFloor = $maxCpcBidFloor;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }

}