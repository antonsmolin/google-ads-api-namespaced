<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 14:43
 */

namespace GoogleAdsApi\AdWords\Api\BudgetService;
use GoogleAdsApi\AdWords\Util\Page;

/**
 * Contains a list of budgets resulting from the filtering and paging of
 * {@link BudgetService#get} call.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetPage extends Page
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "BudgetPage";

    /**
     * @access public
     * @var Budget[]
     */
    public $entries;

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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }

}