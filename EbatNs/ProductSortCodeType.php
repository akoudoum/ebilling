<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ProductSortCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $PopularityAsc
	var $PopularityAsc = 'PopularityAsc';
	// @var string $PopularityDesc
	var $PopularityDesc = 'PopularityDesc';
	// @var string $RatingAsc
	var $RatingAsc = 'RatingAsc';
	// @var string $RatingDesc
	var $RatingDesc = 'RatingDesc';
	// @var string $ReviewCountAsc
	var $ReviewCountAsc = 'ReviewCountAsc';
	// @var string $ReviewCountDesc
	var $ReviewCountDesc = 'ReviewCountDesc';
	// @var string $ItemCountAsc
	var $ItemCountAsc = 'ItemCountAsc';
	// @var string $ItemCountDesc
	var $ItemCountDesc = 'ItemCountDesc';
	// @var string $TitleAsc
	var $TitleAsc = 'TitleAsc';
	// @var string $TitleDesc
	var $TitleDesc = 'TitleDesc';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ProductSortCodeType()
	{
		$this->EbatNs_FacetType('ProductSortCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ProductSortCodeType = new ProductSortCodeType();

?>
