<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class AccountEntrySortTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $None
	var $None = 'None';
	// @var string $AccountEntryCreatedTimeAscending
	var $AccountEntryCreatedTimeAscending = 'AccountEntryCreatedTimeAscending';
	// @var string $AccountEntryCreatedTimeDescending
	var $AccountEntryCreatedTimeDescending = 'AccountEntryCreatedTimeDescending';
	// @var string $AccountEntryItemNumberAscending
	var $AccountEntryItemNumberAscending = 'AccountEntryItemNumberAscending';
	// @var string $AccountEntryItemNumberDescending
	var $AccountEntryItemNumberDescending = 'AccountEntryItemNumberDescending';
	// @var string $AccountEntryFeeTypeAscending
	var $AccountEntryFeeTypeAscending = 'AccountEntryFeeTypeAscending';
	// @var string $AccountEntryFeeTypeDescending
	var $AccountEntryFeeTypeDescending = 'AccountEntryFeeTypeDescending';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function AccountEntrySortTypeCodeType()
	{
		$this->EbatNs_FacetType('AccountEntrySortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccountEntrySortTypeCodeType = new AccountEntrySortTypeCodeType();

?>
