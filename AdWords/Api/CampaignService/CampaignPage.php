<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:02
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;
use GoogleAdsApi\AdWords\Util\Page;

/**
 * Contains a subset of campaign resulting from the filtering and paging of the
 * {@link com.google.ads.api.services.campaignmgmt.campaign.CampaignService#get} call.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignPage extends Page
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignPage";

    /**
     * @access public
     * @var Campaign[]
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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }

}