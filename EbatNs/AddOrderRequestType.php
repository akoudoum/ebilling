<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'OrderType.php';
require_once 'AbstractRequestType.php';

class AddOrderRequestType extends AbstractRequestType
{
	// start props
	// @var OrderType $Order
	var $Order;
	// end props

/**
 *

 * @return OrderType
 */
	function getOrder()
	{
		return $this->Order;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setOrder($value)
	{
		$this->Order = $value;
	}
/**
 *

 * @return 
 */
	function AddOrderRequestType()
	{
		$this->AbstractRequestType('AddOrderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Order' =>
				array(
					'required' => false,
					'type' => 'OrderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
