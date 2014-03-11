<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class ExpressDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var anyURI $ExpressLargeImage
	var $ExpressLargeImage;
	// @var anyURI $ExpressSmallImage
	var $ExpressSmallImage;
	// @var string $Condition
	var $Condition;
	// end props

/**
 *

 * @return anyURI
 */
	function getExpressLargeImage()
	{
		return $this->ExpressLargeImage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressLargeImage($value)
	{
		$this->ExpressLargeImage = $value;
	}
/**
 *

 * @return anyURI
 */
	function getExpressSmallImage()
	{
		return $this->ExpressSmallImage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressSmallImage($value)
	{
		$this->ExpressSmallImage = $value;
	}
/**
 *

 * @return string
 */
	function getCondition()
	{
		return $this->Condition;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCondition($value)
	{
		$this->Condition = $value;
	}
/**
 *

 * @return 
 */
	function ExpressDetailsType()
	{
		$this->EbatNs_ComplexType('ExpressDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ExpressLargeImage' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressSmallImage' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Condition' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
