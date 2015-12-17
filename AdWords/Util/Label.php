<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:13
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents a label that can be attached to entities such as campaign, ad group, ads,
 * criterion etc.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Label
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Label";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsLabelStatus
     */
    public $status;

    /**
     * @access public
     * @var LabelAttribute
     */
    public $attribute;

    /**
     * @access public
     * @var string
     */
    public $LabelType;
    private $_parameterMap = array(
        "Label.Type" => "LabelType",
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

    public function __construct($id = null, $name = null, $status = null, $attribute = null, $LabelType = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->attribute = $attribute;
        $this->LabelType = $LabelType;
    }

}