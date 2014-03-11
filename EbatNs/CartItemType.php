<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ModifyActionCodeType.php';
require_once 'ItemType.php';

class CartItemType extends EbatNs_ComplexType
{
	// start props
	// @var ItemType $Item
	var $Item;
	// @var long $ReferenceID
	var $ReferenceID;
	// @var ModifyActionCodeType $Action
	var $Action;
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

 * @return long
 */
	function getReferenceID()
	{
		return $this->ReferenceID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReferenceID($value)
	{
		$this->ReferenceID = $value;
	}
/**
 *

 * @return ModifyActionCodeType
 */
	function getAction()
	{
		return $this->Action;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAction($value)
	{
		$this->Action = $value;
	}
/**
 *

 * @return 
 */
	function CartItemType()
	{
		$this->EbatNs_ComplexType('CartItemType', 'urn:ebay:apis:eBLBaseComponents');
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
				'ReferenceID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'ModifyActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
