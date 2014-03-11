<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ExpressHistogramProductType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ExpressHistogramDomainDetailsType.php';

class ExpressHistogramAisleType extends EbatNs_ComplexType
{
	// start props
	// @var ExpressHistogramDomainDetailsType $DomainDetails
	var $DomainDetails;
	// @var ExpressHistogramProductType $ProductType
	var $ProductType;
	// end props

/**
 *

 * @return ExpressHistogramDomainDetailsType
 */
	function getDomainDetails()
	{
		return $this->DomainDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDomainDetails($value)
	{
		$this->DomainDetails = $value;
	}
/**
 *

 * @return ExpressHistogramProductType
 * @param  $index 
 */
	function getProductType($index = null)
	{
		if ($index) {
		return $this->ProductType[$index];
	} else {
		return $this->ProductType;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setProductType($value, $index = null)
	{
		if ($index) {
	$this->ProductType[$index] = $value;
	} else {
	$this->ProductType = $value;
	}

	}
/**
 *

 * @return 
 */
	function ExpressHistogramAisleType()
	{
		$this->EbatNs_ComplexType('ExpressHistogramAisleType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DomainDetails' =>
				array(
					'required' => false,
					'type' => 'ExpressHistogramDomainDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductType' =>
				array(
					'required' => false,
					'type' => 'ExpressHistogramProductType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
