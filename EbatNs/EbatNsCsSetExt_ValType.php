<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_AttributeType.php';

class EbatNsCsSetExt_ValType extends EbatNs_ComplexType
{
	// start props
	// @var string $ValueLiteral
	var $ValueLiteral;
	// @var string $SuggestedValueLiteral
	var $SuggestedValueLiteral;
	// @var int $ValueID
	var $ValueID;
	// @var string $Name
	var $Name;
	// @var string $IsDefault
	var $IsDefault;
	// @var EbatNsCsSetExt_AttributeType $DependencyList
	var $DependencyList;
	// end props

/**
 *

 * @return string
 */
	function getValueLiteral()
	{
		return $this->ValueLiteral;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setValueLiteral($value)
	{
		$this->ValueLiteral = $value;
	}
/**
 *

 * @return string
 * @param  $index 
 */
	function getSuggestedValueLiteral($index = null)
	{
		if ($index) {
		return $this->SuggestedValueLiteral[$index];
	} else {
		return $this->SuggestedValueLiteral;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setSuggestedValueLiteral($value, $index = null)
	{
		if ($index) {
	$this->SuggestedValueLiteral[$index] = $value;
	} else {
	$this->SuggestedValueLiteral = $value;
	}

	}
/**
 *

 * @return int
 */
	function getValueID()
	{
		return $this->ValueID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setValueID($value)
	{
		$this->ValueID = $value;
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

 * @return string
 */
	function getIsDefault()
	{
		return $this->IsDefault;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIsDefault($value)
	{
		$this->IsDefault = $value;
	}
/**
 *

 * @return EbatNsCsSetExt_AttributeType
 * @param  $index 
 */
	function getDependencyList($index = null)
	{
		if ($index) {
		return $this->DependencyList[$index];
	} else {
		return $this->DependencyList;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDependencyList($value, $index = null)
	{
		if ($index) {
	$this->DependencyList[$index] = $value;
	} else {
	$this->DependencyList = $value;
	}

	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_ValType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_ValType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'ValueLiteral' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'SuggestedValueLiteral' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ValueID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IsDefault' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DependencyList' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_AttributeType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'id' =>
			array(
				'name' => 'id',
				'type' => 'int',
				'use' => 'required'
			)
		));

	}
}
?>
