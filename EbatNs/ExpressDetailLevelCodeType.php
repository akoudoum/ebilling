<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ExpressDetailLevelCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Coarse
	var $Coarse = 'Coarse';
	// @var string $Fine
	var $Fine = 'Fine';
	// @var string $None
	var $None = 'None';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ExpressDetailLevelCodeType()
	{
		$this->EbatNs_FacetType('ExpressDetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ExpressDetailLevelCodeType = new ExpressDetailLevelCodeType();

?>
