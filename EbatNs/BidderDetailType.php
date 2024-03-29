<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'LiveAuctionBidType.php';

class BidderDetailType extends EbatNs_ComplexType
{
	// start props
	// @var UserIDType $UserID
	var $UserID;
	// @var string $Email
	var $Email;
	// @var int $FeedbackScore
	var $FeedbackScore;
	// @var int $UniqueNegativeFeedbackCount
	var $UniqueNegativeFeedbackCount;
	// @var int $UniquePositiveFeedbackCount
	var $UniquePositiveFeedbackCount;
	// @var LiveAuctionBidType $LiveAuctionBidResult
	var $LiveAuctionBidResult;
	// end props

/**
 *

 * @return UserIDType
 */
	function getUserID()
	{
		return $this->UserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
/**
 *

 * @return string
 */
	function getEmail()
	{
		return $this->Email;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEmail($value)
	{
		$this->Email = $value;
	}
/**
 *

 * @return int
 */
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}
/**
 *

 * @return int
 */
	function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUniqueNegativeFeedbackCount($value)
	{
		$this->UniqueNegativeFeedbackCount = $value;
	}
/**
 *

 * @return int
 */
	function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUniquePositiveFeedbackCount($value)
	{
		$this->UniquePositiveFeedbackCount = $value;
	}
/**
 *

 * @return LiveAuctionBidType
 */
	function getLiveAuctionBidResult()
	{
		return $this->LiveAuctionBidResult;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLiveAuctionBidResult($value)
	{
		$this->LiveAuctionBidResult = $value;
	}
/**
 *

 * @return 
 */
	function BidderDetailType()
	{
		$this->EbatNs_ComplexType('BidderDetailType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Email' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniqueNegativeFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UniquePositiveFeedbackCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LiveAuctionBidResult' =>
				array(
					'required' => false,
					'type' => 'LiveAuctionBidType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
