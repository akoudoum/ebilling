<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class VeROReportPacketStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Received
	var $Received = 'Received';
	// @var string $InProcess
	var $InProcess = 'InProcess';
	// @var string $Processed
	var $Processed = 'Processed';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function VeROReportPacketStatusCodeType()
	{
		$this->EbatNs_FacetType('VeROReportPacketStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VeROReportPacketStatusCodeType = new VeROReportPacketStatusCodeType();

?>
