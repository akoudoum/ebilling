<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class NotificationEventPropertyNameCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $TimeLeft
	var $TimeLeft = 'TimeLeft';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function NotificationEventPropertyNameCodeType()
	{
		$this->EbatNs_FacetType('NotificationEventPropertyNameCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_NotificationEventPropertyNameCodeType = new NotificationEventPropertyNameCodeType();

?>
