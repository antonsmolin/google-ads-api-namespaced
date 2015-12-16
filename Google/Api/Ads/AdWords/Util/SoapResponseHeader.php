<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 13:52
 */

namespace Google\Api\Ads\Adwords\Util;


/**
 * Defines the elements within the header of a SOAP response.
 *
 *
 *
 * Errors returned when Authentication failed.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class SoapResponseHeader
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "SoapResponseHeader";

    /**
     * @access public
     * @var string
     */
    public $requestId;

    /**
     * @access public
     * @var string
     */
    public $serviceName;

    /**
     * @access public
     * @var string
     */
    public $methodName;

    /**
     * @access public
     * @var integer
     */
    public $operations;

    /**
     * @access public
     * @var integer
     */
    public $responseTime;

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

    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null)
    {
        $this->requestId = $requestId;
        $this->serviceName = $serviceName;
        $this->methodName = $methodName;
        $this->operations = $operations;
        $this->responseTime = $responseTime;
    }

}
