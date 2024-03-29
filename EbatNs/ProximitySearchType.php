<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class ProximitySearchType extends EbatNs_ComplexType
{
	// start props
	// @var int $MaxDistance
	var $MaxDistance;
	// @var string $PostalCode
	var $PostalCode;
	// end props

/**
 *

 * @return int
 */
	function getMaxDistance()
	{
		return $this->MaxDistance;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxDistance($value)
	{
		$this->MaxDistance = $value;
	}
/**
 *

 * @return string
 */
	function getPostalCode()
	{
		return $this->PostalCode;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}
/**
 *

 * @return 
 */
	function ProximitySearchType()
	{
		$this->EbatNs_ComplexType('ProximitySearchType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'MaxDistance' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'PostalCode' =>
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
