<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class DisputeResolutionRecordTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $StrikeBuyer
	var $StrikeBuyer = 'StrikeBuyer';
	// @var string $SuspendBuyer
	var $SuspendBuyer = 'SuspendBuyer';
	// @var string $FVFCredit
	var $FVFCredit = 'FVFCredit';
	// @var string $InsertionFeeCredit
	var $InsertionFeeCredit = 'InsertionFeeCredit';
	// @var string $AppealBuyerStrike
	var $AppealBuyerStrike = 'AppealBuyerStrike';
	// @var string $UnsuspendBuyer
	var $UnsuspendBuyer = 'UnsuspendBuyer';
	// @var string $ReverseFVFCredit
	var $ReverseFVFCredit = 'ReverseFVFCredit';
	// @var string $ReverseInsertionFeeCredit
	var $ReverseInsertionFeeCredit = 'ReverseInsertionFeeCredit';
	// @var string $GenerateCSTicketForSuspend
	var $GenerateCSTicketForSuspend = 'GenerateCSTicketForSuspend';
	// @var string $FVFCreditNotGranted
	var $FVFCreditNotGranted = 'FVFCreditNotGranted';
	// @var string $ItemNotReceivedClaimFiled
	var $ItemNotReceivedClaimFiled = 'ItemNotReceivedClaimFiled';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function DisputeResolutionRecordTypeCodeType()
	{
		$this->EbatNs_FacetType('DisputeResolutionRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeResolutionRecordTypeCodeType = new DisputeResolutionRecordTypeCodeType();

?>
