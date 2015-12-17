<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:10
 */

namespace GoogleAdsApi\AdWords\Api\BiddingStrategyService;

/**
 * Manual click based bids.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CpcBid extends Bids
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CpcBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $cpcBidSource;

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

    public function __construct($bid = null, $cpcBidSource = null, $BidsType = null)
    {
        parent::__construct();
        $this->bid = $bid;
        $this->cpcBidSource = $cpcBidSource;
        $this->BidsType = $BidsType;
    }

}