<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:30
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents the mobile application to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class MobileApplication extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "MobileApplication";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

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

    public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->appId = $appId;
        $this->displayName = $displayName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}
