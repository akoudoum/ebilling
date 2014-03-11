<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'FeeType.php';

class FeesType extends EbatNs_ComplexType
{
	// start props
	// @var FeeType $Fee
	var $Fee;
	// end props

/**
 *

 * @return FeeType
 * @param  $index 
 */
	function getFee($index = null)
	{
		if ($index) {
		return $this->Fee[$index];
	} else {
		return $this->Fee;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFee($value, $index = null)
	{
		if ($index) {
	$this->Fee[$index] = $value;
	} else {
	$this->Fee = $value;
	}

	}
/**
 *

 * @return 
 */
	function FeesType()
	{
		$this->EbatNs_ComplexType('FeesType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Fee' =>
				array(
					'required' => false,
					'type' => 'FeeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
