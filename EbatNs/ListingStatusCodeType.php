<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ListingStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Active
	var $Active = 'Active';
	// @var string $Ended
	var $Ended = 'Ended';
	// @var string $Completed
	var $Completed = 'Completed';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// @var string $Custom
	var $Custom = 'Custom';
	// end props

/**
 *

 * @return 
 */
	function ListingStatusCodeType()
	{
		$this->EbatNs_FacetType('ListingStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingStatusCodeType = new ListingStatusCodeType();

?>
