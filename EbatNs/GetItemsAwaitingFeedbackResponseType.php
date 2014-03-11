<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginatedTransactionArrayType.php';
require_once 'AbstractResponseType.php';

class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{
	// start props
	// @var PaginatedTransactionArrayType $ItemsAwaitingFeedback
	var $ItemsAwaitingFeedback;
	// end props

/**
 *

 * @return PaginatedTransactionArrayType
 */
	function getItemsAwaitingFeedback()
	{
		return $this->ItemsAwaitingFeedback;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemsAwaitingFeedback($value)
	{
		$this->ItemsAwaitingFeedback = $value;
	}
/**
 *

 * @return 
 */
	function GetItemsAwaitingFeedbackResponseType()
	{
		$this->AbstractResponseType('GetItemsAwaitingFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemsAwaitingFeedback' =>
				array(
					'required' => false,
					'type' => 'PaginatedTransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
