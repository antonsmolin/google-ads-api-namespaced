<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:28
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * A constant operand in a matching function.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ConstantOperand extends FunctionArgumentOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ConstantOperand";

    /**
     * @access public
     * @var tnsConstantOperandConstantType
     */
    public $type;

    /**
     * @access public
     * @var tnsConstantOperandUnit
     */
    public $unit;

    /**
     * @access public
     * @var integer
     */
    public $longValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

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

    public function __construct($type = null, $unit = null, $longValue = null, $booleanValue = null, $doubleValue = null, $stringValue = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->type = $type;
        $this->unit = $unit;
        $this->longValue = $longValue;
        $this->booleanValue = $booleanValue;
        $this->doubleValue = $doubleValue;
        $this->stringValue = $stringValue;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

}