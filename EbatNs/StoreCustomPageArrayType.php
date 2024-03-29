<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomPageType.php';

class StoreCustomPageArrayType extends EbatNs_ComplexType
{
	// start props
	// @var StoreCustomPageType $CustomPage
	var $CustomPage;
	// end props

/**
 *

 * @return StoreCustomPageType
 * @param  $index 
 */
	function getCustomPage($index = null)
	{
		if ($index) {
		return $this->CustomPage[$index];
	} else {
		return $this->CustomPage;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCustomPage($value, $index = null)
	{
		if ($index) {
	$this->CustomPage[$index] = $value;
	} else {
	$this->CustomPage = $value;
	}

	}
/**
 *

 * @return 
 */
	function StoreCustomPageArrayType()
	{
		$this->EbatNs_ComplexType('StoreCustomPageArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CustomPage' =>
				array(
					'required' => false,
					'type' => 'StoreCustomPageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
