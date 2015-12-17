<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:10
 */

namespace GoogleAdsApi\AdWords\Api\BiddingStrategyService;

/**
 * CPA Bids.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CpaBid extends Bids
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CpaBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

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

    public function __construct($bid = null, $BidsType = null)
    {
        parent::__construct();
        $this->bid = $bid;
        $this->BidsType = $BidsType;
    }

}