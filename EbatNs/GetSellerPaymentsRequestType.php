<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginationType.php';
require_once 'RCSPaymentStatusCodeType.php';
require_once 'AbstractRequestType.php';

class GetSellerPaymentsRequestType extends AbstractRequestType
{
	// start props
	// @var RCSPaymentStatusCodeType $PaymentStatus
	var $PaymentStatus;
	// @var dateTime $PaymentTimeFrom
	var $PaymentTimeFrom;
	// @var dateTime $PaymentTimeTo
	var $PaymentTimeTo;
	// @var PaginationType $Pagination
	var $Pagination;
	// end props

/**
 *

 * @return RCSPaymentStatusCodeType
 */
	function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentStatus($value)
	{
		$this->PaymentStatus = $value;
	}
/**
 *

 * @return dateTime
 */
	function getPaymentTimeFrom()
	{
		return $this->PaymentTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentTimeFrom($value)
	{
		$this->PaymentTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getPaymentTimeTo()
	{
		return $this->PaymentTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentTimeTo($value)
	{
		$this->PaymentTimeTo = $value;
	}
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

 * @return 
 */
	function GetSellerPaymentsRequestType()
	{
		$this->AbstractRequestType('GetSellerPaymentsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PaymentStatus' =>
				array(
					'required' => false,
					'type' => 'RCSPaymentStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
