<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class EbatNsCsSetExt_SortOrderCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Ascending
	var $Ascending = 'Ascending';
	// @var string $Descending
	var $Descending = 'Descending';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function EbatNsCsSetExt_SortOrderCodeType()
	{
		$this->EbatNs_FacetType('EbatNsCsSetExt_SortOrderCodeType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');

	}
}

$Facet_EbatNsCsSetExt_SortOrderCodeType = new EbatNsCsSetExt_SortOrderCodeType();

?>
