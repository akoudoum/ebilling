<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class CharityStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Valid
	var $Valid = 'Valid';
	// @var string $NoLongerValid
	var $NoLongerValid = 'NoLongerValid';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function CharityStatusCodeType()
	{
		$this->EbatNs_FacetType('CharityStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CharityStatusCodeType = new CharityStatusCodeType();

?>
