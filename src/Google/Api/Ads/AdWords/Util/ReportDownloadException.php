<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 13:45
 */

namespace Google\Api\Ads\AdWords\Util;

/**
 * Exception class for an error that occurs while downloading a report.
 * @package GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportDownloadException extends \Exception
{
    /**
     * Constructor for ReportDownloadException.
     *
     * @param string $error an optional error message
     * @param string $httpCode an optional HTTP status code of the response
     */
    public function __construct($error = null, $httpCode = null)
    {
        if (empty($error)) {
            $error = 'Report download failed with status code: ' . $httpCode;
        }
        parent::__construct($error, $httpCode);
    }
}