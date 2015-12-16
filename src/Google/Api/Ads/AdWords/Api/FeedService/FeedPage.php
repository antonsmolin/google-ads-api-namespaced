<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 15:10
 */

namespace Google\Api\Ads\AdWords\Api\FeedService;
use Google\Api\Ads\AdWords\Util\NullStatsPage;

/**
 * The result of a call to FeedService#get.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedPage extends NullStatsPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "FeedPage";

    /**
     * @access public
     * @var Feed[]
     */
    public $entries;

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

    public function __construct($entries = null)
    {
        parent::__construct();
        $this->entries = $entries;
    }

}