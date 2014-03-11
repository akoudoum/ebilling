<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_ValType.php';

class EbatNsCsSetExt_ValidationRuleType extends EbatNs_ComplexType
{
	// start props
	// @var EbatNsCsSetExt_ValType $Value
	var $Value;
	// @var int $Length
	var $Length;
	// @var string $Name
	var $Name;
	// @var int $Max
	var $Max;
	// @var int $Min
	var $Min;
	// end props

/**
 *

 * @return EbatNsCsSetExt_ValType
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

 * @return int
 */
	function getLength()
	{
		return $this->Length;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLength($value)
	{
		$this->Length = $value;
	}
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

 * @return int
 */
	function getMax()
	{
		return $this->Max;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMax($value)
	{
		$this->Max = $value;
	}
/**
 *

 * @return int
 */
	function getMin()
	{
		return $this->Min;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMin($value)
	{
		$this->Min = $value;
	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_ValidationRuleType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_ValidationRuleType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Value' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_ValType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Length' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Name' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Max' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Min' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
