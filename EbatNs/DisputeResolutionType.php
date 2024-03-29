<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'DisputeResolutionRecordTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'DisputeResolutionReasonCodeType.php';

class DisputeResolutionType extends EbatNs_ComplexType
{
	// start props
	// @var DisputeResolutionRecordTypeCodeType $DisputeResolutionRecordType
	var $DisputeResolutionRecordType;
	// @var DisputeResolutionReasonCodeType $DisputeResolutionReason
	var $DisputeResolutionReason;
	// @var dateTime $ResolutionTime
	var $ResolutionTime;
	// end props

/**
 *

 * @return DisputeResolutionRecordTypeCodeType
 */
	function getDisputeResolutionRecordType()
	{
		return $this->DisputeResolutionRecordType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisputeResolutionRecordType($value)
	{
		$this->DisputeResolutionRecordType = $value;
	}
/**
 *

 * @return DisputeResolutionReasonCodeType
 */
	function getDisputeResolutionReason()
	{
		return $this->DisputeResolutionReason;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisputeResolutionReason($value)
	{
		$this->DisputeResolutionReason = $value;
	}
/**
 *

 * @return dateTime
 */
	function getResolutionTime()
	{
		return $this->ResolutionTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setResolutionTime($value)
	{
		$this->ResolutionTime = $value;
	}
/**
 *

 * @return 
 */
	function DisputeResolutionType()
	{
		$this->EbatNs_ComplexType('DisputeResolutionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DisputeResolutionRecordType' =>
				array(
					'required' => false,
					'type' => 'DisputeResolutionRecordTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeResolutionReason' =>
				array(
					'required' => false,
					'type' => 'DisputeResolutionReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResolutionTime' =>
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
