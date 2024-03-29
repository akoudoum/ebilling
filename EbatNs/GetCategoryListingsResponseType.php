<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ItemArrayType.php';
require_once 'BuyingGuideDetailsType.php';
require_once 'RelatedSearchKeywordArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'CategoryType.php';
require_once 'CategoryArrayType.php';
require_once 'PaginationResultType.php';

class GetCategoryListingsResponseType extends AbstractResponseType
{
	// start props
	// @var ItemArrayType $ItemArray
	var $ItemArray;
	// @var CategoryType $Category
	var $Category;
	// @var CategoryArrayType $SubCategories
	var $SubCategories;
	// @var int $ItemsPerPage
	var $ItemsPerPage;
	// @var int $PageNumber
	var $PageNumber;
	// @var boolean $HasMoreItems
	var $HasMoreItems;
	// @var PaginationResultType $PaginationResult
	var $PaginationResult;
	// @var BuyingGuideDetailsType $BuyingGuideDetails
	var $BuyingGuideDetails;
	// @var RelatedSearchKeywordArrayType $RelatedSearchKeywordArray
	var $RelatedSearchKeywordArray;
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

 * @return CategoryType
 */
	function getCategory()
	{
		return $this->Category;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategory($value)
	{
		$this->Category = $value;
	}
/**
 *

 * @return CategoryArrayType
 */
	function getSubCategories()
	{
		return $this->SubCategories;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSubCategories($value)
	{
		$this->SubCategories = $value;
	}
/**
 *

 * @return int
 */
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}
/**
 *

 * @return int
 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
/**
 *

 * @return boolean
 */
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
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

 * @return BuyingGuideDetailsType
 */
	function getBuyingGuideDetails()
	{
		return $this->BuyingGuideDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyingGuideDetails($value)
	{
		$this->BuyingGuideDetails = $value;
	}
/**
 *

 * @return RelatedSearchKeywordArrayType
 */
	function getRelatedSearchKeywordArray()
	{
		return $this->RelatedSearchKeywordArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRelatedSearchKeywordArray($value)
	{
		$this->RelatedSearchKeywordArray = $value;
	}
/**
 *

 * @return 
 */
	function GetCategoryListingsResponseType()
	{
		$this->AbstractResponseType('GetCategoryListingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Category' =>
				array(
					'required' => false,
					'type' => 'CategoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubCategories' =>
				array(
					'required' => false,
					'type' => 'CategoryArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemsPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreItems' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyingGuideDetails' =>
				array(
					'required' => false,
					'type' => 'BuyingGuideDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RelatedSearchKeywordArray' =>
				array(
					'required' => false,
					'type' => 'RelatedSearchKeywordArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
