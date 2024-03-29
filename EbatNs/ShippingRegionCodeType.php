<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class ShippingRegionCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Africa
	var $Africa = 'Africa';
	// @var string $Asia
	var $Asia = 'Asia';
	// @var string $Caribbean
	var $Caribbean = 'Caribbean';
	// @var string $Europe
	var $Europe = 'Europe';
	// @var string $LatinAmerica
	var $LatinAmerica = 'LatinAmerica';
	// @var string $MiddleEast
	var $MiddleEast = 'MiddleEast';
	// @var string $NorthAmerica
	var $NorthAmerica = 'NorthAmerica';
	// @var string $Oceania
	var $Oceania = 'Oceania';
	// @var string $SouthAmerica
	var $SouthAmerica = 'SouthAmerica';
	// @var string $EuropeanUnion
	var $EuropeanUnion = 'EuropeanUnion';
	// @var string $WillNotShip
	var $WillNotShip = 'WillNotShip';
	// @var string $Worldwide
	var $Worldwide = 'Worldwide';
	// @var string $Americas
	var $Americas = 'Americas';
	// @var string $None
	var $None = 'None';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function ShippingRegionCodeType()
	{
		$this->EbatNs_FacetType('ShippingRegionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShippingRegionCodeType = new ShippingRegionCodeType();

?>
