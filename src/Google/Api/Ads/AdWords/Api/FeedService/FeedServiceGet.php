<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 15:07
 */

namespace Google\Api\Ads\AdWords\Api\FeedService;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of Feeds that meet the selector criteria.
 *
 * @param selector Determines which Feeds to return. If empty all
 * Feeds are returned.
 *
 * @return The list of Feeds.
 * @throws ApiException Indicates a problem with the request.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }

}