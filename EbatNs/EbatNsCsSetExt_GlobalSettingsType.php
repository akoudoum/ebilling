<?php
// autogenerated file 23.02.2007 11:57
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class EbatNsCsSetExt_GlobalSettingsType extends EbatNs_ComplexType
{
	// start props
	// @var string $MonthAscendingLong
	var $MonthAscendingLong;
	// @var string $MonthDescendingLong
	var $MonthDescendingLong;
	// @var string $MonthAscendingShort
	var $MonthAscendingShort;
	// @var string $MonthDescendingShort
	var $MonthDescendingShort;
	// @var string $BaseHTMLPath
	var $BaseHTMLPath;
	// end props

/**
 *

 * @return string
 */
	function getMonthAscendingLong()
	{
		return $this->MonthAscendingLong;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMonthAscendingLong($value)
	{
		$this->MonthAscendingLong = $value;
	}
/**
 *

 * @return string
 */
	function getMonthDescendingLong()
	{
		return $this->MonthDescendingLong;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMonthDescendingLong($value)
	{
		$this->MonthDescendingLong = $value;
	}
/**
 *

 * @return string
 */
	function getMonthAscendingShort()
	{
		return $this->MonthAscendingShort;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMonthAscendingShort($value)
	{
		$this->MonthAscendingShort = $value;
	}
/**
 *

 * @return string
 */
	function getMonthDescendingShort()
	{
		return $this->MonthDescendingShort;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMonthDescendingShort($value)
	{
		$this->MonthDescendingShort = $value;
	}
/**
 *

 * @return string
 */
	function getBaseHTMLPath()
	{
		return $this->BaseHTMLPath;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBaseHTMLPath($value)
	{
		$this->BaseHTMLPath = $value;
	}
/**
 *

 * @return 
 */
	function EbatNsCsSetExt_GlobalSettingsType()
	{
		$this->EbatNs_ComplexType('EbatNsCsSetExt_GlobalSettingsType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'MonthAscendingLong' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MonthDescendingLong' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MonthAscendingShort' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MonthDescendingShort' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'BaseHTMLPath' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
