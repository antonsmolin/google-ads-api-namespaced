<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 18.12.15
 * Time: 11:25
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents an AdSchedule Criterion.
 * AdSchedule is specified as day and time of the week criteria to target
 * the Ads.
 * <p><b>Note:</b> An AdSchedule may not have more than <b>six</b> intervals
 * in a day.</p>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdSchedule extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdSchedule";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

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

    public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->dayOfWeek = $dayOfWeek;
        $this->startHour = $startHour;
        $this->startMinute = $startMinute;
        $this->endHour = $endHour;
        $this->endMinute = $endMinute;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}