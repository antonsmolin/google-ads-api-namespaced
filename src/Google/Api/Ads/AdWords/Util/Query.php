<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 15:01
 */

namespace Google\Api\Ads\AdWords\Util;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of Feed that match the query.
 *
 * @param query The SQL-like AWQL query string.
 *
 * @returns A list of Feed.
 * @throws ApiException if problems occur while parsing the query or fetching Feed.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Query
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

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

    public function __construct($query = null)
    {
        $this->query = $query;
    }

}