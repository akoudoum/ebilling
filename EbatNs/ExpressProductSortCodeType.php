<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ExpressProductSortCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $LowestPrice
	var $LowestPrice = 'LowestPrice';
	// @var string $HighestPrice
	var $HighestPrice = 'HighestPrice';
	// @var string $SalesRank
	var $SalesRank = 'SalesRank';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ExpressProductSortCodeType()
	{
		$this->EbatNs_FacetType('ExpressProductSortCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ExpressProductSortCodeType = new ExpressProductSortCodeType();

?>
