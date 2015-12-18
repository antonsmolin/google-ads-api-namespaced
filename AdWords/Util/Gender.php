<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:42
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents a Gender criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Gender extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Gender";

    /**
     * @access public
     * @var tnsGenderGenderType
     */
    public $genderType;

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

    public function __construct($genderType = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->genderType = $genderType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}