<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AddressType.php';

class BuyerType extends EbatNs_ComplexType
{
	// start props
	// @var AddressType $ShippingAddress
	var $ShippingAddress;
	// end props

/**
 *

 * @return AddressType
 */
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
	}
/**
 *

 * @return 
 */
	function BuyerType()
	{
		$this->EbatNs_ComplexType('BuyerType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ShippingAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
