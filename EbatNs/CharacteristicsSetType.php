<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'CharacteristicType.php';
require_once 'EbatNs_ComplexType.php';

class CharacteristicsSetType extends EbatNs_ComplexType
{
	// start props
	// @var string $Name
	var $Name;
	// @var int $AttributeSetID
	var $AttributeSetID;
	// @var string $AttributeSetVersion
	var $AttributeSetVersion;
	// @var CharacteristicType $Characteristics
	var $Characteristics;
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

 * @return int
 */
	function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAttributeSetID($value)
	{
		$this->AttributeSetID = $value;
	}
/**
 *

 * @return string
 */
	function getAttributeSetVersion()
	{
		return $this->AttributeSetVersion;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAttributeSetVersion($value)
	{
		$this->AttributeSetVersion = $value;
	}
/**
 *

 * @return CharacteristicType
 * @param  $index 
 */
	function getCharacteristics($index = null)
	{
		if ($index) {
		return $this->Characteristics[$index];
	} else {
		return $this->Characteristics;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCharacteristics($value, $index = null)
	{
		if ($index) {
	$this->Characteristics[$index] = $value;
	} else {
	$this->Characteristics = $value;
	}

	}
/**
 *

 * @return 
 */
	function CharacteristicsSetType()
	{
		$this->EbatNs_ComplexType('CharacteristicsSetType', 'urn:ebay:apis:eBLBaseComponents');
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
				'AttributeSetID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Characteristics' =>
				array(
					'required' => false,
					'type' => 'CharacteristicType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
