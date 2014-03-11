<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class LookupAttributeType extends EbatNs_ComplexType
{
	// start props
	// @var string $Name
	var $Name;
	// @var string $Value
	var $Value;
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

 * @return string
 */
	function getValue()
	{
		return $this->Value;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setValue($value)
	{
		$this->Value = $value;
	}
/**
 *

 * @return 
 */
	function LookupAttributeType()
	{
		$this->EbatNs_ComplexType('LookupAttributeType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Value' =>
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
