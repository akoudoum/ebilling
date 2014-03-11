<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class ListingDurationDefinitionType extends EbatNs_ComplexType
{
	// start props
	// @var token $Duration
	var $Duration;
	// end props

/**
 *

 * @return token
 * @param  $index 
 */
	function getDuration($index = null)
	{
		if ($index) {
		return $this->Duration[$index];
	} else {
		return $this->Duration;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDuration($value, $index = null)
	{
		if ($index) {
	$this->Duration[$index] = $value;
	} else {
	$this->Duration = $value;
	}

	}
/**
 *

 * @return 
 */
	function ListingDurationDefinitionType()
	{
		$this->EbatNs_ComplexType('ListingDurationDefinitionType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Duration' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'durationSetID' =>
			array(
				'name' => 'durationSetID',
				'type' => 'int',
				'use' => 'required'
			)
		));

	}
}
?>
