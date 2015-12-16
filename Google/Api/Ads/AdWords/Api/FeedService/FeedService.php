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
namespace Google\Api\Ads\Adwords\Api\FeedService;
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
use Google\Api\Ads\Adwords\Lib\AdWordsSoapClient;


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
        "AuthenticationError"             => "Google\\Api\\Ads\\Adwords\\Util\\AuthenticationError",
        "AuthorizationError"              => "Google\\Api\\Ads\\Adwords\\Util\\AuthorizationError",
        "ClientTermsError"                => "Google\\Api\\Ads\\Adwords\\Util\\ClientTermsError",
        "DateRange"                       => "Google\\Api\\Ads\\Adwords\\Util\\DateRange",
        "DistinctError"                   => "Google\\Api\\Ads\\Adwords\\Util\\DistinctError",
        "EntityCountLimitExceeded"        => "Google\\Api\\Ads\\Adwords\\Util\\EntityCountLimitExceeded",
        "EntityNotFound"                  => "Google\\Api\\Ads\\Adwords\\Util\\EntityNotFound",
        "FeedAttribute"                   => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedAttribute",
        "FeedError"                       => "Google\\Api\\Ads\\Adwords\\Util\\FeedError",
        "IdError"                         => "Google\\Api\\Ads\\Adwords\\Util\\IdError",
        "InternalApiError"                => "Google\\Api\\Ads\\Adwords\\Util\\InternalApiError",
        "NewEntityCreationError"          => "Google\\Api\\Ads\\Adwords\\Util\\NewEntityCreationError",
        "NotEmptyError"                   => "Google\\Api\\Ads\\Adwords\\Util\\NotEmptyError",
        "NullError"                       => "Google\\Api\\Ads\\Adwords\\Util\\NullError",
        "OAuthInfo"                       => "Google\\Api\\Ads\\Adwords\\Util\\OAuthInfo",
        "OperationAccessDenied"           => "Google\\Api\\Ads\\Adwords\\Util\\OperationAccessDenied",
        "OrderBy"                         => "Google\\Api\\Ads\\Adwords\\Util\\OrderBy",
        "Paging"                          => "Google\\Api\\Ads\\Adwords\\Util\\Paging",
        "Predicate"                       => "Google\\Api\\Ads\\Adwords\\Util\\Predicate",
        "QueryError"                      => "Google\\Api\\Ads\\Adwords\\Util\\QueryError",
        "QuotaCheckError"                 => "Google\\Api\\Ads\\Adwords\\Util\\QuotaCheckError",
        "RangeError"                      => "Google\\Api\\Ads\\Adwords\\Util\\RangeError",
        "RateExceededError"               => "Google\\Api\\Ads\\Adwords\\Util\\RateExceededError",
        "ReadOnlyError"                   => "Google\\Api\\Ads\\Adwords\\Util\\ReadOnlyError",
        "RejectedError"                   => "Google\\Api\\Ads\\Adwords\\Util\\RejectedError",
        "RequestError"                    => "Google\\Api\\Ads\\Adwords\\Util\\RequestError",
        "RequiredError"                   => "Google\\Api\\Ads\\Adwords\\Util\\RequiredError",
        "SelectorError"                   => "Google\\Api\\Ads\\Adwords\\Util\\SelectorError",
        "SizeLimitError"                  => "Google\\Api\\Ads\\Adwords\\Util\\SizeLimitError",
        "SoapHeader"                      => "Google\\Api\\Ads\\Adwords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"              => "Google\\Api\\Ads\\Adwords\\Util\\SoapResponseHeader",
        "StringLengthError"               => "Google\\Api\\Ads\\Adwords\\Util\\StringLengthError",
        "PlacesLocationFeedData"          => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\PlacesLocationFeedData",
        "DatabaseError"                   => "Google\\Api\\Ads\\Adwords\\Util\\DatabaseError",
        "SystemFeedGenerationData"        => "Google\\Api\\Ads\\Adwords\\Util\\SystemFeedGenerationData",
        "ApiError"                        => "Google\\Api\\Ads\\Adwords\\Util\\ApiError",
        "ApiException"                    => "Google\\Api\\Ads\\Adwords\\Util\\ApiException",
        "ApplicationException"            => "Google\\Api\\Ads\\Adwords\\Util\\ApplicationException",
        "Feed"                            => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\Feed",
        "FeedOperation"                   => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedOperation",
        "FeedPage"                        => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedPage",
        "FeedReturnValue"                 => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedReturnValue",
        "ListReturnValue"                 => "Google\\Api\\Ads\\Adwords\\Util\\ListReturnValue",
        "NullStatsPage"                   => "Google\\Api\\Ads\\Adwords\\Util\\NullStatsPage",
        "Operation"                       => "Google\\Api\\Ads\\Adwords\\Util\\Operation",
        "Page"                            => "Google\\Api\\Ads\\Adwords\\Util\\Page",
        "Selector"                        => "Google\\Api\\Ads\\Adwords\\Util\\Selector",
        "AuthenticationError.Reason"      => "Google\\Api\\Ads\\Adwords\\Util\\AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "Google\\Api\\Ads\\Adwords\\Util\\AuthorizationErrorReason",
        "ClientTermsError.Reason"         => "Google\\Api\\Ads\\Adwords\\Util\\ClientTermsErrorReason",
        "DatabaseError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\DatabaseErrorReason",
        "DistinctError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "Google\\Api\\Ads\\Adwords\\Util\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "Google\\Api\\Ads\\Adwords\\Util\\EntityNotFoundReason",
        "Feed.Origin"                     => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedOrigin",
        "Feed.Status"                     => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedStatus",
        "FeedAttribute.Type"              => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedAttributeType",
        "FeedError.Reason"                => "Google\\Api\\Ads\\Adwords\\Util\\FeedErrorReason",
        "IdError.Reason"                  => "Google\\Api\\Ads\\Adwords\\Util\\IdErrorReason",
        "InternalApiError.Reason"         => "Google\\Api\\Ads\\Adwords\\Util\\InternalApiErrorReason",
        "NewEntityCreationError.Reason"   => "Google\\Api\\Ads\\Adwords\\Util\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\NotEmptyErrorReason",
        "NullError.Reason"                => "Google\\Api\\Ads\\Adwords\\Util\\NullErrorReason",
        "OperationAccessDenied.Reason"    => "Google\\Api\\Ads\\Adwords\\Util\\OperationAccessDeniedReason",
        "Operator"                        => "Google\\Api\\Ads\\Adwords\\Util\\Operator",
        "Predicate.Operator"              => "Google\\Api\\Ads\\Adwords\\Util\\PredicateOperator",
        "QueryError.Reason"               => "Google\\Api\\Ads\\Adwords\\Util\\QueryErrorReason",
        "QuotaCheckError.Reason"          => "Google\\Api\\Ads\\Adwords\\Util\\QuotaCheckErrorReason",
        "RangeError.Reason"               => "Google\\Api\\Ads\\Adwords\\Util\\RangeErrorReason",
        "RateExceededError.Reason"        => "Google\\Api\\Ads\\Adwords\\Util\\RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\ReadOnlyErrorReason",
        "RejectedError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\RejectedErrorReason",
        "RequestError.Reason"             => "Google\\Api\\Ads\\Adwords\\Util\\RequestErrorReason",
        "RequiredError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\RequiredErrorReason",
        "SelectorError.Reason"            => "Google\\Api\\Ads\\Adwords\\Util\\SelectorErrorReason",
        "SizeLimitError.Reason"           => "Google\\Api\\Ads\\Adwords\\Util\\SizeLimitErrorReason",
        "SortOrder"                       => "Google\\Api\\Ads\\Adwords\\Util\\SortOrder",
        "StringLengthError.Reason"        => "Google\\Api\\Ads\\Adwords\\Util\\StringLengthErrorReason",
        "get"                             => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedServiceGet",
        "getResponse"                     => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedServiceGetResponse",
        "mutate"                          => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedServiceMutate",
        "mutateResponse"                  => "Google\\Api\\Ads\\Adwords\\Api\\FeedService\\FeedServiceMutateResponse",
        "query"                           => "Google\\Api\\Ads\\Adwords\\Util\\Query",
        "queryResponse"                   => "Google\\Api\\Ads\\Adwords\\Util\\QueryResponse",
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
