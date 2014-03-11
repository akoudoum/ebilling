<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class HistogramEntryType extends EbatNs_ComplexType
{
	// start props
	// @var int $Count
	var $Count;
	// end props

/**
 *

 * @return int
 */
	function getCount()
	{
		return $this->Count;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCount($value)
	{
		$this->Count = $value;
	}
/**
 *

 * @return 
 */
	function HistogramEntryType()
	{
		$this->EbatNs_ComplexType('HistogramEntryType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Count' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'id' =>
			array(
				'name' => 'id',
				'type' => 'string',
				'use' => 'required'
			),
			'name' =>
			array(
				'name' => 'name',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
