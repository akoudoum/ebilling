<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class CategoryListingsSearchCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Featured
	var $Featured = 'Featured';
	// @var string $SuperFeatured
	var $SuperFeatured = 'SuperFeatured';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function CategoryListingsSearchCodeType()
	{
		$this->EbatNs_FacetType('CategoryListingsSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CategoryListingsSearchCodeType = new CategoryListingsSearchCodeType();

?>
