<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AddMemberMessagesAAQToBidderRequestContainerType.php';
require_once 'AbstractRequestType.php';

class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
	// start props
	// @var AddMemberMessagesAAQToBidderRequestContainerType $AddMemberMessagesAAQToBidderRequestContainer
	var $AddMemberMessagesAAQToBidderRequestContainer;
	// end props

/**
 *

 * @return AddMemberMessagesAAQToBidderRequestContainerType
 * @param  $index 
 */
	function getAddMemberMessagesAAQToBidderRequestContainer($index = null)
	{
		if ($index) {
		return $this->AddMemberMessagesAAQToBidderRequestContainer[$index];
	} else {
		return $this->AddMemberMessagesAAQToBidderRequestContainer;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAddMemberMessagesAAQToBidderRequestContainer($value, $index = null)
	{
		if ($index) {
	$this->AddMemberMessagesAAQToBidderRequestContainer[$index] = $value;
	} else {
	$this->AddMemberMessagesAAQToBidderRequestContainer = $value;
	}

	}
/**
 *

 * @return 
 */
	function AddMemberMessagesAAQToBidderRequestType()
	{
		$this->AbstractRequestType('AddMemberMessagesAAQToBidderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AddMemberMessagesAAQToBidderRequestContainer' =>
				array(
					'required' => false,
					'type' => 'AddMemberMessagesAAQToBidderRequestContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
