<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 14:42
 */

namespace Google\Api\Ads\Adwords\Util;

/**
 * Base list return value type.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ListReturnValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ListReturnValue";

    /**
     * @access public
     * @var string
     */
    public $ListReturnValueType;
    private $_parameterMap = array(
        "ListReturnValue.Type" => "ListReturnValueType",
    );

    /**
     * Provided for setting non-php-standard named variables
     *
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @param $var Variable name to get
     *
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return null;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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

    public function __construct($ListReturnValueType = null)
    {
        $this->ListReturnValueType = $ListReturnValueType;
    }

}