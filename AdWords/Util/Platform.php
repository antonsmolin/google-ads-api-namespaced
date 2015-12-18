<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:46
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents Platform criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Platform extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Platform";

    /**
     * @access public
     * @var string
     */
    public $platformName;

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

    public function __construct($platformName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->platformName = $platformName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}