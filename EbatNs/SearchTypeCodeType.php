<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class SearchTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $All
	var $All = 'All';
	// @var string $Gallery
	var $Gallery = 'Gallery';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function SearchTypeCodeType()
	{
		$this->EbatNs_FacetType('SearchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchTypeCodeType = new SearchTypeCodeType();

?>
