<?php
/**
 * Contains all client objects for the FeedService
 * service.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
namespace Google\Api\Ads\AdWords\Api\FeedService;
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;


/**
 * FeedService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedService extends AdWordsSoapClient
{

    const SERVICE_NAME = "FeedService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/FeedService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/FeedService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AuthenticationError"             => "Google\\Api\\Ads\\AdWords\\Util\\AuthenticationError",
        "AuthorizationError"              => "Google\\Api\\Ads\\AdWords\\Util\\AuthorizationError",
        "ClientTermsError"                => "Google\\Api\\Ads\\AdWords\\Util\\ClientTermsError",
        "DateRange"                       => "Google\\Api\\Ads\\AdWords\\Util\\DateRange",
        "DistinctError"                   => "Google\\Api\\Ads\\AdWords\\Util\\DistinctError",
        "EntityCountLimitExceeded"        => "Google\\Api\\Ads\\AdWords\\Util\\EntityCountLimitExceeded",
        "EntityNotFound"                  => "Google\\Api\\Ads\\AdWords\\Util\\EntityNotFound",
        "FeedAttribute"                   => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedAttribute",
        "FeedError"                       => "Google\\Api\\Ads\\AdWords\\Util\\FeedError",
        "IdError"                         => "Google\\Api\\Ads\\AdWords\\Util\\IdError",
        "InternalApiError"                => "Google\\Api\\Ads\\AdWords\\Util\\InternalApiError",
        "NewEntityCreationError"          => "Google\\Api\\Ads\\AdWords\\Util\\NewEntityCreationError",
        "NotEmptyError"                   => "Google\\Api\\Ads\\AdWords\\Util\\NotEmptyError",
        "NullError"                       => "Google\\Api\\Ads\\AdWords\\Util\\NullError",
        "OAuthInfo"                       => "Google\\Api\\Ads\\AdWords\\Util\\OAuthInfo",
        "OperationAccessDenied"           => "Google\\Api\\Ads\\AdWords\\Util\\OperationAccessDenied",
        "OrderBy"                         => "Google\\Api\\Ads\\AdWords\\Util\\OrderBy",
        "Paging"                          => "Google\\Api\\Ads\\AdWords\\Util\\Paging",
        "Predicate"                       => "Google\\Api\\Ads\\AdWords\\Util\\Predicate",
        "QueryError"                      => "Google\\Api\\Ads\\AdWords\\Util\\QueryError",
        "QuotaCheckError"                 => "Google\\Api\\Ads\\AdWords\\Util\\QuotaCheckError",
        "RangeError"                      => "Google\\Api\\Ads\\AdWords\\Util\\RangeError",
        "RateExceededError"               => "Google\\Api\\Ads\\AdWords\\Util\\RateExceededError",
        "ReadOnlyError"                   => "Google\\Api\\Ads\\AdWords\\Util\\ReadOnlyError",
        "RejectedError"                   => "Google\\Api\\Ads\\AdWords\\Util\\RejectedError",
        "RequestError"                    => "Google\\Api\\Ads\\AdWords\\Util\\RequestError",
        "RequiredError"                   => "Google\\Api\\Ads\\AdWords\\Util\\RequiredError",
        "SelectorError"                   => "Google\\Api\\Ads\\AdWords\\Util\\SelectorError",
        "SizeLimitError"                  => "Google\\Api\\Ads\\AdWords\\Util\\SizeLimitError",
        "SoapHeader"                      => "Google\\Api\\Ads\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"              => "Google\\Api\\Ads\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"               => "Google\\Api\\Ads\\AdWords\\Util\\StringLengthError",
        "PlacesLocationFeedData"          => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\PlacesLocationFeedData",
        "DatabaseError"                   => "Google\\Api\\Ads\\AdWords\\Util\\DatabaseError",
        "SystemFeedGenerationData"        => "Google\\Api\\Ads\\AdWords\\Util\\SystemFeedGenerationData",
        "ApiError"                        => "Google\\Api\\Ads\\AdWords\\Util\\ApiError",
        "ApiException"                    => "Google\\Api\\Ads\\AdWords\\Util\\ApiException",
        "ApplicationException"            => "Google\\Api\\Ads\\AdWords\\Util\\ApplicationException",
        "Feed"                            => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\Feed",
        "FeedOperation"                   => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedOperation",
        "FeedPage"                        => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedPage",
        "FeedReturnValue"                 => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedReturnValue",
        "ListReturnValue"                 => "Google\\Api\\Ads\\AdWords\\Util\\ListReturnValue",
        "NullStatsPage"                   => "Google\\Api\\Ads\\AdWords\\Util\\NullStatsPage",
        "Operation"                       => "Google\\Api\\Ads\\AdWords\\Util\\Operation",
        "Page"                            => "Google\\Api\\Ads\\AdWords\\Util\\Page",
        "Selector"                        => "Google\\Api\\Ads\\AdWords\\Util\\Selector",
        "AuthenticationError.Reason"      => "Google\\Api\\Ads\\AdWords\\Util\\AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "Google\\Api\\Ads\\AdWords\\Util\\AuthorizationErrorReason",
        "ClientTermsError.Reason"         => "Google\\Api\\Ads\\AdWords\\Util\\ClientTermsErrorReason",
        "DatabaseError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\DatabaseErrorReason",
        "DistinctError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "Google\\Api\\Ads\\AdWords\\Util\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "Google\\Api\\Ads\\AdWords\\Util\\EntityNotFoundReason",
        "Feed.Origin"                     => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedOrigin",
        "Feed.Status"                     => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedStatus",
        "FeedAttribute.Type"              => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedAttributeType",
        "FeedError.Reason"                => "Google\\Api\\Ads\\AdWords\\Util\\FeedErrorReason",
        "IdError.Reason"                  => "Google\\Api\\Ads\\AdWords\\Util\\IdErrorReason",
        "InternalApiError.Reason"         => "Google\\Api\\Ads\\AdWords\\Util\\InternalApiErrorReason",
        "NewEntityCreationError.Reason"   => "Google\\Api\\Ads\\AdWords\\Util\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\NotEmptyErrorReason",
        "NullError.Reason"                => "Google\\Api\\Ads\\AdWords\\Util\\NullErrorReason",
        "OperationAccessDenied.Reason"    => "Google\\Api\\Ads\\AdWords\\Util\\OperationAccessDeniedReason",
        "Operator"                        => "Google\\Api\\Ads\\AdWords\\Util\\Operator",
        "Predicate.Operator"              => "Google\\Api\\Ads\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"               => "Google\\Api\\Ads\\AdWords\\Util\\QueryErrorReason",
        "QuotaCheckError.Reason"          => "Google\\Api\\Ads\\AdWords\\Util\\QuotaCheckErrorReason",
        "RangeError.Reason"               => "Google\\Api\\Ads\\AdWords\\Util\\RangeErrorReason",
        "RateExceededError.Reason"        => "Google\\Api\\Ads\\AdWords\\Util\\RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\ReadOnlyErrorReason",
        "RejectedError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\RejectedErrorReason",
        "RequestError.Reason"             => "Google\\Api\\Ads\\AdWords\\Util\\RequestErrorReason",
        "RequiredError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\RequiredErrorReason",
        "SelectorError.Reason"            => "Google\\Api\\Ads\\AdWords\\Util\\SelectorErrorReason",
        "SizeLimitError.Reason"           => "Google\\Api\\Ads\\AdWords\\Util\\SizeLimitErrorReason",
        "SortOrder"                       => "Google\\Api\\Ads\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"        => "Google\\Api\\Ads\\AdWords\\Util\\StringLengthErrorReason",
        "get"                             => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedServiceGet",
        "getResponse"                     => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedServiceGetResponse",
        "mutate"                          => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedServiceMutate",
        "mutateResponse"                  => "Google\\Api\\Ads\\AdWords\\Api\\FeedService\\FeedServiceMutateResponse",
        "query"                           => "Google\\Api\\Ads\\AdWords\\Util\\Query",
        "queryResponse"                   => "Google\\Api\\Ads\\AdWords\\Util\\QueryResponse",
    );


    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
            self::WSDL_NAMESPACE);
    }

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
     */
    public function get($selector)
    {
        $args = new FeedServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }

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
     */
    public function mutate($operations)
    {
        $args = new FeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of Feed that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @returns A list of Feed.
     * @throws ApiException if problems occur while parsing the query or fetching Feed.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
