<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class ExtendedProductFinderIDType extends EbatNs_ComplexType
{
	// start props
	// @var int $ProductFinderID
	var $ProductFinderID;
	// @var boolean $ProductFinderBuySide
	var $ProductFinderBuySide;
	// end props

/**
 *

 * @return int
 */
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
	}
/**
 *

 * @return boolean
 */
	function getProductFinderBuySide()
	{
		return $this->ProductFinderBuySide;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductFinderBuySide($value)
	{
		$this->ProductFinderBuySide = $value;
	}
/**
 *

 * @return 
 */
	function ExtendedProductFinderIDType()
	{
		$this->EbatNs_ComplexType('ExtendedProductFinderIDType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ProductFinderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFinderBuySide' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
