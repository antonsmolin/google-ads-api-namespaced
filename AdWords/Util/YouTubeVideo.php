<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:51
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * YouTube video criterion.
 * <p> A criterion of this type is only excludable.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class YouTubeVideo extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "YouTubeVideo";

    /**
     * @access public
     * @var string
     */
    public $videoId;

    /**
     * @access public
     * @var string
     */
    public $videoName;

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

    public function __construct($videoId = null, $videoName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->videoId = $videoId;
        $this->videoName = $videoName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}