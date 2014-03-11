<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'FlatRateInsuranceRangeCostType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'InsuranceOptionCodeType.php';

class ShippingInsuranceType extends EbatNs_ComplexType
{
	// start props
	// @var InsuranceOptionCodeType $InsuranceOption
	var $InsuranceOption;
	// @var FlatRateInsuranceRangeCostType $FlatRateInsuranceRangeCost
	var $FlatRateInsuranceRangeCost;
	// end props

/**
 *

 * @return InsuranceOptionCodeType
 */
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}
/**
 *

 * @return FlatRateInsuranceRangeCostType
 * @param  $index 
 */
	function getFlatRateInsuranceRangeCost($index = null)
	{
		if ($index) {
		return $this->FlatRateInsuranceRangeCost[$index];
	} else {
		return $this->FlatRateInsuranceRangeCost;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFlatRateInsuranceRangeCost($value, $index = null)
	{
		if ($index) {
	$this->FlatRateInsuranceRangeCost[$index] = $value;
	} else {
	$this->FlatRateInsuranceRangeCost = $value;
	}

	}
/**
 *

 * @return 
 */
	function ShippingInsuranceType()
	{
		$this->EbatNs_ComplexType('ShippingInsuranceType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'InsuranceOption' =>
				array(
					'required' => false,
					'type' => 'InsuranceOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatRateInsuranceRangeCost' =>
				array(
					'required' => false,
					'type' => 'FlatRateInsuranceRangeCostType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
