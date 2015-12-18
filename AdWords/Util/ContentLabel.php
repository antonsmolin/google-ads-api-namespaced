<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:28
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Content Label for category exclusion.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ContentLabel extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ContentLabel";

    /**
     * @access public
     * @var tnsContentLabelType
     */
    public $contentLabelType;

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

    public function __construct($contentLabelType = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->contentLabelType = $contentLabelType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}