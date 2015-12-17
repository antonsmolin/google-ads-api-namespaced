<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 14:43
 */

namespace GoogleAdsApi\AdWords\Api\BudgetService;
use GoogleAdsApi\AdWords\Util\ListReturnValue;

/**
 * A container for return values from the {@link BudgetService#mutate} call.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetReturnValue extends ListReturnValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "BudgetReturnValue";

    /**
     * @access public
     * @var Budget[]
     */
    public $value;

    /**
     * @access public
     * @var ApiError[]
     */
    public $partialFailureErrors;

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

    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->partialFailureErrors = $partialFailureErrors;
        $this->ListReturnValueType = $ListReturnValueType;
    }

}