<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'StoreSearchCodeType.php';
require_once 'EbatNs_ComplexType.php';

class SearchStoreFilterType extends EbatNs_ComplexType
{
	// start props
	// @var string $StoreName
	var $StoreName;
	// @var StoreSearchCodeType $StoreSearch
	var $StoreSearch;
	// end props

/**
 *

 * @return string
 */
	function getStoreName()
	{
		return $this->StoreName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
/**
 *

 * @return StoreSearchCodeType
 */
	function getStoreSearch()
	{
		return $this->StoreSearch;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStoreSearch($value)
	{
		$this->StoreSearch = $value;
	}
/**
 *

 * @return 
 */
	function SearchStoreFilterType()
	{
		$this->EbatNs_ComplexType('SearchStoreFilterType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'StoreName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreSearch' =>
				array(
					'required' => false,
					'type' => 'StoreSearchCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
