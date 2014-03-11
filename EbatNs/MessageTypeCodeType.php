<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class MessageTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $AskSellerQuestion
	var $AskSellerQuestion = 'AskSellerQuestion';
	// @var string $ResponseToASQQuestion
	var $ResponseToASQQuestion = 'ResponseToASQQuestion';
	// @var string $ContactEbayMember
	var $ContactEbayMember = 'ContactEbayMember';
	// @var string $ContactTransactionPartner
	var $ContactTransactionPartner = 'ContactTransactionPartner';
	// @var string $ResponseToContacteBayMember
	var $ResponseToContacteBayMember = 'ResponseToContacteBayMember';
	// @var string $ContacteBayMemberViaCommunityLink
	var $ContacteBayMemberViaCommunityLink = 'ContacteBayMemberViaCommunityLink';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// @var string $All
	var $All = 'All';
	// @var string $ContactMyBidder
	var $ContactMyBidder = 'ContactMyBidder';
	// end props

/**
 *

 * @return 
 */
	function MessageTypeCodeType()
	{
		$this->EbatNs_FacetType('MessageTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MessageTypeCodeType = new MessageTypeCodeType();

?>
