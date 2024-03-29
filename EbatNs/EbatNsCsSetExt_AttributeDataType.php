<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNsCsSetExt_AttributeSetArrayType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_CharacteristicsSetArrayType.php';
require_once 'EbatNsCsSetExt_GlobalSettingsType.php';

class EbatNsCsSetExt_AttributeDataType extends EbatNs_ComplexType
{
	// start props
	// @var EbatNsCsSetExt_AttributeSetArrayType $Attributes
	var $Attributes;
	// @var EbatNsCsSetExt_CharacteristicsSetArrayType $Characteristics
	var $Characteristics;
	// @var EbatNsCsSetExt_GlobalSettingsType $GlobalSettings
	var $GlobalSettings;
	// end props

/**
 *

 * @return EbatNsCsSetExt_AttributeSetArrayType
 * @param  $index 
 */
	function getAttributes($index = null)
	{
		if ($index) {
		return $this->Attributes[$index];
	} else {
		return $this->Attributes;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAttributes($value, $index = null)
	{
		if ($index) {
	$this->Attributes[$index] = $value;
	} else {
	$this->Attributes = $value;
	}

	}
/**
 *

 * @return EbatNsCsSetExt_CharacteristicsSetArrayType
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

 * @return EbatNsCsSetExt_GlobalSettingsType
 */
	function getGlobalSettings()
	{
		return $this->GlobalSettings;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setGlobalSettings($value)
	{
		$this->GlobalSettings = $value;
	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_AttributeDataType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_AttributeDataType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Attributes' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_AttributeSetArrayType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Characteristics' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_CharacteristicsSetArrayType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				),
				'GlobalSettings' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_GlobalSettingsType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
