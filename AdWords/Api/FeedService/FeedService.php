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
namespace GoogleAdsApi\AdWords\Api\FeedService;
/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;


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
        "AuthenticationError"             => "GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"              => "GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "ClientTermsError"                => "GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "DateRange"                       => "GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DistinctError"                   => "GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "EntityCountLimitExceeded"        => "GoogleAdsApi\\AdWords\\Util\\EntityCountLimitExceeded",
        "EntityNotFound"                  => "GoogleAdsApi\\AdWords\\Util\\EntityNotFound",
        "FeedAttribute"                   => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedAttribute",
        "FeedError"                       => "GoogleAdsApi\\AdWords\\Error\\FeedError",
        "IdError"                         => "GoogleAdsApi\\AdWords\\Util\\IdError",
        "InternalApiError"                => "GoogleAdsApi\\AdWords\\Util\\InternalApiError",
        "NewEntityCreationError"          => "GoogleAdsApi\\AdWords\\Util\\NewEntityCreationError",
        "NotEmptyError"                   => "GoogleAdsApi\\AdWords\\Util\\NotEmptyError",
        "NullError"                       => "GoogleAdsApi\\AdWords\\Util\\NullError",
        "OAuthInfo"                       => "GoogleAdsApi\\AdWords\\Util\\OAuthInfo",
        "OperationAccessDenied"           => "GoogleAdsApi\\AdWords\\Util\\OperationAccessDenied",
        "OrderBy"                         => "GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Paging"                          => "GoogleAdsApi\\AdWords\\Util\\Paging",
        "Predicate"                       => "GoogleAdsApi\\AdWords\\Util\\Predicate",
        "QueryError"                      => "GoogleAdsApi\\AdWords\\Util\\QueryError",
        "QuotaCheckError"                 => "GoogleAdsApi\\AdWords\\Util\\QuotaCheckError",
        "RangeError"                      => "GoogleAdsApi\\AdWords\\Util\\RangeError",
        "RateExceededError"               => "GoogleAdsApi\\AdWords\\Util\\RateExceededError",
        "ReadOnlyError"                   => "GoogleAdsApi\\AdWords\\Util\\ReadOnlyError",
        "RejectedError"                   => "GoogleAdsApi\\AdWords\\Util\\RejectedError",
        "RequestError"                    => "GoogleAdsApi\\AdWords\\Util\\RequestError",
        "RequiredError"                   => "GoogleAdsApi\\AdWords\\Util\\RequiredError",
        "SelectorError"                   => "GoogleAdsApi\\AdWords\\Util\\SelectorError",
        "SizeLimitError"                  => "GoogleAdsApi\\AdWords\\Util\\SizeLimitError",
        "SoapHeader"                      => "GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"              => "GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"               => "GoogleAdsApi\\AdWords\\Util\\StringLengthError",
        "PlacesLocationFeedData"          => "GoogleAdsApi\\AdWords\\Api\\FeedService\\PlacesLocationFeedData",
        "DatabaseError"                   => "GoogleAdsApi\\AdWords\\Util\\DatabaseError",
        "SystemFeedGenerationData"        => "GoogleAdsApi\\AdWords\\Util\\SystemFeedGenerationData",
        "ApiError"                        => "GoogleAdsApi\\AdWords\\Util\\ApiError",
        "ApiException"                    => "GoogleAdsApi\\AdWords\\Util\\ApiException",
        "ApplicationException"            => "GoogleAdsApi\\AdWords\\Util\\ApplicationException",
        "Feed"                            => "GoogleAdsApi\\AdWords\\Api\\FeedService\\Feed",
        "FeedOperation"                   => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedOperation",
        "FeedPage"                        => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedPage",
        "FeedReturnValue"                 => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedReturnValue",
        "ListReturnValue"                 => "GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "NullStatsPage"                   => "GoogleAdsApi\\AdWords\\Util\\NullStatsPage",
        "Operation"                       => "GoogleAdsApi\\AdWords\\Util\\Operation",
        "Page"                            => "GoogleAdsApi\\AdWords\\Util\\Page",
        "Selector"                        => "GoogleAdsApi\\AdWords\\Util\\Selector",
        "AuthenticationError.Reason"      => "GoogleAdsApi\\AdWords\\Util\\AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "GoogleAdsApi\\AdWords\\Util\\AuthorizationErrorReason",
        "ClientTermsError.Reason"         => "GoogleAdsApi\\AdWords\\Util\\ClientTermsErrorReason",
        "DatabaseError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\DatabaseErrorReason",
        "DistinctError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "GoogleAdsApi\\AdWords\\Util\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "GoogleAdsApi\\AdWords\\Util\\EntityNotFoundReason",
        "Feed.Origin"                     => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedOrigin",
        "Feed.Status"                     => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedStatus",
        "FeedAttribute.Type"              => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedAttributeType",
        "FeedError.Reason"                => "GoogleAdsApi\\AdWords\\Util\\FeedErrorReason",
        "IdError.Reason"                  => "GoogleAdsApi\\AdWords\\Util\\IdErrorReason",
        "InternalApiError.Reason"         => "GoogleAdsApi\\AdWords\\Util\\InternalApiErrorReason",
        "NewEntityCreationError.Reason"   => "GoogleAdsApi\\AdWords\\Util\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\NotEmptyErrorReason",
        "NullError.Reason"                => "GoogleAdsApi\\AdWords\\Util\\NullErrorReason",
        "OperationAccessDenied.Reason"    => "GoogleAdsApi\\AdWords\\Util\\OperationAccessDeniedReason",
        "Operator"                        => "GoogleAdsApi\\AdWords\\Util\\Operator",
        "Predicate.Operator"              => "GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"               => "GoogleAdsApi\\AdWords\\Util\\QueryErrorReason",
        "QuotaCheckError.Reason"          => "GoogleAdsApi\\AdWords\\Util\\QuotaCheckErrorReason",
        "RangeError.Reason"               => "GoogleAdsApi\\AdWords\\Util\\RangeErrorReason",
        "RateExceededError.Reason"        => "GoogleAdsApi\\AdWords\\Util\\RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\ReadOnlyErrorReason",
        "RejectedError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\RejectedErrorReason",
        "RequestError.Reason"             => "GoogleAdsApi\\AdWords\\Util\\RequestErrorReason",
        "RequiredError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\RequiredErrorReason",
        "SelectorError.Reason"            => "GoogleAdsApi\\AdWords\\Util\\SelectorErrorReason",
        "SizeLimitError.Reason"           => "GoogleAdsApi\\AdWords\\Util\\SizeLimitErrorReason",
        "SortOrder"                       => "GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"        => "GoogleAdsApi\\AdWords\\Util\\StringLengthErrorReason",
        "get"                             => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceGet",
        "getResponse"                     => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceGetResponse",
        "mutate"                          => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceMutate",
        "mutateResponse"                  => "GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceMutateResponse",
        "query"                           => "GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                   => "GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
