<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

class SalesTaxType extends EbatNs_ComplexType
{
	// start props
	// @var float $SalesTaxPercent
	var $SalesTaxPercent;
	// @var string $SalesTaxState
	var $SalesTaxState;
	// @var boolean $ShippingIncludedInTax
	var $ShippingIncludedInTax;
	// @var AmountType $SalesTaxAmount
	var $SalesTaxAmount;
	// end props

/**
 *

 * @return float
 */
	function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSalesTaxPercent($value)
	{
		$this->SalesTaxPercent = $value;
	}
/**
 *

 * @return string
 */
	function getSalesTaxState()
	{
		return $this->SalesTaxState;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSalesTaxState($value)
	{
		$this->SalesTaxState = $value;
	}
/**
 *

 * @return boolean
 */
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}
/**
 *

 * @return AmountType
 */
	function getSalesTaxAmount()
	{
		return $this->SalesTaxAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSalesTaxAmount($value)
	{
		$this->SalesTaxAmount = $value;
	}
/**
 *

 * @return 
 */
	function SalesTaxType()
	{
		$this->EbatNs_ComplexType('SalesTaxType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SalesTaxPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxState' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingIncludedInTax' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
