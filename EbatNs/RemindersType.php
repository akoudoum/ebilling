<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class RemindersType extends EbatNs_ComplexType
{
	// start props
	// @var int $PaymentToSendCount
	var $PaymentToSendCount;
	// @var int $FeedbackToReceiveCount
	var $FeedbackToReceiveCount;
	// @var int $FeedbackToSendCount
	var $FeedbackToSendCount;
	// @var int $OutbidCount
	var $OutbidCount;
	// @var int $PaymentToReceiveCount
	var $PaymentToReceiveCount;
	// @var int $SecondChanceOfferCount
	var $SecondChanceOfferCount;
	// @var int $ShippingNeededCount
	var $ShippingNeededCount;
	// @var int $RelistingNeededCount
	var $RelistingNeededCount;
	// @var int $TotalNewLeadsCount
	var $TotalNewLeadsCount;
	// end props

/**
 *

 * @return int
 */
	function getPaymentToSendCount()
	{
		return $this->PaymentToSendCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentToSendCount($value)
	{
		$this->PaymentToSendCount = $value;
	}
/**
 *

 * @return int
 */
	function getFeedbackToReceiveCount()
	{
		return $this->FeedbackToReceiveCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackToReceiveCount($value)
	{
		$this->FeedbackToReceiveCount = $value;
	}
/**
 *

 * @return int
 */
	function getFeedbackToSendCount()
	{
		return $this->FeedbackToSendCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackToSendCount($value)
	{
		$this->FeedbackToSendCount = $value;
	}
/**
 *

 * @return int
 */
	function getOutbidCount()
	{
		return $this->OutbidCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setOutbidCount($value)
	{
		$this->OutbidCount = $value;
	}
/**
 *

 * @return int
 */
	function getPaymentToReceiveCount()
	{
		return $this->PaymentToReceiveCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentToReceiveCount($value)
	{
		$this->PaymentToReceiveCount = $value;
	}
/**
 *

 * @return int
 */
	function getSecondChanceOfferCount()
	{
		return $this->SecondChanceOfferCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSecondChanceOfferCount($value)
	{
		$this->SecondChanceOfferCount = $value;
	}
/**
 *

 * @return int
 */
	function getShippingNeededCount()
	{
		return $this->ShippingNeededCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippingNeededCount($value)
	{
		$this->ShippingNeededCount = $value;
	}
/**
 *

 * @return int
 */
	function getRelistingNeededCount()
	{
		return $this->RelistingNeededCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRelistingNeededCount($value)
	{
		$this->RelistingNeededCount = $value;
	}
/**
 *

 * @return int
 */
	function getTotalNewLeadsCount()
	{
		return $this->TotalNewLeadsCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalNewLeadsCount($value)
	{
		$this->TotalNewLeadsCount = $value;
	}
/**
 *

 * @return 
 */
	function RemindersType()
	{
		$this->EbatNs_ComplexType('RemindersType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PaymentToSendCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackToReceiveCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackToSendCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OutbidCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentToReceiveCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SecondChanceOfferCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingNeededCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RelistingNeededCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalNewLeadsCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
