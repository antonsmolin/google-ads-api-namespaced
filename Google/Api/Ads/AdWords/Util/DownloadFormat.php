<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 13:49
 */

namespace Google\Api\Ads\Adwords\Util;

/**
 * Enum class that describes the supported formats for content downloads.
 * The order mimics the order in which download options are presented in the
 * legacy report center.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class DownloadFormat
{
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "";
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "DownloadFormat";
    }

    public function __construct()
    {
        if (get_parent_class('DownloadFormat'))
            parent::__construct();
    }
}