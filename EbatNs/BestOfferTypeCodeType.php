<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class BestOfferTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $BuyerBestOffer
	var $BuyerBestOffer = 'BuyerBestOffer';
	// @var string $BuyerCounterOffer
	var $BuyerCounterOffer = 'BuyerCounterOffer';
	// @var string $SellerCounterOffer
	var $SellerCounterOffer = 'SellerCounterOffer';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function BestOfferTypeCodeType()
	{
		$this->EbatNs_FacetType('BestOfferTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BestOfferTypeCodeType = new BestOfferTypeCodeType();

?>
