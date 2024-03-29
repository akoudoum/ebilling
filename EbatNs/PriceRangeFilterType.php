<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

class PriceRangeFilterType extends EbatNs_ComplexType
{
	// start props
	// @var AmountType $MaxPrice
	var $MaxPrice;
	// @var AmountType $MinPrice
	var $MinPrice;
	// end props

/**
 *

 * @return AmountType
 */
	function getMaxPrice()
	{
		return $this->MaxPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxPrice($value)
	{
		$this->MaxPrice = $value;
	}
/**
 *

 * @return AmountType
 */
	function getMinPrice()
	{
		return $this->MinPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMinPrice($value)
	{
		$this->MinPrice = $value;
	}
/**
 *

 * @return 
 */
	function PriceRangeFilterType()
	{
		$this->EbatNs_ComplexType('PriceRangeFilterType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MaxPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinPrice' =>
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
