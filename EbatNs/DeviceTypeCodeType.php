<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class DeviceTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Platform
	var $Platform = 'Platform';
	// @var string $SMS
	var $SMS = 'SMS';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function DeviceTypeCodeType()
	{
		$this->EbatNs_FacetType('DeviceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DeviceTypeCodeType = new DeviceTypeCodeType();

?>
