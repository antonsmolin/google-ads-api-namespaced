<?php
/**
 * Contains all client objects for the CampaignCriterionService
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

namespace GoogleAdsApi\AdWords\Api\CampaignCriterionService;
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;
use GoogleAdsApi\AdWords\Util\Query;

/**
 * CampaignCriterionService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignCriterionService extends AdWordsSoapClient
{

    const SERVICE_NAME = "CampaignCriterionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/CampaignCriterionService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/CampaignCriterionService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdSchedule"                          => "\\GoogleAdsApi\\AdWords\\Util\\AdSchedule",
        "Address"                             => "\\GoogleAdsApi\\AdWords\\Util\\Address",
        "AdxError"                            => "\\GoogleAdsApi\\AdWords\\Error\\AdxError",
        "AgeRange"                            => "\\GoogleAdsApi\\AdWords\\Util\\AgeRange",
        "ApiError"                            => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                        => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"                => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "AuthenticationError"                 => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"                  => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "CampaignCriterion"                   => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterion",
        "CampaignCriterionError"              => "\\GoogleAdsApi\\AdWords\\Error\\CampaignCriterionError",
        "CampaignCriterionOperation"          => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionOperation",
        "CampaignCriterionPage"               => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionPage",
        "CampaignCriterionReturnValue"        => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionReturnValue",
        "Carrier"                             => "\\GoogleAdsApi\\AdWords\\Util\\Carrier",
        "ClientTermsError"                    => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "ConstantOperand"                     => "\\GoogleAdsApi\\AdWords\\Util\\ConstantOperand",
        "ContentLabel"                        => "\\GoogleAdsApi\\AdWords\\Util\\ContentLabel",
        "Criterion"                           => "\\GoogleAdsApi\\AdWords\\Util\\Criterion",
        "CriterionError"                      => "\\GoogleAdsApi\\AdWords\\Error\\CriterionError",
        "CriterionParameter"                  => "\\GoogleAdsApi\\AdWords\\Util\\CriterionParameter",
        "DatabaseError"                       => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "DateRange"                           => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DistinctError"                       => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "EntityCountLimitExceeded"            => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceeded",
        "EntityNotFound"                      => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFound",
        "Function"                            => "\\GoogleAdsApi\\AdWords\\Util\\FeedFunction",
        "FunctionError"                       => "\\GoogleAdsApi\\AdWords\\Error\\FunctionError",
        "Gender"                              => "\\GoogleAdsApi\\AdWords\\Util\\Gender",
        "GeoPoint"                            => "\\GoogleAdsApi\\AdWords\\Util\\GeoPoint",
        "GeoTargetOperand"                    => "\\GoogleAdsApi\\AdWords\\Util\\GeoTargetOperand",
        "IdError"                             => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "IncomeOperand"                       => "\\GoogleAdsApi\\AdWords\\Util\\IncomeOperand",
        "InternalApiError"                    => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "IpBlock"                             => "\\GoogleAdsApi\\AdWords\\Util\\IpBlock",
        "Keyword"                             => "\\GoogleAdsApi\\AdWords\\Util\\Keyword",
        "Language"                            => "\\GoogleAdsApi\\AdWords\\Util\\Language",
        "ListReturnValue"                     => "\\GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "Location"                            => "\\GoogleAdsApi\\AdWords\\Util\\Location",
        "LocationExtensionOperand"            => "\\GoogleAdsApi\\AdWords\\Util\\LocationExtensionOperand",
        "MobileAppCategory"                   => "\\GoogleAdsApi\\AdWords\\Util\\MobileAppCategory",
        "MobileApplication"                   => "\\GoogleAdsApi\\AdWords\\Util\\MobileApplication",
        "MobileDevice"                        => "\\GoogleAdsApi\\AdWords\\Util\\MobileDevice",
        "NegativeCampaignCriterion"           => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\NegativeCampaignCriterion",
        "NewEntityCreationError"              => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationError",
        "NotEmptyError"                       => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                           => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "FunctionArgumentOperand"             => "\\GoogleAdsApi\\AdWords\\Util\\FunctionArgumentOperand",
        "OperatingSystemVersion"              => "\\GoogleAdsApi\\AdWords\\Util\\OperatingSystemVersion",
        "Operation"                           => "\\GoogleAdsApi\\AdWords\\Util\\Operation",
        "OperationAccessDenied"               => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDenied",
        "OperatorError"                       => "\\GoogleAdsApi\\AdWords\\Error\\OperatorError",
        "OrderBy"                             => "\\GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Page"                                => "\\GoogleAdsApi\\AdWords\\Util\\Page",
        "Paging"                              => "\\GoogleAdsApi\\AdWords\\Util\\Paging",
        "PagingError"                         => "\\GoogleAdsApi\\AdWords\\Error\\PagingError",
        "Placement"                           => "\\GoogleAdsApi\\AdWords\\Util\\Placement",
        "PlacesOfInterestOperand"             => "\\GoogleAdsApi\\AdWords\\Util\\PlacesOfInterestOperand",
        "Platform"                            => "\\GoogleAdsApi\\AdWords\\Util\\Platform",
        "Predicate"                           => "\\GoogleAdsApi\\AdWords\\Util\\Predicate",
        "ProductAdwordsGrouping"              => "\\GoogleAdsApi\\AdWords\\Util\\ProductAdwordsGrouping",
        "ProductAdwordsLabels"                => "\\GoogleAdsApi\\AdWords\\Util\\ProductAdwordsLabels",
        "ProductBiddingCategory"              => "\\GoogleAdsApi\\AdWords\\Util\\ProductBiddingCategory",
        "ProductBrand"                        => "\\GoogleAdsApi\\AdWords\\Util\\ProductBrand",
        "ProductCanonicalCondition"           => "\\GoogleAdsApi\\AdWords\\Util\\ProductCanonicalCondition",
        "ProductChannel"                      => "\\GoogleAdsApi\\AdWords\\Util\\ProductChannel",
        "ProductChannelExclusivity"           => "\\GoogleAdsApi\\AdWords\\Util\\ProductChannelExclusivity",
        "ProductLegacyCondition"              => "\\GoogleAdsApi\\AdWords\\Util\\ProductLegacyCondition",
        "ProductCustomAttribute"              => "\\GoogleAdsApi\\AdWords\\Util\\ProductCustomAttribute",
        "ProductDimension"                    => "\\GoogleAdsApi\\AdWords\\Util\\ProductDimension",
        "ProductOfferId"                      => "\\GoogleAdsApi\\AdWords\\Util\\ProductOfferId",
        "ProductScope"                        => "\\GoogleAdsApi\\AdWords\\Util\\ProductScope",
        "ProductType"                         => "\\GoogleAdsApi\\AdWords\\Util\\ProductType",
        "ProductTypeFull"                     => "\\GoogleAdsApi\\AdWords\\Util\\ProductTypeFull",
        "Proximity"                           => "\\GoogleAdsApi\\AdWords\\Util\\Proximity",
        "QueryError"                          => "\\GoogleAdsApi\\AdWords\\Error\\QueryError",
        "QuotaCheckError"                     => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckError",
        "RangeError"                          => "\\GoogleAdsApi\\AdWords\\Error\\RangeError",
        "RateExceededError"                   => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededError",
        "ReadOnlyError"                       => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyError",
        "RegionCodeError"                     => "\\GoogleAdsApi\\AdWords\\Error\\RegionCodeError",
        "RejectedError"                       => "\\GoogleAdsApi\\AdWords\\Error\\RejectedError",
        "RequestError"                        => "\\GoogleAdsApi\\AdWords\\Error\\RequestError",
        "RequiredError"                       => "\\GoogleAdsApi\\AdWords\\Error\\RequiredError",
        "Selector"                            => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "SelectorError"                       => "\\GoogleAdsApi\\AdWords\\Error\\SelectorError",
        "LocationGroups"                      => "\\GoogleAdsApi\\AdWords\\Util\\LocationGroups",
        "SizeLimitError"                      => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitError",
        "SoapHeader"                          => "\\GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"                  => "\\GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"                   => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthError",
        "String_StringMapEntry"               => "\\GoogleAdsApi\\AdWords\\Error\\String_StringMapEntry",
        "UnknownProductDimension"             => "\\GoogleAdsApi\\AdWords\\Util\\UnknownProductDimension",
        "CriterionUserInterest"               => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserInterest",
        "CriterionUserList"                   => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserList",
        "Vertical"                            => "\\GoogleAdsApi\\AdWords\\Util\\Vertical",
        "Webpage"                             => "\\GoogleAdsApi\\AdWords\\Util\\Webpage",
        "WebpageCondition"                    => "\\GoogleAdsApi\\AdWords\\Util\\WebpageCondition",
        "WebpageParameter"                    => "\\GoogleAdsApi\\AdWords\\Util\\WebpageParameter",
        "YouTubeChannel"                      => "\\GoogleAdsApi\\AdWords\\Util\\YouTubeChannel",
        "YouTubeVideo"                        => "\\GoogleAdsApi\\AdWords\\Util\\YouTubeVideo",
        "AdxError.Reason"                     => "\\GoogleAdsApi\\AdWords\\Error\\AdxErrorReason",
        "AgeRange.AgeRangeType"               => "\\GoogleAdsApi\\AdWords\\Util\\AgeRangeAgeRangeType",
        "AuthenticationError.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "CampaignCriterionError.Reason"       => "\\GoogleAdsApi\\AdWords\\Error\\CampaignCriterionErrorReason",
        "ClientTermsError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "ConstantOperand.ConstantType"        => "\\GoogleAdsApi\\AdWords\\Util\\ConstantOperandConstantType",
        "ConstantOperand.Unit"                => "\\GoogleAdsApi\\AdWords\\Util\\ConstantOperandUnit",
        "ContentLabelType"                    => "\\GoogleAdsApi\\AdWords\\Util\\ContentLabelType",
        "Criterion.Type"                      => "\\GoogleAdsApi\\AdWords\\Util\\CriterionType",
        "CriterionError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\CriterionErrorReason",
        "DatabaseError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DayOfWeek"                           => "\\GoogleAdsApi\\AdWords\\Util\\DayOfWeek",
        "DistinctError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"     => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFoundReason",
        "Function.Operator"                   => "\\GoogleAdsApi\\AdWords\\Util\\FunctionOperator",
        "FunctionError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\FunctionErrorReason",
        "Gender.GenderType"                   => "\\GoogleAdsApi\\AdWords\\Util\\GenderGenderType",
        "IdError.Reason"                      => "\\GoogleAdsApi\\AdWords\\Error\\IdErrorReason",
        "IncomeTier"                          => "\\GoogleAdsApi\\AdWords\\Util\\IncomeTier",
        "InternalApiError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiErrorReason",
        "KeywordMatchType"                    => "\\GoogleAdsApi\\AdWords\\Util\\KeywordMatchType",
        "LocationTargetingStatus"             => "\\GoogleAdsApi\\AdWords\\Util\\LocationTargetingStatus",
        "MinuteOfHour"                        => "\\GoogleAdsApi\\AdWords\\Util\\MinuteOfHour",
        "MobileDevice.DeviceType"             => "\\GoogleAdsApi\\AdWords\\Util\\MobileDeviceDeviceType",
        "NewEntityCreationError.Reason"       => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyErrorReason",
        "NullError.Reason"                    => "\\GoogleAdsApi\\AdWords\\Error\\NullErrorReason",
        "OperatingSystemVersion.OperatorType" => "\\GoogleAdsApi\\AdWords\\Util\\OperatingSystemVersionOperatorType",
        "OperationAccessDenied.Reason"        => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDeniedReason",
        "Operator"                            => "\\GoogleAdsApi\\AdWords\\Util\\Operator",
        "OperatorError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\OperatorErrorReason",
        "PagingError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\PagingErrorReason",
        "PlacesOfInterestOperand.Category"    => "\\GoogleAdsApi\\AdWords\\Util\\PlacesOfInterestOperandCategory",
        "Predicate.Operator"                  => "\\GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "ProductCanonicalCondition.Condition" => "\\GoogleAdsApi\\AdWords\\Util\\ProductCanonicalConditionCondition",
        "ProductDimensionType"                => "\\GoogleAdsApi\\AdWords\\Util\\ProductDimensionType",
        "Proximity.DistanceUnits"             => "\\GoogleAdsApi\\AdWords\\Util\\ProximityDistanceUnits",
        "QueryError.Reason"                   => "\\GoogleAdsApi\\AdWords\\Error\\QueryErrorReason",
        "QuotaCheckError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckErrorReason",
        "RangeError.Reason"                   => "\\GoogleAdsApi\\AdWords\\Error\\RangeErrorReason",
        "RateExceededError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyErrorReason",
        "RegionCodeError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\RegionCodeErrorReason",
        "RejectedError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\RejectedErrorReason",
        "RequestError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\RequestErrorReason",
        "RequiredError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\RequiredErrorReason",
        "SelectorError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\SelectorErrorReason",
        "ShoppingProductChannel"              => "\\GoogleAdsApi\\AdWords\\Util\\ShoppingProductChannel",
        "ShoppingProductChannelExclusivity"   => "\\GoogleAdsApi\\AdWords\\Util\\ShoppingProductChannelExclusivity",
        "SizeLimitError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitErrorReason",
        "SortOrder"                           => "\\GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthErrorReason",
        "CriterionUserList.MembershipStatus"  => "\\GoogleAdsApi\\AdWords\\Util\\CriterionUserListMembershipStatus",
        "WebpageConditionOperand"             => "\\GoogleAdsApi\\AdWords\\Util\\WebpageConditionOperand",
        "get"                                 => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionServiceGet",
        "getResponse"                         => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionServiceGetResponse",
        "mutate"                              => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionServiceMutate",
        "mutateResponse"                      => "\\GoogleAdsApi\\AdWords\\Api\\CampaignCriterionService\\CampaignCriterionServiceMutateResponse",
        "query"                               => "\\GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                       => "\\GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
     * Gets campaign criteria.
     *
     * @param serviceSelector The selector specifying the {@link CampaignCriterion}s to return.
     *
     * @return A list of campaign criteria.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $args = new CampaignCriterionServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
     *
     *
     *
     * Adds, removes or updates campaign criteria.
     *
     * @param operations The operations to apply.
     *
     * @return The added campaign criteria (without any optional parts).
     * @throws ApiException when there is at least one error with the request.
     */
    public function mutate($operations)
    {
        $args = new CampaignCriterionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of campaign criteria that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @return A list of campaign criteria.
     * @throws ApiException if problems occur while parsing the query or fetching campaign criteria.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
