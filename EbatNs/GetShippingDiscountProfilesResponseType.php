<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'CalculatedHandlingDiscountType.php';
require_once 'AbstractResponseType.php';
require_once 'CalculatedShippingDiscountType.php';
require_once 'ShippingInsuranceType.php';
require_once 'CurrencyCodeType.php';
require_once 'CombinedPaymentPeriodCodeType.php';
require_once 'PromotionalShippingDiscountDetailsType.php';
require_once 'FlatShippingDiscountType.php';

class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{
	// start props
	// @var CurrencyCodeType $CurrencyID
	var $CurrencyID;
	// @var FlatShippingDiscountType $FlatShippingDiscount
	var $FlatShippingDiscount;
	// @var CalculatedShippingDiscountType $CalculatedShippingDiscount
	var $CalculatedShippingDiscount;
	// @var boolean $PromotionalShippingDiscount
	var $PromotionalShippingDiscount;
	// @var CalculatedHandlingDiscountType $CalculatedHandlingDiscount
	var $CalculatedHandlingDiscount;
	// @var PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
	var $PromotionalShippingDiscountDetails;
	// @var ShippingInsuranceType $ShippingInsurance
	var $ShippingInsurance;
	// @var ShippingInsuranceType $InternationalShippingInsurance
	var $InternationalShippingInsurance;
	// @var CombinedPaymentPeriodCodeType $CombinedDuration
	var $CombinedDuration;
	// end props

/**
 *

 * @return CurrencyCodeType
 */
	function getCurrencyID()
	{
		return $this->CurrencyID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCurrencyID($value)
	{
		$this->CurrencyID = $value;
	}
/**
 *

 * @return FlatShippingDiscountType
 */
	function getFlatShippingDiscount()
	{
		return $this->FlatShippingDiscount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFlatShippingDiscount($value)
	{
		$this->FlatShippingDiscount = $value;
	}
/**
 *

 * @return CalculatedShippingDiscountType
 */
	function getCalculatedShippingDiscount()
	{
		return $this->CalculatedShippingDiscount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCalculatedShippingDiscount($value)
	{
		$this->CalculatedShippingDiscount = $value;
	}
/**
 *

 * @return boolean
 */
	function getPromotionalShippingDiscount()
	{
		return $this->PromotionalShippingDiscount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalShippingDiscount($value)
	{
		$this->PromotionalShippingDiscount = $value;
	}
/**
 *

 * @return CalculatedHandlingDiscountType
 */
	function getCalculatedHandlingDiscount()
	{
		return $this->CalculatedHandlingDiscount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCalculatedHandlingDiscount($value)
	{
		$this->CalculatedHandlingDiscount = $value;
	}
/**
 *

 * @return PromotionalShippingDiscountDetailsType
 */
	function getPromotionalShippingDiscountDetails()
	{
		return $this->PromotionalShippingDiscountDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionalShippingDiscountDetails($value)
	{
		$this->PromotionalShippingDiscountDetails = $value;
	}
/**
 *

 * @return ShippingInsuranceType
 */
	function getShippingInsurance()
	{
		return $this->ShippingInsurance;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippingInsurance($value)
	{
		$this->ShippingInsurance = $value;
	}
/**
 *

 * @return ShippingInsuranceType
 */
	function getInternationalShippingInsurance()
	{
		return $this->InternationalShippingInsurance;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInternationalShippingInsurance($value)
	{
		$this->InternationalShippingInsurance = $value;
	}
/**
 *

 * @return CombinedPaymentPeriodCodeType
 */
	function getCombinedDuration()
	{
		return $this->CombinedDuration;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCombinedDuration($value)
	{
		$this->CombinedDuration = $value;
	}
/**
 *

 * @return 
 */
	function GetShippingDiscountProfilesResponseType()
	{
		$this->AbstractResponseType('GetShippingDiscountProfilesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CurrencyID' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'FlatShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedHandlingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedHandlingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalShippingDiscountDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionalShippingDiscountDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingInsurance' =>
				array(
					'required' => false,
					'type' => 'ShippingInsuranceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalShippingInsurance' =>
				array(
					'required' => false,
					'type' => 'ShippingInsuranceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedDuration' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentPeriodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
