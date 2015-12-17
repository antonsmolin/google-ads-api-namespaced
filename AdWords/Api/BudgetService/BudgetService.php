<?php
/**
 * Contains all client objects for the BudgetService
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

namespace GoogleAdsApi\AdWords\Api\BudgetService;
use GoogleAdsApi\AdWords\Lib\AdWordsSoapClient;
use GoogleAdsApi\AdWords\Util\Query;

/**
 * BudgetService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetService extends AdWordsSoapClient
{

    const SERVICE_NAME = "BudgetService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/BudgetService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/BudgetService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AuthenticationError"             => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationError",
        "AuthorizationError"              => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationError",
        "BudgetError"                     => "\\GoogleAdsApi\\AdWords\\Error\\BudgetError",
        "ClientTermsError"                => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsError",
        "DateError"                       => "\\GoogleAdsApi\\AdWords\\Error\\DateError",
        "DateRange"                       => "\\GoogleAdsApi\\AdWords\\Util\\DateRange",
        "DateRangeError"                  => "\\GoogleAdsApi\\AdWords\\Error\\DateRangeError",
        "DistinctError"                   => "\\GoogleAdsApi\\AdWords\\Error\\DistinctError",
        "DoubleValue"                     => "\\GoogleAdsApi\\AdWords\\Util\\DoubleValue",
        "EntityCountLimitExceeded"        => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceeded",
        "EntityNotFound"                  => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFound",
        "IdError"                         => "\\GoogleAdsApi\\AdWords\\Error\\IdError",
        "InternalApiError"                => "\\GoogleAdsApi\\AdWords\\Error\\InternalApiError",
        "LongValue"                       => "\\GoogleAdsApi\\AdWords\\Util\\LongValue",
        "Money"                           => "\\GoogleAdsApi\\AdWords\\Util\\Money",
        "NewEntityCreationError"          => "\\GoogleAdsApi\\AdWords\\Error\\NewEntityCreationError",
        "NotEmptyError"                   => "\\GoogleAdsApi\\AdWords\\Error\\NotEmptyError",
        "NullError"                       => "\\GoogleAdsApi\\AdWords\\Error\\NullError",
        "NumberValue"                     => "\\GoogleAdsApi\\AdWords\\Util\\NumberValue",
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
        "ComparableValue"                 => "\\GoogleAdsApi\\AdWords\\Util\\ComparableValue",
        "DatabaseError"                   => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseError",
        "ApiError"                        => "\\GoogleAdsApi\\AdWords\\Error\\ApiError",
        "ApiException"                    => "\\GoogleAdsApi\\AdWords\\Exception\\ApiException",
        "ApplicationException"            => "\\GoogleAdsApi\\AdWords\\Exception\\ApplicationException",
        "Selector"                        => "\\GoogleAdsApi\\AdWords\\Util\\Selector",
        "Budget"                          => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\Budget",
        "BudgetOperation"                 => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetOperation",
        "BudgetPage"                      => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetPage",
        "BudgetReturnValue"               => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetReturnValue",
        "ListReturnValue"                 => "\\GoogleAdsApi\\AdWords\\Util\\ListReturnValue",
        "Operation"                       => "\\GoogleAdsApi\\AdWords\\Util\\Operation",
        "Page"                            => "\\GoogleAdsApi\\AdWords\\Util\\Page",
        "AuthenticationError.Reason"      => "\\GoogleAdsApi\\AdWords\\Error\\AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "\\GoogleAdsApi\\AdWords\\Error\\AuthorizationErrorReason",
        "Budget.BudgetDeliveryMethod"     => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetBudgetDeliveryMethod",
        "Budget.BudgetPeriod"             => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetBudgetPeriod",
        "Budget.BudgetStatus"             => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetBudgetStatus",
        "BudgetError.Reason"              => "\\GoogleAdsApi\\AdWords\\Error\\BudgetErrorReason",
        "ClientTermsError.Reason"         => "\\GoogleAdsApi\\AdWords\\Error\\ClientTermsErrorReason",
        "DatabaseError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\DatabaseErrorReason",
        "DateError.Reason"                => "\\GoogleAdsApi\\AdWords\\Error\\DateErrorReason",
        "DateRangeError.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\DateRangeErrorReason",
        "DistinctError.Reason"            => "\\GoogleAdsApi\\AdWords\\Error\\DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "\\GoogleAdsApi\\AdWords\\Error\\EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "\\GoogleAdsApi\\AdWords\\Error\\EntityNotFoundReason",
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
        "get"                             => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetServiceGet",
        "getResponse"                     => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetServiceGetResponse",
        "mutate"                          => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetServiceMutate",
        "mutateResponse"                  => "\\GoogleAdsApi\\AdWords\\Api\\BudgetService\\BudgetServiceMutateResponse",
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
     * Returns a list of budgets that match the selector.
     *
     * @return List of budgets specified by the selector.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     * occurred while retrieving results.
     */
    public function get($selector)
    {
        $args = new BudgetServiceGet($selector);
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
     * Applies the list of mutate operations.
     *
     * @param operations The operations to apply.
     *
     * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $args = new BudgetServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of budgets that match the query.
     *
     * @param query The SQL-like AWQL query string
     *
     * @returns A list of Budget
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));

        return $result->rval;
    }
}
