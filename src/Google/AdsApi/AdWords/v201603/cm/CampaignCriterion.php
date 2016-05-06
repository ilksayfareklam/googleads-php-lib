<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignCriterion
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var boolean $isNegative
     */
    protected $isNegative = null;

    /**
     * @var \Google\AdsApi\AdWords\v201603\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201603\cm\String_StringMapEntry[] $forwardCompatibilityMap
     */
    protected $forwardCompatibilityMap = null;

    /**
     * @var string $CampaignCriterionType
     */
    protected $CampaignCriterionType = null;

    /**
     * @param int $campaignId
     * @param boolean $isNegative
     * @param \Google\AdsApi\AdWords\v201603\cm\Criterion $criterion
     * @param float $bidModifier
     * @param int $baseCampaignId
     * @param \Google\AdsApi\AdWords\v201603\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param string $CampaignCriterionType
     */
    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $baseCampaignId = null, array $forwardCompatibilityMap = null, $CampaignCriterionType = null)
    {
      $this->campaignId = $campaignId;
      $this->isNegative = $isNegative;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->baseCampaignId = $baseCampaignId;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->CampaignCriterionType = $CampaignCriterionType;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNegative()
    {
      return $this->isNegative;
    }

    /**
     * @param boolean $isNegative
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setIsNegative($isNegative)
    {
      $this->isNegative = $isNegative;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidModifier()
    {
      return $this->bidModifier;
    }

    /**
     * @param float $bidModifier
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseCampaignId()
    {
      return $this->baseCampaignId;
    }

    /**
     * @param int $baseCampaignId
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = $baseCampaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\cm\String_StringMapEntry[]
     */
    public function getForwardCompatibilityMap()
    {
      return $this->forwardCompatibilityMap;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setForwardCompatibilityMap(array $forwardCompatibilityMap)
    {
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignCriterionType()
    {
      return $this->CampaignCriterionType;
    }

    /**
     * @param string $CampaignCriterionType
     * @return \Google\AdsApi\AdWords\v201603\cm\CampaignCriterion
     */
    public function setCampaignCriterionType($CampaignCriterionType)
    {
      $this->CampaignCriterionType = $CampaignCriterionType;
      return $this;
    }

}