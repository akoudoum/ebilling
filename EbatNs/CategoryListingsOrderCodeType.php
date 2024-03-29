<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class CategoryListingsOrderCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $NoFilter
	var $NoFilter = 'NoFilter';
	// @var string $ItemsBy24Hr
	var $ItemsBy24Hr = 'ItemsBy24Hr';
	// @var string $ItemsEndToday
	var $ItemsEndToday = 'ItemsEndToday';
	// @var string $ItemsEndIn5Hr
	var $ItemsEndIn5Hr = 'ItemsEndIn5Hr';
	// @var string $SortByPriceAsc
	var $SortByPriceAsc = 'SortByPriceAsc';
	// @var string $SortByPriceDesc
	var $SortByPriceDesc = 'SortByPriceDesc';
	// @var string $BestMatchSort
	var $BestMatchSort = 'BestMatchSort';
	// @var string $DistanceSort
	var $DistanceSort = 'DistanceSort';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// @var string $BestMatchCategoryGroup
	var $BestMatchCategoryGroup = 'BestMatchCategoryGroup';
	// @var string $PricePlusShippingAsc
	var $PricePlusShippingAsc = 'PricePlusShippingAsc';
	// @var string $PricePlusShippingDesc
	var $PricePlusShippingDesc = 'PricePlusShippingDesc';
	// end props

/**
 *

 * @return 
 */
	function CategoryListingsOrderCodeType()
	{
		$this->EbatNs_FacetType('CategoryListingsOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CategoryListingsOrderCodeType = new CategoryListingsOrderCodeType();

?>
