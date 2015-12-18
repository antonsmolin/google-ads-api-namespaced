<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:51
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * YouTube channel criterion.
 * <p> A criterion of this type is only excludable.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class YouTubeChannel extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "YouTubeChannel";

    /**
     * @access public
     * @var string
     */
    public $channelId;

    /**
     * @access public
     * @var string
     */
    public $channelName;

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

    public function __construct($channelId = null, $channelName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->channelId = $channelId;
        $this->channelName = $channelName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}