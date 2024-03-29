<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';

class GetFeedbackRequestType extends AbstractRequestType
{
	// start props
	// @var PaginationType $Pagination
	var $Pagination;
	// @var UserIDType $UserID
	var $UserID;
	// @var string $FeedbackID
	var $FeedbackID;
	// end props

/**
 *

 * @return PaginationType
 */
	function getPagination()
	{
		return $this->Pagination;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
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
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
	}
/**
 *

 * @return 
 */
	function GetFeedbackRequestType()
	{
		$this->AbstractRequestType('GetFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
