<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'ItemRatingDetailArrayType.php';
require_once 'CommentTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

class LeaveFeedbackRequestType extends AbstractRequestType
{
	// start props
	// @var ItemIDType $ItemID
	var $ItemID;
	// @var string $CommentText
	var $CommentText;
	// @var CommentTypeCodeType $CommentType
	var $CommentType;
	// @var string $TransactionID
	var $TransactionID;
	// @var UserIDType $TargetUser
	var $TargetUser;
	// @var ItemRatingDetailArrayType $SellerItemRatingDetailArray
	var $SellerItemRatingDetailArray;
	// end props

/**
 *

 * @return ItemIDType
 */
	function getItemID()
	{
		return $this->ItemID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
/**
 *

 * @return string
 */
	function getCommentText()
	{
		return $this->CommentText;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCommentText($value)
	{
		$this->CommentText = $value;
	}
/**
 *

 * @return CommentTypeCodeType
 */
	function getCommentType()
	{
		return $this->CommentType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCommentType($value)
	{
		$this->CommentType = $value;
	}
/**
 *

 * @return string
 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
/**
 *

 * @return UserIDType
 */
	function getTargetUser()
	{
		return $this->TargetUser;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTargetUser($value)
	{
		$this->TargetUser = $value;
	}
/**
 *

 * @return ItemRatingDetailArrayType
 */
	function getSellerItemRatingDetailArray()
	{
		return $this->SellerItemRatingDetailArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellerItemRatingDetailArray($value)
	{
		$this->SellerItemRatingDetailArray = $value;
	}
/**
 *

 * @return 
 */
	function LeaveFeedbackRequestType()
	{
		$this->AbstractRequestType('LeaveFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentType' =>
				array(
					'required' => false,
					'type' => 'CommentTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TargetUser' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerItemRatingDetailArray' =>
				array(
					'required' => false,
					'type' => 'ItemRatingDetailArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
