<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class LabelType extends EbatNs_ComplexType
{
	// start props
	// @var string $Name
	var $Name;
	// end props

/**
 *

 * @return string
 */
	function getName()
	{
		return $this->Name;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setName($value)
	{
		$this->Name = $value;
	}
/**
 *

 * @return 
 */
	function LabelType()
	{
		$this->EbatNs_ComplexType('LabelType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'visible' =>
			array(
				'name' => 'visible',
				'type' => 'boolean',
				'use' => 'required'
			)
		));

	}
}
?>
