<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 13:13
 */

namespace GoogleAdsApi\AdWords\Api\FeedItemService;

/**
 * Represents a collection of FeedItem schedules specifying all time intervals for which
 * the feed item may serve. Any time range not covered by the specified FeedItemSchedules will
 * prevent the feed item from serving during those times.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItemScheduling
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "FeedItemScheduling";

    /**
     * @access public
     * @var FeedItemSchedule[]
     */
    public $feedItemSchedules;

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

    public function __construct($feedItemSchedules = null)
    {
        $this->feedItemSchedules = $feedItemSchedules;
    }

}