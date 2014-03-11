<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class BuyerProtectionCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $ItemIneligible
	var $ItemIneligible = 'ItemIneligible';
	// @var string $ItemEligible
	var $ItemEligible = 'ItemEligible';
	// @var string $ItemMarkedIneligible
	var $ItemMarkedIneligible = 'ItemMarkedIneligible';
	// @var string $ItemMarkedEligible
	var $ItemMarkedEligible = 'ItemMarkedEligible';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function BuyerProtectionCodeType()
	{
		$this->EbatNs_FacetType('BuyerProtectionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BuyerProtectionCodeType = new BuyerProtectionCodeType();

?>
