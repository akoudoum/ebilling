<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ExpressSellingPreferenceCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $All
	var $All = 'All';
	// @var string $ExpressOnly
	var $ExpressOnly = 'ExpressOnly';
	// @var string $OptOut
	var $OptOut = 'OptOut';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ExpressSellingPreferenceCodeType()
	{
		$this->EbatNs_FacetType('ExpressSellingPreferenceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ExpressSellingPreferenceCodeType = new ExpressSellingPreferenceCodeType();

?>
