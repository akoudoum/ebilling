<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class NotificationPayloadTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $eBLSchemaSOAP
	var $eBLSchemaSOAP = 'eBLSchemaSOAP';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function NotificationPayloadTypeCodeType()
	{
		$this->EbatNs_FacetType('NotificationPayloadTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_NotificationPayloadTypeCodeType = new NotificationPayloadTypeCodeType();

?>
