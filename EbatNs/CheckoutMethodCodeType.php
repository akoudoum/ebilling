<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class CheckoutMethodCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Other
	var $Other = 'Other';
	// @var string $ThirdPartyCheckout
	var $ThirdPartyCheckout = 'ThirdPartyCheckout';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function CheckoutMethodCodeType()
	{
		$this->EbatNs_FacetType('CheckoutMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CheckoutMethodCodeType = new CheckoutMethodCodeType();

?>
