<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 13:26
 */

namespace GoogleAdsApi\AdWords\Api\FeedItemService;
use GoogleAdsApi\AdWords\Util\NullStatsPage;

/**
 * Contains a subset of feed items resulting from a {@link FeedItemService#get} call.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItemPage extends NullStatsPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "FeedItemPage";

    /**
     * @access public
     * @var FeedItem[]
     */
    public $entries;

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

    public function __construct($entries = null)
    {
        parent::__construct();
        $this->entries = $entries;
    }

}