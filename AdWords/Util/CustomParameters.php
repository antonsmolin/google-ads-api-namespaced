<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 13:08
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * CustomParameters holds a list of CustomParameters to be treated as a map.
 * It has a special field used to indicate that the current map should be cleared and replaced
 * with this new map.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CustomParameters
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CustomParameters";

    /**
     * @access public
     * @var CustomParameter[]
     */
    public $parameters;

    /**
     * @access public
     * @var boolean
     */
    public $doReplace;

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

    public function __construct($parameters = null, $doReplace = null)
    {
        $this->parameters = $parameters;
        $this->doReplace = $doReplace;
    }

}