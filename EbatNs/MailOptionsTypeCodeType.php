<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class MailOptionsTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $DoNotSendEmail
	var $DoNotSendEmail = 'DoNotSendEmail';
	// @var string $EmailCopyToSender
	var $EmailCopyToSender = 'EmailCopyToSender';
	// @var string $HideSenderEmailAddress
	var $HideSenderEmailAddress = 'HideSenderEmailAddress';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function MailOptionsTypeCodeType()
	{
		$this->EbatNs_FacetType('MailOptionsTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MailOptionsTypeCodeType = new MailOptionsTypeCodeType();

?>
