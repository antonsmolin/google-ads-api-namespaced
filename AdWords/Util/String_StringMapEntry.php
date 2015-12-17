<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 17:40
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * This represents an entry in a map with a key of type String
 * and value of type String.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class String_StringMapEntry
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "String_StringMapEntry";

    /**
     * @access public
     * @var string
     */
    public $key;

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }

}