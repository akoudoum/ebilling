<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ItemArrayType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PaginationResultType.php';

class PaginatedItemArrayType extends EbatNs_ComplexType
{
	// start props
	// @var ItemArrayType $ItemArray
	var $ItemArray;
	// @var PaginationResultType $PaginationResult
	var $PaginationResult;
	// end props

/**
 *

 * @return ItemArrayType
 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
/**
 *

 * @return PaginationResultType
 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
/**
 *

 * @return 
 */
	function PaginatedItemArrayType()
	{
		$this->EbatNs_ComplexType('PaginatedItemArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemArray' =>
				array(
					'required' => false,
					'type' => 'ItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
