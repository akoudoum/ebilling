<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

class AddLiveAuctionItemRequestType extends AbstractRequestType
{
	// start props
	// @var ItemType $Item
	var $Item;
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

 * @return 
 */
	function AddLiveAuctionItemRequestType()
	{
		$this->AbstractRequestType('AddLiveAuctionItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
