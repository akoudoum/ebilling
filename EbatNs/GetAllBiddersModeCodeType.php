<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class GetAllBiddersModeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $ViewAll
	var $ViewAll = 'ViewAll';
	// @var string $EndedListing
	var $EndedListing = 'EndedListing';
	// @var string $SecondChanceEligibleEndedListing
	var $SecondChanceEligibleEndedListing = 'SecondChanceEligibleEndedListing';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function GetAllBiddersModeCodeType()
	{
		$this->EbatNs_FacetType('GetAllBiddersModeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GetAllBiddersModeCodeType = new GetAllBiddersModeCodeType();

?>