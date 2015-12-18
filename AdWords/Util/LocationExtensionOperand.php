<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:30
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * This operand specifies information required for location extension targeting.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LocationExtensionOperand extends FunctionArgumentOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "LocationExtensionOperand";

    /**
     * @access public
     * @var ConstantOperand
     */
    public $radius;

    /**
     * @access public
     * @var integer
     */
    public $locationId;

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

    public function __construct($radius = null, $locationId = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->radius = $radius;
        $this->locationId = $locationId;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

}