<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class MessageStatusTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Answered
	var $Answered = 'Answered';
	// @var string $Unanswered
	var $Unanswered = 'Unanswered';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function MessageStatusTypeCodeType()
	{
		$this->EbatNs_FacetType('MessageStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MessageStatusTypeCodeType = new MessageStatusTypeCodeType();

?>
