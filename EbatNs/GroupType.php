<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class GroupType extends EbatNs_ComplexType
{
	// start props
	// @var int $MaxGroups
	var $MaxGroups;
	// @var int $MaxEntriesPerGroup
	var $MaxEntriesPerGroup;
	// end props

/**
 *

 * @return int
 */
	function getMaxGroups()
	{
		return $this->MaxGroups;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxGroups($value)
	{
		$this->MaxGroups = $value;
	}
/**
 *

 * @return int
 */
	function getMaxEntriesPerGroup()
	{
		return $this->MaxEntriesPerGroup;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxEntriesPerGroup($value)
	{
		$this->MaxEntriesPerGroup = $value;
	}
/**
 *

 * @return 
 */
	function GroupType()
	{
		$this->EbatNs_ComplexType('GroupType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MaxGroups' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxEntriesPerGroup' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
