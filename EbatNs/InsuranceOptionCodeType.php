<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class InsuranceOptionCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Optional
	var $Optional = 'Optional';
	// @var string $Required
	var $Required = 'Required';
	// @var string $NotOffered
	var $NotOffered = 'NotOffered';
	// @var string $IncludedInShippingHandling
	var $IncludedInShippingHandling = 'IncludedInShippingHandling';
	// @var string $NotOfferedOnSite
	var $NotOfferedOnSite = 'NotOfferedOnSite';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function InsuranceOptionCodeType()
	{
		$this->EbatNs_FacetType('InsuranceOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_InsuranceOptionCodeType = new InsuranceOptionCodeType();

?>
