<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class StoreHeaderStyleCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Full
	var $Full = 'Full';
	// @var string $Minimized
	var $Minimized = 'Minimized';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function StoreHeaderStyleCodeType()
	{
		$this->EbatNs_FacetType('StoreHeaderStyleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreHeaderStyleCodeType = new StoreHeaderStyleCodeType();

?>
