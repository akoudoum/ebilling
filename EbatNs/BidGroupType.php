<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'BidGroupStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BidGroupItemType.php';

class BidGroupType extends EbatNs_ComplexType
{
	// start props
	// @var BidGroupItemType $BidGroupItem
	var $BidGroupItem;
	// @var long $BidGroupID
	var $BidGroupID;
	// @var string $BidGroupName
	var $BidGroupName;
	// @var BidGroupStatusCodeType $BidGroupStatus
	var $BidGroupStatus;
	// end props

/**
 *

 * @return BidGroupItemType
 * @param  $index 
 */
	function getBidGroupItem($index = null)
	{
		if ($index) {
		return $this->BidGroupItem[$index];
	} else {
		return $this->BidGroupItem;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setBidGroupItem($value, $index = null)
	{
		if ($index) {
	$this->BidGroupItem[$index] = $value;
	} else {
	$this->BidGroupItem = $value;
	}

	}
/**
 *

 * @return long
 */
	function getBidGroupID()
	{
		return $this->BidGroupID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidGroupID($value)
	{
		$this->BidGroupID = $value;
	}
/**
 *

 * @return string
 */
	function getBidGroupName()
	{
		return $this->BidGroupName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidGroupName($value)
	{
		$this->BidGroupName = $value;
	}
/**
 *

 * @return BidGroupStatusCodeType
 */
	function getBidGroupStatus()
	{
		return $this->BidGroupStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidGroupStatus($value)
	{
		$this->BidGroupStatus = $value;
	}
/**
 *

 * @return 
 */
	function BidGroupType()
	{
		$this->EbatNs_ComplexType('BidGroupType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidGroupItem' =>
				array(
					'required' => false,
					'type' => 'BidGroupItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BidGroupID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidGroupName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidGroupStatus' =>
				array(
					'required' => false,
					'type' => 'BidGroupStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
