<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'MemberMessageType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
	// start props
	// @var ItemIDType $ItemID
	var $ItemID;
	// @var MemberMessageType $MemberMessage
	var $MemberMessage;
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

 * @return MemberMessageType
 */
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}
/**
 *

 * @return 
 */
	function AddMemberMessageAAQToPartnerRequestType()
	{
		$this->AbstractRequestType('AddMemberMessageAAQToPartnerRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
