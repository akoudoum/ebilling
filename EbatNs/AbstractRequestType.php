<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ErrorHandlingCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'DetailLevelCodeType.php';
require_once 'WarningLevelCodeType.php';
require_once 'UUIDType.php';
require_once 'BotBlockRequestType.php';

class AbstractRequestType extends EbatNs_ComplexType
{
	// start props
	// @var DetailLevelCodeType $DetailLevel
	var $DetailLevel;
	// @var string $ErrorLanguage
	var $ErrorLanguage;
	// @var string $MessageID
	var $MessageID;
	// @var string $Version
	var $Version;
	// @var string $EndUserIP
	var $EndUserIP;
	// @var ErrorHandlingCodeType $ErrorHandling
	var $ErrorHandling;
	// @var UUIDType $InvocationID
	var $InvocationID;
	// @var WarningLevelCodeType $WarningLevel
	var $WarningLevel;
	// @var BotBlockRequestType $BotBlock
	var $BotBlock;
	// end props

/**
 *

 * @return DetailLevelCodeType
 * @param  $index 
 */
	function getDetailLevel($index = null)
	{
		if ($index) {
		return $this->DetailLevel[$index];
	} else {
		return $this->DetailLevel;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDetailLevel($value, $index = null)
	{
		if ($index) {
	$this->DetailLevel[$index] = $value;
	} else {
	$this->DetailLevel = $value;
	}

	}
/**
 *

 * @return string
 */
	function getErrorLanguage()
	{
		return $this->ErrorLanguage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setErrorLanguage($value)
	{
		$this->ErrorLanguage = $value;
	}
/**
 *

 * @return string
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

 * @return string
 */
	function getVersion()
	{
		return $this->Version;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setVersion($value)
	{
		$this->Version = $value;
	}
/**
 *

 * @return string
 */
	function getEndUserIP()
	{
		return $this->EndUserIP;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndUserIP($value)
	{
		$this->EndUserIP = $value;
	}
/**
 *

 * @return ErrorHandlingCodeType
 */
	function getErrorHandling()
	{
		return $this->ErrorHandling;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setErrorHandling($value)
	{
		$this->ErrorHandling = $value;
	}
/**
 *

 * @return UUIDType
 */
	function getInvocationID()
	{
		return $this->InvocationID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInvocationID($value)
	{
		$this->InvocationID = $value;
	}
/**
 *

 * @return WarningLevelCodeType
 */
	function getWarningLevel()
	{
		return $this->WarningLevel;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWarningLevel($value)
	{
		$this->WarningLevel = $value;
	}
/**
 *

 * @return BotBlockRequestType
 */
	function getBotBlock()
	{
		return $this->BotBlock;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBotBlock($value)
	{
		$this->BotBlock = $value;
	}
/**
 *

 * @return 
 */
	function AbstractRequestType()
	{
		$this->EbatNs_ComplexType('AbstractRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DetailLevel' =>
				array(
					'required' => false,
					'type' => 'DetailLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ErrorLanguage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Version' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndUserIP' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorHandling' =>
				array(
					'required' => false,
					'type' => 'ErrorHandlingCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvocationID' =>
				array(
					'required' => false,
					'type' => 'UUIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarningLevel' =>
				array(
					'required' => false,
					'type' => 'WarningLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BotBlock' =>
				array(
					'required' => false,
					'type' => 'BotBlockRequestType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
