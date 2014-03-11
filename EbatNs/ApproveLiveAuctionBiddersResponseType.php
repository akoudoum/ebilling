<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractResponseType.php';
require_once 'LiveAuctionApprovalStatusArrayType.php';

class ApproveLiveAuctionBiddersResponseType extends AbstractResponseType
{
	// start props
	// @var LiveAuctionApprovalStatusArrayType $BidderUpdateStatus
	var $BidderUpdateStatus;
	// end props

/**
 *

 * @return LiveAuctionApprovalStatusArrayType
 */
	function getBidderUpdateStatus()
	{
		return $this->BidderUpdateStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidderUpdateStatus($value)
	{
		$this->BidderUpdateStatus = $value;
	}
/**
 *

 * @return 
 */
	function ApproveLiveAuctionBiddersResponseType()
	{
		$this->AbstractResponseType('ApproveLiveAuctionBiddersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BidderUpdateStatus' =>
				array(
					'required' => false,
					'type' => 'LiveAuctionApprovalStatusArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
