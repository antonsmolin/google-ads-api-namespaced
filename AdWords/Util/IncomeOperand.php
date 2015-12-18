<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:29
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * This operand specifies the income bracket a household falls under.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class IncomeOperand extends FunctionArgumentOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "IncomeOperand";

    /**
     * @access public
     * @var tnsIncomeTier
     */
    public $tier;

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

    public function __construct($tier = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->tier = $tier;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

}