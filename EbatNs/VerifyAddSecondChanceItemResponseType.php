<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractResponseType.php';

class VerifyAddSecondChanceItemResponseType extends AbstractResponseType
{
	// start props
	// @var dateTime $StartTime
	var $StartTime;
	// @var dateTime $EndTime
	var $EndTime;
	// end props

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

 * @return 
 */
	function VerifyAddSecondChanceItemResponseType()
	{
		$this->AbstractResponseType('VerifyAddSecondChanceItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
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
				)
			));

	}
}
?>
