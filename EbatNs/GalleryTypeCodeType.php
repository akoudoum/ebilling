<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class GalleryTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $None
	var $None = 'None';
	// @var string $Featured
	var $Featured = 'Featured';
	// @var string $Gallery
	var $Gallery = 'Gallery';
	// @var string $Plus
	var $Plus = 'Plus';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function GalleryTypeCodeType()
	{
		$this->EbatNs_FacetType('GalleryTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GalleryTypeCodeType = new GalleryTypeCodeType();

?>
