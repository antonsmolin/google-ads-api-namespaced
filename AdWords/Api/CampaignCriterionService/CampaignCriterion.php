<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:39
 */

namespace GoogleAdsApi\AdWords\Api\CampaignCriterionService;

/**
 * Represents a campaign level criterion.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignCriterion";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var boolean
     */
    public $isNegative;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var string
     */
    public $CampaignCriterionType;
    private $_parameterMap = array(
        "CampaignCriterion.Type" => "CampaignCriterionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     *
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @param $var Variable name to get
     *
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return null;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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

    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $forwardCompatibilityMap = null, $CampaignCriterionType = null)
    {
        $this->campaignId = $campaignId;
        $this->isNegative = $isNegative;
        $this->criterion = $criterion;
        $this->bidModifier = $bidModifier;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->CampaignCriterionType = $CampaignCriterionType;
    }

}