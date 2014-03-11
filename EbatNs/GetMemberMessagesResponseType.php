<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'MemberMessageExchangeArrayType.php';

class GetMemberMessagesResponseType extends AbstractResponseType
{
	// start props
	// @var MemberMessageExchangeArrayType $MemberMessage
	var $MemberMessage;
	// @var PaginationResultType $PaginationResult
	var $PaginationResult;
	// @var boolean $HasMoreItems
	var $HasMoreItems;
	// end props

/**
 *

 * @return MemberMessageExchangeArrayType
 */
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}
/**
 *

 * @return PaginationResultType
 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
/**
 *

 * @return boolean
 */
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}
/**
 *

 * @return 
 */
	function GetMemberMessagesResponseType()
	{
		$this->AbstractResponseType('GetMemberMessagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageExchangeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
