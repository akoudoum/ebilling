<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class StoreFontSizeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $XXS
	var $XXS = 'XXS';
	// @var string $XS
	var $XS = 'XS';
	// @var string $S
	var $S = 'S';
	// @var string $M
	var $M = 'M';
	// @var string $L
	var $L = 'L';
	// @var string $XL
	var $XL = 'XL';
	// @var string $XXL
	var $XXL = 'XXL';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function StoreFontSizeCodeType()
	{
		$this->EbatNs_FacetType('StoreFontSizeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreFontSizeCodeType = new StoreFontSizeCodeType();

?>
