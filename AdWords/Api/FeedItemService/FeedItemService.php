<?php
/**
 * Contains all client objects for the FeedItemService
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

/**
 * The API error base class that provides details about an error that occurred
 * while processing a service request.
 *
 * <p>The OGNL field path is provided for parsers to identify the request data
 * element that may have caused the error.</p>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */

namespace GoogleAdsApi\AdWords\Api\FeedItemService;
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;
use GoogleAdsApi\AdWords\Util\Query;

/**
 * FeedItemService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItemService extends AdWordsSoapClient
{

    const SERVICE_NAME = "FeedItemService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/FeedItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/FeedItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "ApiError"                           => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                       => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"               => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "AuthenticationError"                => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"                 => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "ClientTermsError"                   => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "Criterion"                          => "\\GoogleAdsApi\\AdWords\\Util\\Criterion",
        "CustomParameter"                    => "\\GoogleAdsApi\\AdWords\\Util\\CustomParameter",
        "CustomParameters"                   => "\\GoogleAdsApi\\AdWords\\Util\\CustomParameters",
        "DatabaseError"                      => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "DateError"                          => "\\GoogleAdsApi\\AdWords\\Error\\DateError",
        "DateRange"                          => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DisapprovalReason"                  => "\\GoogleAdsApi\\AdWords\\Error\\DisapprovalReason",
        "DistinctError"                      => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "EntityAccessDenied"                 => "\\GoogleAdsApi\\AdWords\\Error\\EntityAccessDenied",
        "EntityCountLimitExceeded"           => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceeded",
        "EntityNotFound"                     => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFound",
        "FeedItem"                           => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItem",
        "FeedItemAdGroupTargeting"           => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemAdGroupTargeting",
        "FeedItemAttributeError"             => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemAttributeError",
        "FeedItemAttributeValue"             => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemAttributeValue",
        "FeedItemCampaignTargeting"          => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemCampaignTargeting",
        "FeedItemDevicePreference"           => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemDevicePreference",
        "FeedItemError"                      => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemError",
        "FeedItemOperation"                  => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemOperation",
        "FeedItemPage"                       => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemPage",
        "FeedItemPolicyData"                 => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemPolicyData",
        "FeedItemReturnValue"                => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemReturnValue",
        "FeedItemSchedule"                   => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemSchedule",
        "FeedItemScheduling"                 => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemScheduling",
        "IdError"                            => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "InternalApiError"                   => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "Keyword"                            => "\\GoogleAdsApi\\AdWords\\Util\\Keyword",
        "ListReturnValue"                    => "\\GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "Location"                           => "\\GoogleAdsApi\\AdWords\\Util\\Location",
        "MobileAppCategory"                  => "\\GoogleAdsApi\\AdWords\\Util\\MobileAppCategory",
        "MobileApplication"                  => "\\GoogleAdsApi\\AdWords\\Util\\MobileApplication",
        "NotEmptyError"                      => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                          => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "NullStatsPage"                      => "\\GoogleAdsApi\\AdWords\\Util\\NullStatsPage",
        "Operation"                          => "\\GoogleAdsApi\\AdWords\\Util\\Operation",
        "OperationAccessDenied"              => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDenied",
        "OrderBy"                            => "\\GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Page"                               => "\\GoogleAdsApi\\AdWords\\Util\\Page",
        "Paging"                             => "\\GoogleAdsApi\\AdWords\\Util\\Paging",
        "Placement"                          => "\\GoogleAdsApi\\AdWords\\Util\\Placement",
        "PolicyData"                         => "\\GoogleAdsApi\\AdWords\\Util\\PolicyData",
        "Predicate"                          => "\\GoogleAdsApi\\AdWords\\Util\\Predicate",
        "QueryError"                         => "\\GoogleAdsApi\\AdWords\\Error\\QueryError",
        "QuotaCheckError"                    => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckError",
        "RangeError"                         => "\\GoogleAdsApi\\AdWords\\Error\\RangeError",
        "RateExceededError"                  => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededError",
        "ReadOnlyError"                      => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyError",
        "RejectedError"                      => "\\GoogleAdsApi\\AdWords\\Error\\RejectedError",
        "RequestError"                       => "\\GoogleAdsApi\\AdWords\\Error\\RequestError",
        "RequiredError"                      => "\\GoogleAdsApi\\AdWords\\Error\\RequiredError",
        "Selector"                           => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "SelectorError"                      => "\\GoogleAdsApi\\AdWords\\Error\\SelectorError",
        "SizeLimitError"                     => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitError",
        "SoapHeader"                         => "\\GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"                 => "\\GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"                  => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthError",
        "UrlError"                           => "\\GoogleAdsApi\\AdWords\\Error\\UrlError",
        "CriterionUserInterest"              => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserInterest",
        "CriterionUserList"                  => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserList",
        "Vertical"                           => "\\GoogleAdsApi\\AdWords\\Util\\Vertical",
        "AuthenticationError.Reason"         => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "ClientTermsError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "Criterion.Type"                     => "\\GoogleAdsApi\\AdWords\\Util\\CriterionType",
        "DatabaseError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DateError.Reason"                   => "\\GoogleAdsApi\\AdWords\\Error\\DateErrorReason",
        "DayOfWeek"                          => "\\GoogleAdsApi\\AdWords\\Util\\DayOfWeek",
        "DistinctError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "EntityAccessDenied.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\EntityAccessDeniedReason",
        "EntityCountLimitExceeded.Reason"    => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFoundReason",
        "FeedItem.Status"                    => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemStatus",
        "FeedItemApprovalStatus"             => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemApprovalStatus",
        "FeedItemError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\FeedItemErrorReason",
        "FeedItemValidationStatus"           => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemValidationStatus",
        "IdError.Reason"                     => "\\GoogleAdsApi\\AdWords\\Error\\IdErrorReason",
        "InternalApiError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiErrorReason",
        "KeywordMatchType"                   => "\\GoogleAdsApi\\AdWords\\Util\\KeywordMatchType",
        "LocationTargetingStatus"            => "\\GoogleAdsApi\\AdWords\\Util\\LocationTargetingStatus",
        "MinuteOfHour"                       => "\\GoogleAdsApi\\AdWords\\Util\\MinuteOfHour",
        "NotEmptyError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyErrorReason",
        "NullError.Reason"                   => "\\GoogleAdsApi\\AdWords\\Error\\NullErrorReason",
        "OperationAccessDenied.Reason"       => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDeniedReason",
        "Operator"                           => "\\GoogleAdsApi\\AdWords\\Util\\Operator",
        "Predicate.Operator"                 => "\\GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\QueryErrorReason",
        "QuotaCheckError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckErrorReason",
        "RangeError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\RangeErrorReason",
        "RateExceededError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededErrorReason",
        "ReadOnlyError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyErrorReason",
        "RejectedError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\RejectedErrorReason",
        "RequestError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\RequestErrorReason",
        "RequiredError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\RequiredErrorReason",
        "SelectorError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\SelectorErrorReason",
        "SizeLimitError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitErrorReason",
        "SortOrder"                          => "\\GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthErrorReason",
        "UrlError.Reason"                    => "\\GoogleAdsApi\\AdWords\\Error\\UrlErrorReason",
        "CriterionUserList.MembershipStatus" => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserListMembershipStatus",
        "get"                                => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemServiceGet",
        "getResponse"                        => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemServiceGetResponse",
        "mutate"                             => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemServiceMutate",
        "mutateResponse"                     => "\\GoogleAdsApi\\AdWords\\Api\\FeedItemService\\FeedItemServiceMutateResponse",
        "query"                              => "\\GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                      => "\\GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
     * Returns a list of FeedItems that meet the selector criteria.
     *
     * @param selector Determines which FeedItems to return. If empty all
     * FeedItems are returned.
     *
     * @return The list of FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new FeedItemServiceGet($selector);
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
     * Add, remove, and set FeedItems.
     *
     * @param operations The operations to apply.
     *
     * @return The resulting FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new FeedItemServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of FeedItems that match the query.
     *
     * @param query The SQL-like AWQL query string
     *
     * @returns A list of FeedItems
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
