<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

class ProductInfoType extends EbatNs_ComplexType
{
	// start props
	// @var AmountType $AverageStartPrice
	var $AverageStartPrice;
	// @var AmountType $AverageSoldPrice
	var $AverageSoldPrice;
	// @var string $Title
	var $Title;
	// end props

/**
 *

 * @return AmountType
 */
	function getAverageStartPrice()
	{
		return $this->AverageStartPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAverageStartPrice($value)
	{
		$this->AverageStartPrice = $value;
	}
/**
 *

 * @return AmountType
 */
	function getAverageSoldPrice()
	{
		return $this->AverageSoldPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAverageSoldPrice($value)
	{
		$this->AverageSoldPrice = $value;
	}
/**
 *

 * @return string
 */
	function getTitle()
	{
		return $this->Title;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
/**
 *

 * @return 
 */
	function ProductInfoType()
	{
		$this->EbatNs_ComplexType('ProductInfoType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'AverageStartPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AverageSoldPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'productInfoID' =>
			array(
				'name' => 'productInfoID',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
