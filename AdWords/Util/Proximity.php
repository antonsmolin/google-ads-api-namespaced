<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 18:49
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Represents a Proximity Criterion.
 *
 * A proximity is an area within a certain radius of a point with the center point being described
 * by a lat/long pair. The caller may also alternatively provide address fields which will be
 * geocoded into a lat/long pair. Note: If a geoPoint value is provided, the address is not
 * used for calculating the lat/long to target.
 * <p> A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Proximity extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Proximity";

    /**
     * @access public
     * @var GeoPoint
     */
    public $geoPoint;

    /**
     * @access public
     * @var tnsProximityDistanceUnits
     */
    public $radiusDistanceUnits;

    /**
     * @access public
     * @var double
     */
    public $radiusInUnits;

    /**
     * @access public
     * @var Address
     */
    public $address;

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

    public function __construct($geoPoint = null, $radiusDistanceUnits = null, $radiusInUnits = null, $address = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->geoPoint = $geoPoint;
        $this->radiusDistanceUnits = $radiusDistanceUnits;
        $this->radiusInUnits = $radiusInUnits;
        $this->address = $address;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}