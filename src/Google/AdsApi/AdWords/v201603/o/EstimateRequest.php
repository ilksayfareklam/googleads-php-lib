<?php

namespace Google\AdsApi\AdWords\v201603\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class EstimateRequest
{

    /**
     * @var string $EstimateRequestType
     */
    protected $EstimateRequestType = null;

    /**
     * @param string $EstimateRequestType
     */
    public function __construct($EstimateRequestType = null)
    {
      $this->EstimateRequestType = $EstimateRequestType;
    }

    /**
     * @return string
     */
    public function getEstimateRequestType()
    {
      return $this->EstimateRequestType;
    }

    /**
     * @param string $EstimateRequestType
     * @return \Google\AdsApi\AdWords\v201603\o\EstimateRequest
     */
    public function setEstimateRequestType($EstimateRequestType)
    {
      $this->EstimateRequestType = $EstimateRequestType;
      return $this;
    }

}