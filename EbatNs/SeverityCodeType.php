<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class SeverityCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Warning
	var $Warning = 'Warning';
	// @var string $Error
	var $Error = 'Error';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function SeverityCodeType()
	{
		$this->EbatNs_FacetType('SeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SeverityCodeType = new SeverityCodeType();

?>
