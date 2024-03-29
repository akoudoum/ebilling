<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginationType.php';
require_once 'CharacteristicSetIDsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SearchAttributesType.php';
require_once 'ExternalProductIDType.php';

class ProductSearchType extends EbatNs_ComplexType
{
	// start props
	// @var string $ProductSearchID
	var $ProductSearchID;
	// @var int $AttributeSetID
	var $AttributeSetID;
	// @var int $ProductFinderID
	var $ProductFinderID;
	// @var string $ProductID
	var $ProductID;
	// @var int $SortAttributeID
	var $SortAttributeID;
	// @var int $MaxChildrenPerFamily
	var $MaxChildrenPerFamily;
	// @var SearchAttributesType $SearchAttributes
	var $SearchAttributes;
	// @var PaginationType $Pagination
	var $Pagination;
	// @var boolean $AvailableItemsOnly
	var $AvailableItemsOnly;
	// @var string $QueryKeywords
	var $QueryKeywords;
	// @var CharacteristicSetIDsType $CharacteristicSetIDs
	var $CharacteristicSetIDs;
	// @var string $ProductReferenceID
	var $ProductReferenceID;
	// @var ExternalProductIDType $ExternalProductID
	var $ExternalProductID;
	// end props

/**
 *

 * @return string
 */
	function getProductSearchID()
	{
		return $this->ProductSearchID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductSearchID($value)
	{
		$this->ProductSearchID = $value;
	}
/**
 *

 * @return int
 */
	function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAttributeSetID($value)
	{
		$this->AttributeSetID = $value;
	}
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

 * @return string
 */
	function getProductID()
	{
		return $this->ProductID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
/**
 *

 * @return int
 */
	function getSortAttributeID()
	{
		return $this->SortAttributeID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSortAttributeID($value)
	{
		$this->SortAttributeID = $value;
	}
/**
 *

 * @return int
 */
	function getMaxChildrenPerFamily()
	{
		return $this->MaxChildrenPerFamily;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxChildrenPerFamily($value)
	{
		$this->MaxChildrenPerFamily = $value;
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

 * @return PaginationType
 */
	function getPagination()
	{
		return $this->Pagination;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
/**
 *

 * @return boolean
 */
	function getAvailableItemsOnly()
	{
		return $this->AvailableItemsOnly;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAvailableItemsOnly($value)
	{
		$this->AvailableItemsOnly = $value;
	}
/**
 *

 * @return string
 */
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}
/**
 *

 * @return CharacteristicSetIDsType
 */
	function getCharacteristicSetIDs()
	{
		return $this->CharacteristicSetIDs;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCharacteristicSetIDs($value)
	{
		$this->CharacteristicSetIDs = $value;
	}
/**
 *

 * @return string
 */
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}
/**
 *

 * @return ExternalProductIDType
 */
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}
/**
 *

 * @return 
 */
	function ProductSearchType()
	{
		$this->EbatNs_ComplexType('ProductSearchType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ProductSearchID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetID' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'ProductFinderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortAttributeID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxChildrenPerFamily' =>
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
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AvailableItemsOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QueryKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharacteristicSetIDs' =>
				array(
					'required' => false,
					'type' => 'CharacteristicSetIDsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductReferenceID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalProductID' =>
				array(
					'required' => false,
					'type' => 'ExternalProductIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
