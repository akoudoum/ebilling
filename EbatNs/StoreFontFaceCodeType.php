<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class StoreFontFaceCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Arial
	var $Arial = 'Arial';
	// @var string $Courier
	var $Courier = 'Courier';
	// @var string $Times
	var $Times = 'Times';
	// @var string $Verdana
	var $Verdana = 'Verdana';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function StoreFontFaceCodeType()
	{
		$this->EbatNs_FacetType('StoreFontFaceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreFontFaceCodeType = new StoreFontFaceCodeType();

?>
