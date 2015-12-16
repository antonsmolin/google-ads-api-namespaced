<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 13:46
 */

namespace Google\Api\Ads\Adwords\Util;

/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 *
 *
 *
 * Errors returned when Authentication failed.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Predicate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Predicate";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
     * @access public
     * @var string[]
     */
    public $values;

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

    public function __construct($field = null, $operator = null, $values = null)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }

}