<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AddMemberMessagesAAQToBidderResponseContainerType.php';
require_once 'AbstractResponseType.php';

class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{
	// start props
	// @var AddMemberMessagesAAQToBidderResponseContainerType $AddMemberMessagesAAQToBidderResponseContainer
	var $AddMemberMessagesAAQToBidderResponseContainer;
	// end props

/**
 *

 * @return AddMemberMessagesAAQToBidderResponseContainerType
 * @param  $index 
 */
	function getAddMemberMessagesAAQToBidderResponseContainer($index = null)
	{
		if ($index) {
		return $this->AddMemberMessagesAAQToBidderResponseContainer[$index];
	} else {
		return $this->AddMemberMessagesAAQToBidderResponseContainer;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAddMemberMessagesAAQToBidderResponseContainer($value, $index = null)
	{
		if ($index) {
	$this->AddMemberMessagesAAQToBidderResponseContainer[$index] = $value;
	} else {
	$this->AddMemberMessagesAAQToBidderResponseContainer = $value;
	}

	}
/**
 *

 * @return 
 */
	function AddMemberMessagesAAQToBidderResponseType()
	{
		$this->AbstractResponseType('AddMemberMessagesAAQToBidderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AddMemberMessagesAAQToBidderResponseContainer' =>
				array(
					'required' => false,
					'type' => 'AddMemberMessagesAAQToBidderResponseContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
