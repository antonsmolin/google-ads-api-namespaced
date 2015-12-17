<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 14:35
 */

namespace GoogleAdsApi\AdWords\Api\BudgetService;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Applies the list of mutate operations.
 *
 * @param operations The operations to apply.
 *
 * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
 * @throws ApiException
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var BudgetOperation[]
     */
    public $operations;

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

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }

}