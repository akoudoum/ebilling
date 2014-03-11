<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

class LiveAuctionDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var int $UserCatalogID
	var $UserCatalogID;
	// @var int $ScheduleID
	var $ScheduleID;
	// @var string $LotNumber
	var $LotNumber;
	// @var AmountType $HighEstimate
	var $HighEstimate;
	// @var AmountType $LowEstimate
	var $LowEstimate;
	// end props

/**
 *

 * @return int
 */
	function getUserCatalogID()
	{
		return $this->UserCatalogID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserCatalogID($value)
	{
		$this->UserCatalogID = $value;
	}
/**
 *

 * @return int
 */
	function getScheduleID()
	{
		return $this->ScheduleID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setScheduleID($value)
	{
		$this->ScheduleID = $value;
	}
/**
 *

 * @return string
 */
	function getLotNumber()
	{
		return $this->LotNumber;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLotNumber($value)
	{
		$this->LotNumber = $value;
	}
/**
 *

 * @return AmountType
 */
	function getHighEstimate()
	{
		return $this->HighEstimate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHighEstimate($value)
	{
		$this->HighEstimate = $value;
	}
/**
 *

 * @return AmountType
 */
	function getLowEstimate()
	{
		return $this->LowEstimate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLowEstimate($value)
	{
		$this->LowEstimate = $value;
	}
/**
 *

 * @return 
 */
	function LiveAuctionDetailsType()
	{
		$this->EbatNs_ComplexType('LiveAuctionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UserCatalogID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduleID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LotNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HighEstimate' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LowEstimate' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
