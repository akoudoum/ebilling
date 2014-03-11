<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ProStoresDetailsType.php';
require_once 'EbatNs_ComplexType.php';

class ProStoresCheckoutPreferenceType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $CheckoutRedirectProStores
	var $CheckoutRedirectProStores;
	// @var ProStoresDetailsType $ProStoresDetails
	var $ProStoresDetails;
	// end props

/**
 *

 * @return boolean
 */
	function getCheckoutRedirectProStores()
	{
		return $this->CheckoutRedirectProStores;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCheckoutRedirectProStores($value)
	{
		$this->CheckoutRedirectProStores = $value;
	}
/**
 *

 * @return ProStoresDetailsType
 */
	function getProStoresDetails()
	{
		return $this->ProStoresDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProStoresDetails($value)
	{
		$this->ProStoresDetails = $value;
	}
/**
 *

 * @return 
 */
	function ProStoresCheckoutPreferenceType()
	{
		$this->EbatNs_ComplexType('ProStoresCheckoutPreferenceType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CheckoutRedirectProStores' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProStoresDetails' =>
				array(
					'required' => false,
					'type' => 'ProStoresDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..0'
				)
			));

	}
}
?>
