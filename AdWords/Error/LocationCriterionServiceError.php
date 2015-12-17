<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:29
 */

namespace GoogleAdsApi\AdWords\Error;

/**
 * Represents errors thrown by the {@link LocationCriterionService#get} operation.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LocationCriterionServiceError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "LocationCriterionServiceError";

    /**
     * @access public
     * @var tnsLocationCriterionServiceErrorReason
     */
    public $reason;

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

    public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
        parent::__construct();
        $this->reason = $reason;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }

}