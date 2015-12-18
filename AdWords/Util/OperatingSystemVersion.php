<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:45
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents an Operating System Version Criterion.
 * <a href="/adwords/api/docs/appendix/mobileplatforms">View the complete
 * list of available mobile platforms</a>. You can also get the list from
 * {@link ConstantDataService#getOperatingSystemVersionCriterion ConstantDataService}.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class OperatingSystemVersion extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "OperatingSystemVersion";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $osMajorVersion;

    /**
     * @access public
     * @var integer
     */
    public $osMinorVersion;

    /**
     * @access public
     * @var tnsOperatingSystemVersionOperatorType
     */
    public $operatorType;

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

    public function __construct($name = null, $osMajorVersion = null, $osMinorVersion = null, $operatorType = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->osMajorVersion = $osMajorVersion;
        $this->osMinorVersion = $osMinorVersion;
        $this->operatorType = $operatorType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}