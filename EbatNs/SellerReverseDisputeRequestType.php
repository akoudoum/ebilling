<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'DisputeIDType.php';
require_once 'DisputeResolutionReasonCodeType.php';
require_once 'AbstractRequestType.php';

class SellerReverseDisputeRequestType extends AbstractRequestType
{
	// start props
	// @var DisputeIDType $DisputeID
	var $DisputeID;
	// @var DisputeResolutionReasonCodeType $DisputeResolutionReason
	var $DisputeResolutionReason;
	// end props

/**
 *

 * @return DisputeIDType
 */
	function getDisputeID()
	{
		return $this->DisputeID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
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

 * @return 
 */
	function SellerReverseDisputeRequestType()
	{
		$this->AbstractRequestType('SellerReverseDisputeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DisputeID' =>
				array(
					'required' => false,
					'type' => 'DisputeIDType',
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
				)
			));

	}
}
?>
