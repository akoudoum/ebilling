<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_RowType.php';

class EbatNsCsSetExt_InitialType extends EbatNs_ComplexType
{
	// start props
	// @var EbatNsCsSetExt_RowType $Row
	var $Row;
	// end props

/**
 *

 * @return EbatNsCsSetExt_RowType
 * @param  $index 
 */
	function getRow($index = null)
	{
		if ($index) {
		return $this->Row[$index];
	} else {
		return $this->Row;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setRow($value, $index = null)
	{
		if ($index) {
	$this->Row[$index] = $value;
	} else {
	$this->Row = $value;
	}

	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_InitialType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_InitialType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Row' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_RowType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
