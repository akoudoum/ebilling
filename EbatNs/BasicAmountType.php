<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class BasicAmountType extends EbatNs_ComplexType
{
	// start props
	// end props

/**
 *

 * @return 
 */
	function BasicAmountType()
	{
		$this->EbatNs_ComplexType('BasicAmountType', 'urn:ebay:apis:eBLBaseComponents');
	$this->_attributes = array_merge($this->_attributes,
		array(
			'currencyID' =>
			array(
				'name' => 'currencyID',
				'type' => 'CurrencyCodeType',
				'use' => 'required'
			)
		));

	}
}
?>
