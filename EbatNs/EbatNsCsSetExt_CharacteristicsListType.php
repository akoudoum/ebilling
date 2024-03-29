<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNsCsSetExt_AttributeArrayType.php';
require_once 'EbatNs_ComplexType.php';

class EbatNsCsSetExt_CharacteristicsListType extends EbatNs_ComplexType
{
	// start props
	// @var EbatNsCsSetExt_AttributeArrayType $Initial
	var $Initial;
	// @var EbatNsCsSetExt_AttributeArrayType $Conditional
	var $Conditional;
	// @var EbatNsCsSetExt_AttributeArrayType $Other
	var $Other;
	// end props

/**
 *

 * @return EbatNsCsSetExt_AttributeArrayType
 */
	function getInitial()
	{
		return $this->Initial;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInitial($value)
	{
		$this->Initial = $value;
	}
/**
 *

 * @return EbatNsCsSetExt_AttributeArrayType
 */
	function getConditional()
	{
		return $this->Conditional;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setConditional($value)
	{
		$this->Conditional = $value;
	}
/**
 *

 * @return EbatNsCsSetExt_AttributeArrayType
 */
	function getOther()
	{
		return $this->Other;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setOther($value)
	{
		$this->Other = $value;
	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_CharacteristicsListType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_CharacteristicsListType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Initial' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_AttributeArrayType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Conditional' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_AttributeArrayType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Other' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_AttributeArrayType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
