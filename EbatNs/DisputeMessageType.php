<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'DisputeMessageSourceCodeType.php';

class DisputeMessageType extends EbatNs_ComplexType
{
	// start props
	// @var int $MessageID
	var $MessageID;
	// @var DisputeMessageSourceCodeType $MessageSource
	var $MessageSource;
	// @var dateTime $MessageCreationTime
	var $MessageCreationTime;
	// @var string $MessageText
	var $MessageText;
	// end props

/**
 *

 * @return int
 */
	function getMessageID()
	{
		return $this->MessageID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}
/**
 *

 * @return DisputeMessageSourceCodeType
 */
	function getMessageSource()
	{
		return $this->MessageSource;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMessageSource($value)
	{
		$this->MessageSource = $value;
	}
/**
 *

 * @return dateTime
 */
	function getMessageCreationTime()
	{
		return $this->MessageCreationTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMessageCreationTime($value)
	{
		$this->MessageCreationTime = $value;
	}
/**
 *

 * @return string
 */
	function getMessageText()
	{
		return $this->MessageText;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMessageText($value)
	{
		$this->MessageText = $value;
	}
/**
 *

 * @return 
 */
	function DisputeMessageType()
	{
		$this->EbatNs_ComplexType('DisputeMessageType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MessageID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageSource' =>
				array(
					'required' => false,
					'type' => 'DisputeMessageSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageCreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageText' =>
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
