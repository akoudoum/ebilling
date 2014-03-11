<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductInfoType.php';

class ProductRecommendationsType extends EbatNs_ComplexType
{
	// start props
	// @var ProductInfoType $Product
	var $Product;
	// end props

/**
 *

 * @return ProductInfoType
 * @param  $index 
 */
	function getProduct($index = null)
	{
		if ($index) {
		return $this->Product[$index];
	} else {
		return $this->Product;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setProduct($value, $index = null)
	{
		if ($index) {
	$this->Product[$index] = $value;
	} else {
	$this->Product = $value;
	}

	}
/**
 *

 * @return 
 */
	function ProductRecommendationsType()
	{
		$this->EbatNs_ComplexType('ProductRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Product' =>
				array(
					'required' => false,
					'type' => 'ProductInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
