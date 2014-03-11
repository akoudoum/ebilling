<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'BuyerProtectionSourceCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BuyerProtectionCodeType.php';

class BuyerProtectionDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var BuyerProtectionSourceCodeType $BuyerProtectionSource
	var $BuyerProtectionSource;
	// @var BuyerProtectionCodeType $BuyerProtectionStatus
	var $BuyerProtectionStatus;
	// end props

/**
 *

 * @return BuyerProtectionSourceCodeType
 */
	function getBuyerProtectionSource()
	{
		return $this->BuyerProtectionSource;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyerProtectionSource($value)
	{
		$this->BuyerProtectionSource = $value;
	}
/**
 *

 * @return BuyerProtectionCodeType
 */
	function getBuyerProtectionStatus()
	{
		return $this->BuyerProtectionStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyerProtectionStatus($value)
	{
		$this->BuyerProtectionStatus = $value;
	}
/**
 *

 * @return 
 */
	function BuyerProtectionDetailsType()
	{
		$this->EbatNs_ComplexType('BuyerProtectionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BuyerProtectionSource' =>
				array(
					'required' => false,
					'type' => 'BuyerProtectionSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerProtectionStatus' =>
				array(
					'required' => false,
					'type' => 'BuyerProtectionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
