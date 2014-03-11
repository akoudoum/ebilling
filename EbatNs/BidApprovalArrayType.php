<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'BidApprovalType.php';

class BidApprovalArrayType extends EbatNs_ComplexType
{
	// start props
	// @var BidApprovalType $LiveAuctionBid
	var $LiveAuctionBid;
	// end props

/**
 *

 * @return BidApprovalType
 * @param  $index 
 */
	function getLiveAuctionBid($index = null)
	{
		if ($index) {
		return $this->LiveAuctionBid[$index];
	} else {
		return $this->LiveAuctionBid;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setLiveAuctionBid($value, $index = null)
	{
		if ($index) {
	$this->LiveAuctionBid[$index] = $value;
	} else {
	$this->LiveAuctionBid = $value;
	}

	}
/**
 *

 * @return 
 */
	function BidApprovalArrayType()
	{
		$this->EbatNs_ComplexType('BidApprovalArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'LiveAuctionBid' =>
				array(
					'required' => false,
					'type' => 'BidApprovalType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
