<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ListingTipArrayType.php';
require_once 'EbatNs_ComplexType.php';

class ListingAnalyzerRecommendationsType extends EbatNs_ComplexType
{
	// start props
	// @var ListingTipArrayType $ListingTipArray
	var $ListingTipArray;
	// end props

/**
 *

 * @return ListingTipArrayType
 */
	function getListingTipArray()
	{
		return $this->ListingTipArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setListingTipArray($value)
	{
		$this->ListingTipArray = $value;
	}
/**
 *

 * @return 
 */
	function ListingAnalyzerRecommendationsType()
	{
		$this->EbatNs_ComplexType('ListingAnalyzerRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ListingTipArray' =>
				array(
					'required' => false,
					'type' => 'ListingTipArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
