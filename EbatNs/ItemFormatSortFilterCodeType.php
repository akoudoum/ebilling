<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ItemFormatSortFilterCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $ShowAnyItems
	var $ShowAnyItems = 'ShowAnyItems';
	// @var string $ShowItemsWithBINFirst
	var $ShowItemsWithBINFirst = 'ShowItemsWithBINFirst';
	// @var string $ShowOnlyItemsWithBIN
	var $ShowOnlyItemsWithBIN = 'ShowOnlyItemsWithBIN';
	// @var string $ShowOnlyStoreItems
	var $ShowOnlyStoreItems = 'ShowOnlyStoreItems';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ItemFormatSortFilterCodeType()
	{
		$this->EbatNs_FacetType('ItemFormatSortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemFormatSortFilterCodeType = new ItemFormatSortFilterCodeType();

?>
