<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class VATStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $NoVATTax
	var $NoVATTax = 'NoVATTax';
	// @var string $VATTax
	var $VATTax = 'VATTax';
	// @var string $VATExempt
	var $VATExempt = 'VATExempt';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function VATStatusCodeType()
	{
		$this->EbatNs_FacetType('VATStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VATStatusCodeType = new VATStatusCodeType();

?>
