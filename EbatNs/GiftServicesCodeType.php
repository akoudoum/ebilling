<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class GiftServicesCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $GiftExpressShipping
	var $GiftExpressShipping = 'GiftExpressShipping';
	// @var string $GiftShipToRecipient
	var $GiftShipToRecipient = 'GiftShipToRecipient';
	// @var string $GiftWrap
	var $GiftWrap = 'GiftWrap';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function GiftServicesCodeType()
	{
		$this->EbatNs_FacetType('GiftServicesCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GiftServicesCodeType = new GiftServicesCodeType();

?>
