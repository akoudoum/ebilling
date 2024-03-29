<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'BidGroupItemStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';
require_once 'AmountType.php';

class BidGroupItemType extends EbatNs_ComplexType
{
	// start props
	// @var ItemType $Item
	var $Item;
	// @var BidGroupItemStatusCodeType $BidGroupItemStatus
	var $BidGroupItemStatus;
	// @var AmountType $MaxBidAmount
	var $MaxBidAmount;
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

 * @return BidGroupItemStatusCodeType
 */
	function getBidGroupItemStatus()
	{
		return $this->BidGroupItemStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidGroupItemStatus($value)
	{
		$this->BidGroupItemStatus = $value;
	}
/**
 *

 * @return AmountType
 */
	function getMaxBidAmount()
	{
		return $this->MaxBidAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxBidAmount($value)
	{
		$this->MaxBidAmount = $value;
	}
/**
 *

 * @return 
 */
	function BidGroupItemType()
	{
		$this->EbatNs_ComplexType('BidGroupItemType', 'urn:ebay:apis:eBLBaseComponents');
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
				'BidGroupItemStatus' =>
				array(
					'required' => false,
					'type' => 'BidGroupItemStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxBidAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
