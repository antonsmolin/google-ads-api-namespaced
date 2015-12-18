<?php
/**
 * Contains all client objects for the CampaignFeedService
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

namespace GoogleAdsApi\AdWords\Api\CampaignFeedService;
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;
use GoogleAdsApi\AdWords\Util\Query;

/**
 * CampaignFeedService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignFeedService extends AdWordsSoapClient
{

    const SERVICE_NAME = "CampaignFeedService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/CampaignFeedService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/CampaignFeedService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "ApiError"                          => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                      => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"              => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "AuthenticationError"               => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"                => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "CampaignFeed"                      => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeed",
        "CampaignFeedError"                 => "\\GoogleAdsApi\\AdWords\\Error\\CampaignFeedError",
        "CampaignFeedOperation"             => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedOperation",
        "CampaignFeedPage"                  => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedPage",
        "CampaignFeedReturnValue"           => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedReturnValue",
        "ClientTermsError"                  => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "CollectionSizeError"               => "\\GoogleAdsApi\\AdWords\\Error\\CollectionSizeError",
        "ConstantOperand"                   => "\\GoogleAdsApi\\AdWords\\Util\\ConstantOperand",
        "DatabaseError"                     => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "DateRange"                         => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DistinctError"                     => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "EntityCountLimitExceeded"          => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceeded",
        "EntityNotFound"                    => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFound",
        "FeedAttributeOperand"              => "\\GoogleAdsApi\\AdWords\\Util\\FeedAttributeOperand",
        "Function"                          => "\\GoogleAdsApi\\AdWords\\Util\\FeedFunction",
        "FunctionError"                     => "\\GoogleAdsApi\\AdWords\\Error\\FunctionError",
        "FunctionOperand"                   => "\\GoogleAdsApi\\AdWords\\Util\\FunctionOperand",
        "IdError"                           => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "InternalApiError"                  => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "ListReturnValue"                   => "\\GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "NotEmptyError"                     => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                         => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "NullStatsPage"                     => "\\GoogleAdsApi\\AdWords\\Util\\NullStatsPage",
        "FunctionArgumentOperand"           => "\\GoogleAdsApi\\AdWords\\Util\\FunctionArgumentOperand",
        "Operation"                         => "\\GoogleAdsApi\\AdWords\\Util\\Operation",
        "OperationAccessDenied"             => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDenied",
        "OperatorError"                     => "\\GoogleAdsApi\\AdWords\\Error\\OperatorError",
        "OrderBy"                           => "\\GoogleAdsApi\\AdWords\\Util\\OrderBy",
        "Page"                              => "\\GoogleAdsApi\\AdWords\\Util\\Page",
        "Paging"                            => "\\GoogleAdsApi\\AdWords\\Util\\Paging",
        "Predicate"                         => "\\GoogleAdsApi\\AdWords\\Util\\Predicate",
        "QueryError"                        => "\\GoogleAdsApi\\AdWords\\Error\\QueryError",
        "QuotaCheckError"                   => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckError",
        "RangeError"                        => "\\GoogleAdsApi\\AdWords\\Error\\RangeError",
        "RateExceededError"                 => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededError",
        "ReadOnlyError"                     => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyError",
        "RejectedError"                     => "\\GoogleAdsApi\\AdWords\\Error\\RejectedError",
        "RequestContextOperand"             => "\\GoogleAdsApi\\AdWords\\Util\\RequestContextOperand",
        "RequestError"                      => "\\GoogleAdsApi\\AdWords\\Error\\RequestError",
        "RequiredError"                     => "\\GoogleAdsApi\\AdWords\\Error\\RequiredError",
        "Selector"                          => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "SelectorError"                     => "\\GoogleAdsApi\\AdWords\\Error\\SelectorError",
        "SizeLimitError"                    => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitError",
        "SoapHeader"                        => "\\GoogleAdsApi\\AdWords\\Util\\SoapRequestHeader",
        "SoapResponseHeader"                => "\\GoogleAdsApi\\AdWords\\Util\\SoapResponseHeader",
        "StringLengthError"                 => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthError",
        "AuthenticationError.Reason"        => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"         => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "CampaignFeed.Status"               => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedStatus",
        "CampaignFeedError.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\CampaignFeedErrorReason",
        "ClientTermsError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "CollectionSizeError.Reason"        => "\\GoogleAdsApi\\AdWords\\Error\\CollectionSizeErrorReason",
        "ConstantOperand.ConstantType"      => "\\GoogleAdsApi\\AdWords\\Util\\ConstantOperandConstantType",
        "ConstantOperand.Unit"              => "\\GoogleAdsApi\\AdWords\\Util\\ConstantOperandUnit",
        "DatabaseError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DistinctError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"   => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFoundReason",
        "Function.Operator"                 => "\\GoogleAdsApi\\AdWords\\Util\\FunctionOperator",
        "FunctionError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\FunctionErrorReason",
        "IdError.Reason"                    => "\\GoogleAdsApi\\AdWords\\Error\\IdErrorReason",
        "InternalApiError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiErrorReason",
        "NotEmptyError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyErrorReason",
        "NullError.Reason"                  => "\\GoogleAdsApi\\AdWords\\Error\\NullErrorReason",
        "OperationAccessDenied.Reason"      => "\\GoogleAdsApi\\AdWords\\Error\\OperationAccessDeniedReason",
        "Operator"                          => "\\GoogleAdsApi\\AdWords\\Util\\Operator",
        "OperatorError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\OperatorErrorReason",
        "Predicate.Operator"                => "\\GoogleAdsApi\\AdWords\\Util\\PredicateOperator",
        "QueryError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\QueryErrorReason",
        "QuotaCheckError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\QuotaCheckErrorReason",
        "RangeError.Reason"                 => "\\GoogleAdsApi\\AdWords\\Error\\RangeErrorReason",
        "RateExceededError.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\RateExceededErrorReason",
        "ReadOnlyError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\ReadOnlyErrorReason",
        "RejectedError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\RejectedErrorReason",
        "RequestContextOperand.ContextType" => "\\GoogleAdsApi\\AdWords\\Util\\RequestContextOperandContextType",
        "RequestError.Reason"               => "\\GoogleAdsApi\\AdWords\\Error\\RequestErrorReason",
        "RequiredError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\RequiredErrorReason",
        "SelectorError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\SelectorErrorReason",
        "SizeLimitError.Reason"             => "\\GoogleAdsApi\\AdWords\\Error\\SizeLimitErrorReason",
        "SortOrder"                         => "\\GoogleAdsApi\\AdWords\\Util\\SortOrder",
        "StringLengthError.Reason"          => "\\GoogleAdsApi\\AdWords\\Error\\StringLengthErrorReason",
        "get"                               => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedServiceGet",
        "getResponse"                       => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedServiceGetResponse",
        "mutate"                            => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedServiceMutate",
        "mutateResponse"                    => "\\GoogleAdsApi\\AdWords\\Api\\CampaignFeedService\\CampaignFeedServiceMutateResponse",
        "query"                             => "\\GoogleAdsApi\\AdWords\\Util\\Query",
        "queryResponse"                     => "\\GoogleAdsApi\\AdWords\\Util\\QueryResponse",
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
     * Returns a list of CampaignFeeds that meet the selector criteria.
     *
     * @param selector Determines which CampaignFeeds to return. If empty all
     * Campaign feeds are returned.
     *
     * @return The list of CampaignFeeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new CampaignFeedServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
     *
     *
     *
     * Adds, sets or removes CampaignFeeds.
     *
     * @param operations The operations to apply.
     *
     * @return The resulting Feeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new CampaignFeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of {@link CampaignFeed}s inside a {@link CampaignFeedPage} that matches
     * the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @throws ApiException when there are one or more errors with the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
