<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class PaymentTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Sale
	var $Sale = 'Sale';
	// @var string $Refund
	var $Refund = 'Refund';
	// @var string $SellerDeniedPayment
	var $SellerDeniedPayment = 'SellerDeniedPayment';
	// @var string $AdminReversal
	var $AdminReversal = 'AdminReversal';
	// @var string $AllOther
	var $AllOther = 'AllOther';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function PaymentTypeCodeType()
	{
		$this->EbatNs_FacetType('PaymentTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PaymentTypeCodeType = new PaymentTypeCodeType();

?>
