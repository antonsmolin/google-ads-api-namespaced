<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 13:41
 */

namespace Google\Api\Ads\Common\Util;

/**
 * Exception thrown when OAuth2 flow fails.
 * @package GoogleApiAdsCommon
 * @subpackage Util
 */
class OAuth2Exception extends \Exception
{
    public function __construct($message, $code = null)
    {
        parent::__construct($message, $code);
    }
}