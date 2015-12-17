<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:07
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * Manages the labels associated with a campaign.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignLabel
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignLabel";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var integer
     */
    public $labelId;

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

    public function __construct($campaignId = null, $labelId = null)
    {
        $this->campaignId = $campaignId;
        $this->labelId = $labelId;
    }

}