<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class InsuranceSelectedCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $NotOffered
	var $NotOffered = 'NotOffered';
	// @var string $OfferedNotSelected
	var $OfferedNotSelected = 'OfferedNotSelected';
	// @var string $OfferedSelected
	var $OfferedSelected = 'OfferedSelected';
	// @var string $Required
	var $Required = 'Required';
	// @var string $IncludedInShippingHandling
	var $IncludedInShippingHandling = 'IncludedInShippingHandling';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function InsuranceSelectedCodeType()
	{
		$this->EbatNs_FacetType('InsuranceSelectedCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_InsuranceSelectedCodeType = new InsuranceSelectedCodeType();

?>
