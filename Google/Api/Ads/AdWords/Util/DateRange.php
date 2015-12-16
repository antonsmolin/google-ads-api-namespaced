<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 13:46
 */

namespace Google\Api\Ads\Adwords\Util;

/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 *
 *
 *
 * Errors returned when Authentication failed.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class DateRange
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "DateRange";

    /**
     * @access public
     * @var Date
     */
    public $min;

    /**
     * @access public
     * @var Date
     */
    public $max;

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

    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }

}