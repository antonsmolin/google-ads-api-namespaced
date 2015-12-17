<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 13:25
 */

namespace GoogleAdsApi\AdWords\Api\FeedItemService;
use GoogleAdsApi\AdWords\Util\PolicyData;

/**
 * Contains offline-validation and approval results for a given FeedItem and FeedMapping. Each
 * validation data indicates any issues found on the feed item when used in the context of the
 * feed mapping.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItemPolicyData extends PolicyData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "FeedItemPolicyData";

    /**
     * @access public
     * @var integer
     */
    public $placeholderType;

    /**
     * @access public
     * @var integer
     */
    public $feedMappingId;

    /**
     * @access public
     * @var tnsFeedItemValidationStatus
     */
    public $validationStatus;

    /**
     * @access public
     * @var tnsFeedItemApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var FeedItemAttributeError[]
     */
    public $validationErrors;

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

    public function __construct($placeholderType = null, $feedMappingId = null, $validationStatus = null, $approvalStatus = null, $validationErrors = null, $disapprovalReasons = null, $PolicyDataType = null)
    {
        parent::__construct();
        $this->placeholderType = $placeholderType;
        $this->feedMappingId = $feedMappingId;
        $this->validationStatus = $validationStatus;
        $this->approvalStatus = $approvalStatus;
        $this->validationErrors = $validationErrors;
        $this->disapprovalReasons = $disapprovalReasons;
        $this->PolicyDataType = $PolicyDataType;
    }

}