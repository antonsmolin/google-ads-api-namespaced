<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:38
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Structure to specify an address location.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Address
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Address";

    /**
     * @access public
     * @var string
     */
    public $streetAddress;

    /**
     * @access public
     * @var string
     */
    public $streetAddress2;

    /**
     * @access public
     * @var string
     */
    public $cityName;

    /**
     * @access public
     * @var string
     */
    public $provinceCode;

    /**
     * @access public
     * @var string
     */
    public $provinceName;

    /**
     * @access public
     * @var string
     */
    public $postalCode;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

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

    public function __construct($streetAddress = null, $streetAddress2 = null, $cityName = null, $provinceCode = null, $provinceName = null, $postalCode = null, $countryCode = null)
    {
        $this->streetAddress = $streetAddress;
        $this->streetAddress2 = $streetAddress2;
        $this->cityName = $cityName;
        $this->provinceCode = $provinceCode;
        $this->provinceName = $provinceName;
        $this->postalCode = $postalCode;
        $this->countryCode = $countryCode;
    }

}