<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'CancelOfferType.php';

class CancelOfferArrayType extends EbatNs_ComplexType
{
	// start props
	// @var CancelOfferType $CancelOffer
	var $CancelOffer;
	// end props

/**
 *

 * @return CancelOfferType
 * @param  $index 
 */
	function getCancelOffer($index = null)
	{
		if ($index) {
		return $this->CancelOffer[$index];
	} else {
		return $this->CancelOffer;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCancelOffer($value, $index = null)
	{
		if ($index) {
	$this->CancelOffer[$index] = $value;
	} else {
	$this->CancelOffer = $value;
	}

	}
/**
 *

 * @return 
 */
	function CancelOfferArrayType()
	{
		$this->EbatNs_ComplexType('CancelOfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CancelOffer' =>
				array(
					'required' => false,
					'type' => 'CancelOfferType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
