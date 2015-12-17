<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 14:24
 */

namespace GoogleAdsApi\AdWords\Api\BudgetService;

/**
 * Budgets are used for managing the amount of money spent on AdWords.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Budget
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Budget";

    /**
     * @access public
     * @var integer
     */
    public $budgetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsBudgetBudgetPeriod
     */
    public $period;

    /**
     * @access public
     * @var Money
     */
    public $amount;

    /**
     * @access public
     * @var tnsBudgetBudgetDeliveryMethod
     */
    public $deliveryMethod;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var boolean
     */
    public $isExplicitlyShared;

    /**
     * @access public
     * @var tnsBudgetBudgetStatus
     */
    public $status;

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

    public function __construct($budgetId = null, $name = null, $period = null, $amount = null, $deliveryMethod = null, $referenceCount = null, $isExplicitlyShared = null, $status = null)
    {
        $this->budgetId = $budgetId;
        $this->name = $name;
        $this->period = $period;
        $this->amount = $amount;
        $this->deliveryMethod = $deliveryMethod;
        $this->referenceCount = $referenceCount;
        $this->isExplicitlyShared = $isExplicitlyShared;
        $this->status = $status;
    }

}