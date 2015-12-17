<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 13:11
 */

namespace GoogleAdsApi\AdWords\Api\FeedItemService;

/**
 * Represents a feed item's value for a particular feed attribute. A feed item's value is
 * composed of a collection of these attribute values.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItemAttributeValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "FeedItemAttributeValue";

    /**
     * @access public
     * @var integer
     */
    public $feedAttributeId;

    /**
     * @access public
     * @var integer
     */
    public $integerValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

    /**
     * @access public
     * @var integer[]
     */
    public $integerValues;

    /**
     * @access public
     * @var double[]
     */
    public $doubleValues;

    /**
     * @access public
     * @var boolean[]
     */
    public $booleanValues;

    /**
     * @access public
     * @var string[]
     */
    public $stringValues;

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

    public function __construct($feedAttributeId = null, $integerValue = null, $doubleValue = null, $booleanValue = null, $stringValue = null, $integerValues = null, $doubleValues = null, $booleanValues = null, $stringValues = null)
    {
        $this->feedAttributeId = $feedAttributeId;
        $this->integerValue = $integerValue;
        $this->doubleValue = $doubleValue;
        $this->booleanValue = $booleanValue;
        $this->stringValue = $stringValue;
        $this->integerValues = $integerValues;
        $this->doubleValues = $doubleValues;
        $this->booleanValues = $booleanValues;
        $this->stringValues = $stringValues;
    }

}