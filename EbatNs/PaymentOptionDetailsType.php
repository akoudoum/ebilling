<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPaymentMethodCodeType.php';

class PaymentOptionDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var BuyerPaymentMethodCodeType $PaymentOption
	var $PaymentOption;
	// @var string $Description
	var $Description;
	// end props

/**
 *

 * @return BuyerPaymentMethodCodeType
 */
	function getPaymentOption()
	{
		return $this->PaymentOption;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentOption($value)
	{
		$this->PaymentOption = $value;
	}
/**
 *

 * @return string
 */
	function getDescription()
	{
		return $this->Description;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
/**
 *

 * @return 
 */
	function PaymentOptionDetailsType()
	{
		$this->EbatNs_ComplexType('PaymentOptionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PaymentOption' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
