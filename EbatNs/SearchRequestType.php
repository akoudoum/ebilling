<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'SearchAttributesType.php';

class SearchRequestType extends EbatNs_ComplexType
{
	// start props
	// @var int $ProductFinderID
	var $ProductFinderID;
	// @var SearchAttributesType $SearchAttributes
	var $SearchAttributes;
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

 * @return SearchAttributesType
 * @param  $index 
 */
	function getSearchAttributes($index = null)
	{
		if ($index) {
		return $this->SearchAttributes[$index];
	} else {
		return $this->SearchAttributes;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setSearchAttributes($value, $index = null)
	{
		if ($index) {
	$this->SearchAttributes[$index] = $value;
	} else {
	$this->SearchAttributes = $value;
	}

	}
/**
 *

 * @return 
 */
	function SearchRequestType()
	{
		$this->EbatNs_ComplexType('SearchRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'SearchAttributes' =>
				array(
					'required' => false,
					'type' => 'SearchAttributesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
