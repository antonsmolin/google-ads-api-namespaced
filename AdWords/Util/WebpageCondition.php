<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:50
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Logical expression for targeting webpages of an advertiser's website.
 *
 * <p>A condition is defined as {@code operand OP argument}
 * where {@code operand} is one of the values enumerated in
 * {@link WebpageConditionOperand}, and, based on this value,
 * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class WebpageCondition
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "WebpageCondition";

    /**
     * @access public
     * @var tnsWebpageConditionOperand
     */
    public $operand;

    /**
     * @access public
     * @var string
     */
    public $argument;

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

    public function __construct($operand = null, $argument = null)
    {
        $this->operand = $operand;
        $this->argument = $argument;
    }

}