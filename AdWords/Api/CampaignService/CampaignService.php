<?php
/**
 * Contains all client objects for the CampaignService
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

namespace GoogleAdsApi\AdWords\Api\CampaignService;
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;
use GoogleAdsApi\AdWords\Util\MutateLabel;
use GoogleAdsApi\AdWords\Util\Query;

/**
 * CampaignService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignService extends AdWordsSoapClient
{

    const SERVICE_NAME = "CampaignService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/CampaignService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/CampaignService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdxError"                                       => "\\GoogleAdsApi\\AdWords\\Error\\AdxError",
        "ApiError"                                       => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                                   => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"                           => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "LabelAttribute"                                 => "\\GoogleAdsApi\\AdWords\\Util\\LabelAttribute",
        "AuthenticationError"                            => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"                             => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "BiddingErrors"                                  => "\\GoogleAdsApi\\AdWords\\Error\\BiddingErrors",
        "BiddingScheme"                                  => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\BiddingScheme",
        "BiddingStrategyConfiguration"                   => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\BiddingStrategyConfiguration",
        "Bids"                                           => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\Bids",
        "Budget"                                         => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\Budget",
        "BudgetError"                                    => "\\GoogleAdsApi\\AdWords\\Error\\BudgetError",
        "BudgetOptimizerBiddingScheme"                   => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\BudgetOptimizerBiddingScheme",
        "Campaign"                                       => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\Campaign",
        "CampaignError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\CampaignError",
        "CampaignLabel"                                  => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignLabel",
        "CampaignLabelOperation"                         => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignLabelOperation",
        "CampaignLabelReturnValue"                       => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignLabelReturnValue",
        "TextLabel"                                      => "\\GoogleAdsApi\\AdWords\\Util\\TextLabel",
        "DisplayAttribute"                               => "\\GoogleAdsApi\\AdWords\\Util\\DisplayAttribute",
        "CampaignOperation"                              => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignOperation",
        "CampaignPage"                                   => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignPage",
        "CampaignReturnValue"                            => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignReturnValue",
        "ClientTermsError"                               => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "ComparableValue"                                => "\\GoogleAdsApi\\AdWords\\Util\\ComparableValue",
        "ConversionOptimizerBiddingScheme"               => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\ConversionOptimizerBiddingScheme",
        "ConversionOptimizerEligibility"                 => "\\GoogleAdsApi\\AdWords\\Util\\ConversionOptimizerEligibility",
        "CpaBid"                                         => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\CpaBid",
        "CpcBid"                                         => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\CpcBid",
        "CpmBid"                                         => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\CpmBid",
        "CustomParameter"                                => "\\GoogleAdsApi\\AdWords\\Util\\CustomParameter",
        "CustomParameters"                               => "\\GoogleAdsApi\\AdWords\\Util\\CustomParameters",
        "DatabaseError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "DateError"                                      => "\\GoogleAdsApi\\AdWords\\Error\\DateError",
        "DateRange"                                      => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DateRangeError"                                 => "\\GoogleAdsApi\\AdWords\\Error\\DateRangeError",
        "DistinctError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "DoubleValue"                                    => "\\GoogleAdsApi\\AdWords\\Util\\DoubleValue",
        "DynamicSearchAdsSetting"                        => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\DynamicSearchAdsSetting",
        "EnhancedCpcBiddingScheme"                       => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\EnhancedCpcBiddingScheme",
        "EntityAccessDenied"                             => "\\GoogleAdsApi\\AdWords\\Error\\EntityAccessDenied",
        "EntityCountLimitExceeded"                       => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceeded",
        "EntityNotFound"                                 => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFound",
        "ForwardCompatibilityError"                      => "\\GoogleAdsApi\\AdWords\\Error\\ForwardCompatibilityError",
        "FrequencyCap"                                   => "\\GoogleAdsApi\\AdWords\\Util\\FrequencyCap",
        "GeoTargetTypeSetting"                           => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\GeoTargetTypeSetting",
        "IdError"                                        => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "InternalApiError"                               => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "Label"                                          => "\\GoogleAdsApi\\AdWords\\Util\\Label",
        "ListReturnValue"                                => "\\GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "LongValue"                                      => "\\GoogleAdsApi\\AdWords\\Util\\LongValue",
        "ManualCpcBiddingScheme"                         => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\ManualCpcBiddingScheme",
        "ManualCpmBiddingScheme"                         => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\ManualCpmBiddingScheme",
        "Money"                                          => "\\GoogleAdsApi\\AdWords\\Util\\Money",
        "NetworkSetting"                                 => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\NetworkSetting",
        "NewEntityCreationError"                         => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationError",
        "NotEmptyError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                                      => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "NumberValue"                                    => "\\GoogleAdsApi\\AdWords\\Util\\NumberValue",
        "Operation"                                      => "\\GoogleAdsApi\\AdWords\\Util\\Operation",
        "OperationAccessDenied"                          => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDenied",
        "OperatorError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\OperatorError",
        "OrderBy"                                        => "\\GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Page"                                           => "\\GoogleAdsApi\\AdWords\\Util\\Page",
        "PageOnePromotedBiddingScheme"                   => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\PageOnePromotedBiddingScheme",
        "Paging"                                         => "\\GoogleAdsApi\\AdWords\\Util\\Paging",
        "Predicate"                                      => "\\GoogleAdsApi\\AdWords\\Util\\Predicate",
        "QueryError"                                     => "\\GoogleAdsApi\\AdWords\\Error\\QueryError",
        "QuotaCheckError"                                => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckError",
        "RangeError"                                     => "\\GoogleAdsApi\\AdWords\\Error\\RangeError",
        "RateExceededError"                              => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededError",
        "ReadOnlyError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyError",
        "RealTimeBiddingSetting"                         => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\RealTimeBiddingSetting",
        "RegionCodeError"                                => "\\GoogleAdsApi\\AdWords\\Error\\RegionCodeError",
        "RejectedError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\RejectedError",
        "RequestError"                                   => "\\GoogleAdsApi\\AdWords\\Error\\RequestError",
        "RequiredError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\RequiredError",
        "Selector"                                       => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "SelectorError"                                  => "\\GoogleAdsApi\\AdWords\\Error\\SelectorError",
        "Setting"                                        => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\Setting",
        "SettingError"                                   => "\\GoogleAdsApi\\AdWords\\Error\\SettingError",
        "ShoppingSetting"                                => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\ShoppingSetting",
        "SizeLimitError"                                 => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitError",
        "SoapHeader"                                     => "\\GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"                             => "\\GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StatsQueryError"                                => "\\GoogleAdsApi\\AdWords\\Error\\StatsQueryError",
        "StringFormatError"                              => "\\GoogleAdsApi\\AdWords\\Error\\StringFormatError",
        "StringLengthError"                              => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthError",
        "String_StringMapEntry"                          => "\\GoogleAdsApi\\AdWords\\Error\\String_StringMapEntry",
        "TargetCpaBiddingScheme"                         => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\TargetCpaBiddingScheme",
        "TargetOutrankShareBiddingScheme"                => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\TargetOutrankShareBiddingScheme",
        "TargetRoasBiddingScheme"                        => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\TargetRoasBiddingScheme",
        "TargetSpendBiddingScheme"                       => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\TargetSpendBiddingScheme",
        "TrackingSetting"                                => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\TrackingSetting",
        "UrlError"                                       => "\\GoogleAdsApi\\AdWords\\Error\\UrlError",
        "AdServingOptimizationStatus"                    => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\AdServingOptimizationStatus",
        "AdvertisingChannelSubType"                      => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\AdvertisingChannelSubType",
        "AdvertisingChannelType"                         => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\AdvertisingChannelType",
        "AdxError.Reason"                                => "\\GoogleAdsApi\\AdWords\\Error\\AdxErrorReason",
        "AuthenticationError.Reason"                     => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"                      => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "BidSource"                                      => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\BidSource",
        "BiddingErrors.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\BiddingErrorsReason",
        "BiddingStrategySource"                          => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\BiddingStrategySource",
        "BiddingStrategyType"                            => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\BiddingStrategyType",
        "Budget.BudgetDeliveryMethod"                    => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetBudgetDeliveryMethod",
        "Budget.BudgetPeriod"                            => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetBudgetPeriod",
        "Budget.BudgetStatus"                            => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetBudgetStatus",
        "BudgetError.Reason"                             => "\\GoogleAdsApi\\AdWords\\Error\\BudgetErrorReason",
        "CampaignError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\CampaignErrorReason",
        "CampaignStatus"                                 => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignStatus",
        "ClientTermsError.Reason"                        => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "ConversionOptimizerBiddingScheme.BidType"       => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\ConversionOptimizerBiddingSchemeBidType",
        "ConversionOptimizerBiddingScheme.PricingMode"   => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\ConversionOptimizerBiddingSchemePricingMode",
        "ConversionOptimizerEligibility.RejectionReason" => "\\GoogleAdsApi\\AdWords\\Error\\ConversionOptimizerEligibilityRejectionReason",
        "DatabaseError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DateError.Reason"                               => "\\GoogleAdsApi\\AdWords\\Error\\DateErrorReason",
        "DateRangeError.Reason"                          => "\\GoogleAdsApi\\AdWords\\Error\\DateRangeErrorReason",
        "DistinctError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "EntityAccessDenied.Reason"                      => "\\GoogleAdsApi\\AdWords\\Error\\EntityAccessDeniedReason",
        "EntityCountLimitExceeded.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                          => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFoundReason",
        "ForwardCompatibilityError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\ForwardCompatibilityErrorReason",
        "GeoTargetTypeSetting.NegativeGeoTargetType"     => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\GeoTargetTypeSettingNegativeGeoTargetType",
        "GeoTargetTypeSetting.PositiveGeoTargetType"     => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\GeoTargetTypeSettingPositiveGeoTargetType",
        "IdError.Reason"                                 => "\\GoogleAdsApi\\AdWords\\Error\\IdErrorReason",
        "InternalApiError.Reason"                        => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiErrorReason",
        "Label.Status"                                   => "\\GoogleAdsApi\\AdWords\\Util\\LabelStatus",
        "Level"                                          => "\\GoogleAdsApi\\AdWords\\Util\\Level",
        "NewEntityCreationError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyErrorReason",
        "NullError.Reason"                               => "\\GoogleAdsApi\\AdWords\\Error\\NullErrorReason",
        "OperationAccessDenied.Reason"                   => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDeniedReason",
        "Operator"                                       => "\\GoogleAdsApi\\AdWords\\Util\\Operator",
        "OperatorError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\OperatorErrorReason",
        "PageOnePromotedBiddingScheme.StrategyGoal"      => "\\GoogleAdsApi\\AdWords\\Api\\BiddingStrategyService\\PageOnePromotedBiddingSchemeStrategyGoal",
        "Predicate.Operator"                             => "\\GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"                              => "\\GoogleAdsApi\\AdWords\\Error\\QueryErrorReason",
        "QuotaCheckError.Reason"                         => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckErrorReason",
        "RangeError.Reason"                              => "\\GoogleAdsApi\\AdWords\\Error\\RangeErrorReason",
        "RateExceededError.Reason"                       => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededErrorReason",
        "ReadOnlyError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyErrorReason",
        "RegionCodeError.Reason"                         => "\\GoogleAdsApi\\AdWords\\Error\\RegionCodeErrorReason",
        "RejectedError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\RejectedErrorReason",
        "RequestError.Reason"                            => "\\GoogleAdsApi\\AdWords\\Error\\RequestErrorReason",
        "RequiredError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\RequiredErrorReason",
        "SelectorError.Reason"                           => "\\GoogleAdsApi\\AdWords\\Error\\SelectorErrorReason",
        "ServingStatus"                                  => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\ServingStatus",
        "SettingError.Reason"                            => "\\GoogleAdsApi\\AdWords\\Error\\SettingErrorReason",
        "SizeLimitError.Reason"                          => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitErrorReason",
        "SortOrder"                                      => "\\GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StatsQueryError.Reason"                         => "\\GoogleAdsApi\\AdWords\\Error\\StatsQueryErrorReason",
        "StringFormatError.Reason"                       => "\\GoogleAdsApi\\AdWords\\Error\\StringFormatErrorReason",
        "StringLengthError.Reason"                       => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthErrorReason",
        "TimeUnit"                                       => "\\GoogleAdsApi\\AdWords\\Util\\TimeUnit",
        "UrlError.Reason"                                => "\\GoogleAdsApi\\AdWords\\Error\\UrlErrorReason",
        "get"                                            => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignServiceGet",
        "getResponse"                                    => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignServiceGetResponse",
        "mutate"                                         => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignServiceMutate",
        "mutateResponse"                                 => "\\GoogleAdsApi\\AdWords\\Api\\CampaignService\\CampaignServiceMutateResponse",
        "mutateLabel"                                    => "\\GoogleAdsApi\\AdWords\\Util\\MutateLabel",
        "mutateLabelResponse"                            => "\\GoogleAdsApi\\AdWords\\Util\\MutateLabelResponse",
        "query"                                          => "\\GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                                  => "\\GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
     * Returns the list of campaigns that meet the selector criteria.
     *
     * @param serviceSelector the selector specifying the {@link Campaign}s to return.
     *
     * @return A list of campaigns.
     * @throws ApiException if problems occurred while fetching campaign information.
     */
    public function get($serviceSelector)
    {
        $args = new CampaignServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Adds, updates, or removes campaigns.
     * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
     * <code>REMOVE</code> operator. To remove a campaign, set its
     * {@link Campaign#status status} to {@code REMOVED}.</p>
     *
     * @param operations A list of unique operations.
     * The same campaign cannot be specified in more than one operation.
     *
     * @return The list of updated campaigns, returned in the same order as the
     * <code>operations</code> array.
     * @throws ApiException if problems occurred while updating campaign information.
     */
    public function mutate($operations)
    {
        $args = new CampaignServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     *
     *
     *
     * Adds labels to the {@linkplain Campaign campaign} or removes
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
     * {@linkplain Campaign campaign}.
     * <p>Add - Apply an existing label to an existing
     * {@linkplain Campaign campaign}. The {@code campaignId} must reference an existing
     * {@linkplain Campaign}. The {@code labelId} must reference an existing
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * <p>Remove - Removes the link between the specified
     * {@linkplain Campaign campaign} and
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     *
     * @param operations the operations to apply.
     *
     * @return a list of {@linkplain CampaignLabel}s where each entry in the list is the result of
     * applying the operation in the input list with the same index. For an
     * add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
     * In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
     * @throws ApiException when there are one or more errors with the request.
     */
    public function mutateLabel($operations)
    {
        $args = new MutateLabel($operations);
        $result = $this->__soapCall("mutateLabel", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of campaigns that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @return A list of campaigns.
     * @throws ApiException if problems occur while parsing the query or fetching campaign
     * information.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
