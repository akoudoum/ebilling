<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class BulkCatalogListerStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Preapproved
	var $Preapproved = 'Preapproved';
	// @var string $Active
	var $Active = 'Active';
	// @var string $OnWatch
	var $OnWatch = 'OnWatch';
	// @var string $OnHold
	var $OnHold = 'OnHold';
	// @var string $Suspended
	var $Suspended = 'Suspended';
	// @var string $WatchWarn
	var $WatchWarn = 'WatchWarn';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function BulkCatalogListerStatusCodeType()
	{
		$this->EbatNs_FacetType('BulkCatalogListerStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BulkCatalogListerStatusCodeType = new BulkCatalogListerStatusCodeType();

?>
