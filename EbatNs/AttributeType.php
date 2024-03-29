<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ValType.php';

class AttributeType extends EbatNs_ComplexType
{
	// start props
	// @var ValType $Value
	var $Value;
	// end props

/**
 *

 * @return ValType
 * @param  $index 
 */
	function getValue($index = null)
	{
		if ($index) {
		return $this->Value[$index];
	} else {
		return $this->Value;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setValue($value, $index = null)
	{
		if ($index) {
	$this->Value[$index] = $value;
	} else {
	$this->Value = $value;
	}

	}
/**
 *

 * @return 
 */
	function AttributeType()
	{
		$this->EbatNs_ComplexType('AttributeType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Value' =>
				array(
					'required' => false,
					'type' => 'ValType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'attributeID' =>
			array(
				'name' => 'attributeID',
				'type' => 'int',
				'use' => 'required'
			),
			'attributeLabel' =>
			array(
				'name' => 'attributeLabel',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
