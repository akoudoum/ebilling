<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ShipmentStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Active
	var $Active = 'Active';
	// @var string $Canceled
	var $Canceled = 'Canceled';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ShipmentStatusCodeType()
	{
		$this->EbatNs_FacetType('ShipmentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShipmentStatusCodeType = new ShipmentStatusCodeType();

?>
