<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ListingTypeCodeType.php';
require_once 'StoreItemListSortOrderCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';

class SellerFavoriteItemPreferencesType extends EbatNs_ComplexType
{
	// start props
	// @var string $SearchKeywords
	var $SearchKeywords;
	// @var long $StoreCategoryID
	var $StoreCategoryID;
	// @var ListingTypeCodeType $ListingType
	var $ListingType;
	// @var StoreItemListSortOrderCodeType $SearchSortOrder
	var $SearchSortOrder;
	// @var AmountType $MinPrice
	var $MinPrice;
	// @var AmountType $MaxPrice
	var $MaxPrice;
	// @var ItemIDType $FavoriteItemID
	var $FavoriteItemID;
	// end props

/**
 *

 * @return string
 */
	function getSearchKeywords()
	{
		return $this->SearchKeywords;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSearchKeywords($value)
	{
		$this->SearchKeywords = $value;
	}
/**
 *

 * @return long
 */
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}
/**
 *

 * @return ListingTypeCodeType
 */
	function getListingType()
	{
		return $this->ListingType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
/**
 *

 * @return StoreItemListSortOrderCodeType
 */
	function getSearchSortOrder()
	{
		return $this->SearchSortOrder;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSearchSortOrder($value)
	{
		$this->SearchSortOrder = $value;
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

 * @return ItemIDType
 * @param  $index 
 */
	function getFavoriteItemID($index = null)
	{
		if ($index) {
		return $this->FavoriteItemID[$index];
	} else {
		return $this->FavoriteItemID;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFavoriteItemID($value, $index = null)
	{
		if ($index) {
	$this->FavoriteItemID[$index] = $value;
	} else {
	$this->FavoriteItemID = $value;
	}

	}
/**
 *

 * @return 
 */
	function SellerFavoriteItemPreferencesType()
	{
		$this->EbatNs_ComplexType('SellerFavoriteItemPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SearchKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchSortOrder' =>
				array(
					'required' => false,
					'type' => 'StoreItemListSortOrderCodeType',
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
				),
				'MaxPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
