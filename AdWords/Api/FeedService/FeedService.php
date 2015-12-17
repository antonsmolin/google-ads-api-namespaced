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
        "AuthenticationError"             => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"              => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "ClientTermsError"                => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "DateRange"                       => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DistinctError"                   => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "EntityCountLimitExceeded"        => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceeded",
        "EntityNotFound"                  => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFound",
        "FeedAttribute"                   => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedAttribute",
        "FeedError"                       => "\\GoogleAdsApi\\AdWords\\Error\\FeedError",
        "IdError"                         => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "InternalApiError"                => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "NewEntityCreationError"          => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationError",
        "NotEmptyError"                   => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                       => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "OAuthInfo"                       => "\\GoogleAdsApi\\AdWords\\Util\\OAuthInfo",
        "OperationAccessDenied"           => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDenied",
        "OrderBy"                         => "\\GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Paging"                          => "\\GoogleAdsApi\\AdWords\\Util\\Paging",
        "Predicate"                       => "\\GoogleAdsApi\\AdWords\\Util\\Predicate",
        "QueryError"                      => "\\GoogleAdsApi\\AdWords\\Error\\QueryError",
        "QuotaCheckError"                 => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckError",
        "RangeError"                      => "\\GoogleAdsApi\\AdWords\\Error\\RangeError",
        "RateExceededError"               => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededError",
        "ReadOnlyError"                   => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyError",
        "RejectedError"                   => "\\GoogleAdsApi\\AdWords\\Error\\RejectedError",
        "RequestError"                    => "\\GoogleAdsApi\\AdWords\\Error\\RequestError",
        "RequiredError"                   => "\\GoogleAdsApi\\AdWords\\Error\\RequiredError",
        "SelectorError"                   => "\\GoogleAdsApi\\AdWords\\Error\\SelectorError",
        "SizeLimitError"                  => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitError",
        "SoapHeader"                      => "\\GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"              => "\\GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"               => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthError",
        "PlacesLocationFeedData"          => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\PlacesLocationFeedData",
        "DatabaseError"                   => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "SystemFeedGenerationData"        => "\\GoogleAdsApi\\AdWords\\Util\\SystemFeedGenerationData",
        "ApiError"                        => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                    => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"            => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "Feed"                            => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\Feed",
        "FeedOperation"                   => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedOperation",
        "FeedPage"                        => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedPage",
        "FeedReturnValue"                 => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedReturnValue",
        "ListReturnValue"                 => "\\GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "NullStatsPage"                   => "\\GoogleAdsApi\\AdWords\\Util\\NullStatsPage",
        "Operation"                       => "\\GoogleAdsApi\\AdWords\\Util\\Operation",
        "Page"                            => "\\GoogleAdsApi\\AdWords\\Util\\Page",
        "Selector"                        => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "AuthenticationError.Reason"      => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "ClientTermsError.Reason"         => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "DatabaseError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DistinctError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFoundReason",
        "Feed.Origin"                     => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedOrigin",
        "Feed.Status"                     => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedStatus",
        "FeedAttribute.Type"              => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedAttributeType",
        "FeedError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\FeedErrorReason",
        "IdError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\IdErrorReason",
        "InternalApiError.Reason"         => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiErrorReason",
        "NewEntityCreationError.Reason"   => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyErrorReason",
        "NullError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\NullErrorReason",
        "OperationAccessDenied.Reason"    => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDeniedReason",
        "Operator"                        => "\\GoogleAdsApi\\AdWords\\Util\\Operator",
        "Predicate.Operator"              => "\\GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\QueryErrorReason",
        "QuotaCheckError.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckErrorReason",
        "RangeError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\RangeErrorReason",
        "RateExceededError.Reason"        => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyErrorReason",
        "RejectedError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\RejectedErrorReason",
        "RequestError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\RequestErrorReason",
        "RequiredError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\RequiredErrorReason",
        "SelectorError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\SelectorErrorReason",
        "SizeLimitError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitErrorReason",
        "SortOrder"                       => "\\GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"        => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthErrorReason",
        "get"                             => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceGet",
        "getResponse"                     => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceGetResponse",
        "mutate"                          => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceMutate",
        "mutateResponse"                  => "\\GoogleAdsApi\\AdWords\\Api\\FeedService\\FeedServiceMutateResponse",
        "query"                           => "\\GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                   => "\\GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
