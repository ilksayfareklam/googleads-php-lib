<?php

namespace Google\AdsApi\AdWords\v201603\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AccountLabelService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ClientTermsError',
      'Date' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Date',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DistinctError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Selector',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Operation',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\CollectionSizeError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\CurrencyCodeError',
      'LabelServiceError' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\LabelServiceError',
      'AccountLabel' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\AccountLabel',
      'AccountLabelOperation' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\AccountLabelOperation',
      'AccountLabelPage' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\AccountLabelPage',
      'AccountLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201603\\mcm\\AccountLabelReturnValue',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/mcm/v201603/AccountLabelService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of labels specified by the selector for the authenticated user.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201603\mcm\AccountLabelPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201603\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Possible actions:
     * <ul>
     * <li> Create a new label - create a new {@link Label} and call mutate with ADD operator
     * <li> Edit the label name - set the appropriate fields in your {@linkplain Label} and call
     * mutate with the SET operator. Null fields will be interpreted to mean "no change"
     * <li> Delete the label - call mutate with REMOVE operator
     * </ul>
     *
     * order specified.
     *
     * @param \Google\AdsApi\AdWords\v201603\mcm\AccountLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201603\mcm\AccountLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

}