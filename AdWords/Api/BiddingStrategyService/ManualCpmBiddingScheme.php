<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:14
 */

namespace GoogleAdsApi\AdWords\Api\BiddingStrategyService;

/**
 * Manual impression based bidding where user pays per thousand impressions.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ManualCpmBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ManualCpmBiddingScheme";

    /**
     * @access public
     * @var boolean
     */
    public $activeViewCpmEnabled;

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

    public function __construct($activeViewCpmEnabled = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->activeViewCpmEnabled = $activeViewCpmEnabled;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }

}