<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ExternalProductIDType.php';
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

class VerifyAddItemRequestType extends AbstractRequestType
{
	// start props
	// @var ItemType $Item
	var $Item;
	// @var boolean $IncludeExpressRequirements
	var $IncludeExpressRequirements;
	// @var ExternalProductIDType $ExternalProductID
	var $ExternalProductID;
	// end props

/**
 *

 * @return ItemType
 */
	function getItem()
	{
		return $this->Item;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItem($value)
	{
		$this->Item = $value;
	}
/**
 *

 * @return boolean
 */
	function getIncludeExpressRequirements()
	{
		return $this->IncludeExpressRequirements;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludeExpressRequirements($value)
	{
		$this->IncludeExpressRequirements = $value;
	}
/**
 *

 * @return ExternalProductIDType
 */
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}
/**
 *

 * @return 
 */
	function VerifyAddItemRequestType()
	{
		$this->AbstractRequestType('VerifyAddItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeExpressRequirements' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalProductID' =>
				array(
					'required' => false,
					'type' => 'ExternalProductIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
