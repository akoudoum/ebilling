<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'FeesType.php';
require_once 'AbstractResponseType.php';
require_once 'ItemIDType.php';

class AddItemResponseType extends AbstractResponseType
{
	// start props
	// @var ItemIDType $ItemID
	var $ItemID;
	// @var dateTime $StartTime
	var $StartTime;
	// @var dateTime $EndTime
	var $EndTime;
	// @var FeesType $Fees
	var $Fees;
	// @var string $CategoryID
	var $CategoryID;
	// @var string $Category2ID
	var $Category2ID;
	// end props

/**
 *

 * @return ItemIDType
 */
	function getItemID()
	{
		return $this->ItemID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
/**
 *

 * @return dateTime
 */
	function getStartTime()
	{
		return $this->StartTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
/**
 *

 * @return dateTime
 */
	function getEndTime()
	{
		return $this->EndTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
/**
 *

 * @return FeesType
 */
	function getFees()
	{
		return $this->Fees;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFees($value)
	{
		$this->Fees = $value;
	}
/**
 *

 * @return string
 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
/**
 *

 * @return string
 */
	function getCategory2ID()
	{
		return $this->Category2ID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}
/**
 *

 * @return 
 */
	function AddItemResponseType()
	{
		$this->AbstractResponseType('AddItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fees' =>
				array(
					'required' => false,
					'type' => 'FeesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Category2ID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
