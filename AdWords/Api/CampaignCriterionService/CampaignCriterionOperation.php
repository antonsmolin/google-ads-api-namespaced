<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:26
 */

namespace GoogleAdsApi\AdWords\Api\CampaignCriterionService;
use GoogleAdsApi\AdWords\Util\Operation;

/**
 * Generic operation (add, remove and set) for campaign criteria.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignCriterionOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignCriterionOperation";

    /**
     * @access public
     * @var CampaignCriterion
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