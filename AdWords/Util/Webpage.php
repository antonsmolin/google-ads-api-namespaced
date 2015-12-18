<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:50
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Criterion for targeting webpages of an advertiser's website. The
 * website domain name is specified at the campaign level.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Webpage extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Webpage";

    /**
     * @access public
     * @var WebpageParameter
     */
    public $parameter;

    /**
     * @access public
     * @var double
     */
    public $criteriaCoverage;

    /**
     * @access public
     * @var string[]
     */
    public $criteriaSamples;

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

    public function __construct($parameter = null, $criteriaCoverage = null, $criteriaSamples = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->parameter = $parameter;
        $this->criteriaCoverage = $criteriaCoverage;
        $this->criteriaSamples = $criteriaSamples;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}