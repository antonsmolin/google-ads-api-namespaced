<?php
/**
 * Created by PhpStorm.
 * User: asmolin
 * Date: 16.12.15
 * Time: 15:08
 */

namespace Google\Api\Ads\Adwords\Api\FeedService;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Add, remove, and set Feeds.
 *
 * @param operations The operations to apply.
 *
 * @return The resulting Feeds.
 * @throws ApiException Indicates a problem with the request.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var FeedOperation[]
     */
    public $operations;

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

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }

}