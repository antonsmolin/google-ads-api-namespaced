<?php
/**
 * Contains all client objects for the LocationCriterionService
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

namespace GoogleAdsApi\AdWords\Api\LocationCriterionService;
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;
use GoogleAdsApi\AdWords\Util\Query;

/**
 * LocationCriterionService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LocationCriterionService extends AdWordsSoapClient
{

    const SERVICE_NAME = "LocationCriterionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/LocationCriterionService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/LocationCriterionService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdxError"                             => "\\GoogleAdsApi\\AdWords\\Error\\AdxError",
        "ApiError"                             => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                         => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"                 => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "AuthenticationError"                  => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"                   => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "ClientTermsError"                     => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "Criterion"                            => "\\GoogleAdsApi\\AdWords\\Util\\Criterion",
        "DatabaseError"                        => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "DateError"                            => "\\GoogleAdsApi\\AdWords\\Error\\DateError",
        "DateRange"                            => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DistinctError"                        => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "IdError"                              => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "InternalApiError"                     => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "Keyword"                              => "\\GoogleAdsApi\\AdWords\\Util\\Keyword",
        "Location"                             => "\\GoogleAdsApi\\AdWords\\Util\\Location",
        "LocationCriterion"                    => "\\GoogleAdsApi\\AdWords\\Api\\LocationCriterionService\\LocationCriterion",
        "LocationCriterionServiceError"        => "\\GoogleAdsApi\\AdWords\\Error\\LocationCriterionServiceError",
        "MobileAppCategory"                    => "\\GoogleAdsApi\\AdWords\\Util\\MobileAppCategory",
        "MobileApplication"                    => "\\GoogleAdsApi\\AdWords\\Util\\MobileApplication",
        "NotEmptyError"                        => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                            => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "OperationAccessDenied"                => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDenied",
        "OrderBy"                              => "\\GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Paging"                               => "\\GoogleAdsApi\\AdWords\\Util\\Paging",
        "Placement"                            => "\\GoogleAdsApi\\AdWords\\Util\\Placement",
        "Predicate"                            => "\\GoogleAdsApi\\AdWords\\Util\\Predicate",
        "QueryError"                           => "\\GoogleAdsApi\\AdWords\\Error\\QueryError",
        "QuotaCheckError"                      => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckError",
        "RangeError"                           => "\\GoogleAdsApi\\AdWords\\Error\\RangeError",
        "RateExceededError"                    => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededError",
        "ReadOnlyError"                        => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyError",
        "RejectedError"                        => "\\GoogleAdsApi\\AdWords\\Error\\RejectedError",
        "RequestError"                         => "\\GoogleAdsApi\\AdWords\\Error\\RequestError",
        "RequiredError"                        => "\\GoogleAdsApi\\AdWords\\Error\\RequiredError",
        "Selector"                             => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "SelectorError"                        => "\\GoogleAdsApi\\AdWords\\Error\\SelectorError",
        "SizeLimitError"                       => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitError",
        "SoapHeader"                           => "\\GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"                   => "\\GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"                    => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthError",
        "CriterionUserInterest"                => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserInterest",
        "CriterionUserList"                    => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserList",
        "Vertical"                             => "\\GoogleAdsApi\\AdWords\\Util\\Vertical",
        "AdxError.Reason"                      => "\\GoogleAdsApi\\AdWords\\Error\\AdxErrorReason",
        "AuthenticationError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "ClientTermsError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "Criterion.Type"                       => "\\GoogleAdsApi\\AdWords\\Util\\CriterionType",
        "DatabaseError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DateError.Reason"                     => "\\GoogleAdsApi\\AdWords\\Error\\DateErrorReason",
        "DistinctError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "IdError.Reason"                       => "\\GoogleAdsApi\\AdWords\\Error\\IdErrorReason",
        "InternalApiError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiErrorReason",
        "KeywordMatchType"                     => "\\GoogleAdsApi\\AdWords\\Util\\KeywordMatchType",
        "LocationCriterionServiceError.Reason" => "\\GoogleAdsApi\\AdWords\\Error\\LocationCriterionServiceErrorReason",
        "LocationTargetingStatus"              => "\\GoogleAdsApi\\AdWords\\Util\\LocationTargetingStatus",
        "NotEmptyError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyErrorReason",
        "NullError.Reason"                     => "\\GoogleAdsApi\\AdWords\\Error\\NullErrorReason",
        "OperationAccessDenied.Reason"         => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDeniedReason",
        "Predicate.Operator"                   => "\\GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"                    => "\\GoogleAdsApi\\AdWords\\Error\\QueryErrorReason",
        "QuotaCheckError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckErrorReason",
        "RangeError.Reason"                    => "\\GoogleAdsApi\\AdWords\\Error\\RangeErrorReason",
        "RateExceededError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyErrorReason",
        "RejectedError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\RejectedErrorReason",
        "RequestError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\RequestErrorReason",
        "RequiredError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\RequiredErrorReason",
        "SelectorError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\SelectorErrorReason",
        "SizeLimitError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitErrorReason",
        "SortOrder"                            => "\\GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthErrorReason",
        "CriterionUserList.MembershipStatus"   => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserListMembershipStatus",
        "get"                                  => "\\GoogleAdsApi\\AdWords\\Api\\LocationCriterionService\\LocationCriterionServiceGet",
        "getResponse"                          => "\\GoogleAdsApi\\AdWords\\Api\\LocationCriterionService\\LocationCriterionServiceGetResponse",
        "query"                                => "\\GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                        => "\\GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
     * Returns a list of {@link LocationCriterion}'s that match the specified selector.
     *
     * @param selector filters the LocationCriterion to be returned.
     *
     * @return A list of location criterion.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($selector)
    {
        $args = new LocationCriterionServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of {@link LocationCriterion}s that match the query.
     *
     * @param query The SQL-like AWQL query string
     *
     * @returns The list of location criteria
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
