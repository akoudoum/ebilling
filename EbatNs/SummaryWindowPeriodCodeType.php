<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class SummaryWindowPeriodCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Last24Hours
	var $Last24Hours = 'Last24Hours';
	// @var string $Last7Days
	var $Last7Days = 'Last7Days';
	// @var string $Last31Days
	var $Last31Days = 'Last31Days';
	// @var string $CurrentWeek
	var $CurrentWeek = 'CurrentWeek';
	// @var string $LastWeek
	var $LastWeek = 'LastWeek';
	// @var string $CurrentMonth
	var $CurrentMonth = 'CurrentMonth';
	// @var string $LastMonth
	var $LastMonth = 'LastMonth';
	// @var string $Last60Days
	var $Last60Days = 'Last60Days';
	// end props

/**
 *

 * @return 
 */
	function SummaryWindowPeriodCodeType()
	{
		$this->EbatNs_FacetType('SummaryWindowPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SummaryWindowPeriodCodeType = new SummaryWindowPeriodCodeType();

?>
