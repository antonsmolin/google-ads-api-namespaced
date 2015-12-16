<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 14:40
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Data used for authorization using OAuth.
 * For more information about OAuth, see:
 * {@link "https://developers.google.com/accounts/docs/OAuth2"}
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class OAuthInfo
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "OAuthInfo";

    /**
     * @access public
     * @var string
     */
    public $httpMethod;

    /**
     * @access public
     * @var string
     */
    public $httpRequestUrl;

    /**
     * @access public
     * @var string
     */
    public $httpAuthorizationHeader;

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

    public function __construct($httpMethod = null, $httpRequestUrl = null, $httpAuthorizationHeader = null)
    {
        $this->httpMethod = $httpMethod;
        $this->httpRequestUrl = $httpRequestUrl;
        $this->httpAuthorizationHeader = $httpAuthorizationHeader;
    }

}