<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class CombinedPaymentOptionCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $NoCombinedPayment
	var $NoCombinedPayment = 'NoCombinedPayment';
	// @var string $DiscountSpecified
	var $DiscountSpecified = 'DiscountSpecified';
	// @var string $SpecifyDiscountLater
	var $SpecifyDiscountLater = 'SpecifyDiscountLater';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function CombinedPaymentOptionCodeType()
	{
		$this->EbatNs_FacetType('CombinedPaymentOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CombinedPaymentOptionCodeType = new CombinedPaymentOptionCodeType();

?>
