<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 15:09
 */

namespace Google\Api\Ads\Adwords\Util;

/**
 *
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class NullStatsPage extends Page
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "NullStatsPage";

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

    public function __construct($totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }

}