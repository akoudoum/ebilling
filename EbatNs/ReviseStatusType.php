<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class ReviseStatusType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $ItemRevised
	var $ItemRevised;
	// @var boolean $BuyItNowAdded
	var $BuyItNowAdded;
	// @var boolean $BuyItNowLowered
	var $BuyItNowLowered;
	// @var boolean $ReserveLowered
	var $ReserveLowered;
	// @var boolean $ReserveRemoved
	var $ReserveRemoved;
	// end props

/**
 *

 * @return boolean
 */
	function getItemRevised()
	{
		return $this->ItemRevised;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemRevised($value)
	{
		$this->ItemRevised = $value;
	}
/**
 *

 * @return boolean
 */
	function getBuyItNowAdded()
	{
		return $this->BuyItNowAdded;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyItNowAdded($value)
	{
		$this->BuyItNowAdded = $value;
	}
/**
 *

 * @return boolean
 */
	function getBuyItNowLowered()
	{
		return $this->BuyItNowLowered;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyItNowLowered($value)
	{
		$this->BuyItNowLowered = $value;
	}
/**
 *

 * @return boolean
 */
	function getReserveLowered()
	{
		return $this->ReserveLowered;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReserveLowered($value)
	{
		$this->ReserveLowered = $value;
	}
/**
 *

 * @return boolean
 */
	function getReserveRemoved()
	{
		return $this->ReserveRemoved;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReserveRemoved($value)
	{
		$this->ReserveRemoved = $value;
	}
/**
 *

 * @return 
 */
	function ReviseStatusType()
	{
		$this->EbatNs_ComplexType('ReviseStatusType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemRevised' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'BuyItNowAdded' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyItNowLowered' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReserveLowered' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReserveRemoved' =>
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
