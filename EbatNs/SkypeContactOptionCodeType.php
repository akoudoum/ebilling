<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class SkypeContactOptionCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Chat
	var $Chat = 'Chat';
	// @var string $Voice
	var $Voice = 'Voice';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function SkypeContactOptionCodeType()
	{
		$this->EbatNs_FacetType('SkypeContactOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SkypeContactOptionCodeType = new SkypeContactOptionCodeType();

?>
