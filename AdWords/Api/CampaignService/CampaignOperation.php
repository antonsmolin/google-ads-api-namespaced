<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:02
 */

namespace GoogleAdsApi\AdWords\Api\CampaignService;

/**
 * An operation on an AdWords campaign.
 * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
 * supported. To remove a campaign, set its {@link Campaign#status status}
 * to {@code REMOVED}.</p>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignOperation";

    /**
     * @access public
     * @var Campaign
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }

}