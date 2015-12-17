<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 17.12.15
 * Time: 15:08
 */

namespace GoogleAdsApi\AdWords\Util;

/**
 * Attributes for Text Labels.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class DisplayAttribute extends LabelAttribute
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "DisplayAttribute";

    /**
     * @access public
     * @var string
     */
    public $backgroundColor;

    /**
     * @access public
     * @var string
     */
    public $description;

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

    public function __construct($backgroundColor = null, $description = null, $LabelAttributeType = null)
    {
        parent::__construct();
        $this->backgroundColor = $backgroundColor;
        $this->description = $description;
        $this->LabelAttributeType = $LabelAttributeType;
    }

}