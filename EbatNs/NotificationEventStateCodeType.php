<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class NotificationEventStateCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $New
	var $New = 'New';
	// @var string $Failed
	var $Failed = 'Failed';
	// @var string $MarkedDown
	var $MarkedDown = 'MarkedDown';
	// @var string $Pending
	var $Pending = 'Pending';
	// @var string $FailedPending
	var $FailedPending = 'FailedPending';
	// @var string $MarkedDownPending
	var $MarkedDownPending = 'MarkedDownPending';
	// @var string $Delivered
	var $Delivered = 'Delivered';
	// @var string $Undeliverable
	var $Undeliverable = 'Undeliverable';
	// @var string $Rejected
	var $Rejected = 'Rejected';
	// @var string $Canceled
	var $Canceled = 'Canceled';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function NotificationEventStateCodeType()
	{
		$this->EbatNs_FacetType('NotificationEventStateCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_NotificationEventStateCodeType = new NotificationEventStateCodeType();

?>
