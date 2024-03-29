<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

class ItemTotalsType extends EbatNs_ComplexType
{
	// start props
	// @var long $TotalQuantity
	var $TotalQuantity;
	// @var AmountType $TotalValue
	var $TotalValue;
	// end props

/**
 *

 * @return long
 */
	function getTotalQuantity()
	{
		return $this->TotalQuantity;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalQuantity($value)
	{
		$this->TotalQuantity = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalValue()
	{
		return $this->TotalValue;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalValue($value)
	{
		$this->TotalValue = $value;
	}
/**
 *

 * @return 
 */
	function ItemTotalsType()
	{
		$this->EbatNs_ComplexType('ItemTotalsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'TotalQuantity' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalValue' =>
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
