<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ListingTipType.php';
require_once 'EbatNs_ComplexType.php';

class ListingTipArrayType extends EbatNs_ComplexType
{
	// start props
	// @var ListingTipType $ListingTip
	var $ListingTip;
	// end props

/**
 *

 * @return ListingTipType
 * @param  $index 
 */
	function getListingTip($index = null)
	{
		if ($index) {
		return $this->ListingTip[$index];
	} else {
		return $this->ListingTip;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setListingTip($value, $index = null)
	{
		if ($index) {
	$this->ListingTip[$index] = $value;
	} else {
	$this->ListingTip = $value;
	}

	}
/**
 *

 * @return 
 */
	function ListingTipArrayType()
	{
		$this->EbatNs_ComplexType('ListingTipArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ListingTip' =>
				array(
					'required' => false,
					'type' => 'ListingTipType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
