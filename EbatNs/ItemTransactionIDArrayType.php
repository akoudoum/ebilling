<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ItemTransactionIDType.php';
require_once 'EbatNs_ComplexType.php';

class ItemTransactionIDArrayType extends EbatNs_ComplexType
{
	// start props
	// @var ItemTransactionIDType $ItemTransactionID
	var $ItemTransactionID;
	// end props

/**
 *

 * @return ItemTransactionIDType
 * @param  $index 
 */
	function getItemTransactionID($index = null)
	{
		if ($index) {
		return $this->ItemTransactionID[$index];
	} else {
		return $this->ItemTransactionID;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setItemTransactionID($value, $index = null)
	{
		if ($index) {
	$this->ItemTransactionID[$index] = $value;
	} else {
	$this->ItemTransactionID = $value;
	}

	}
/**
 *

 * @return 
 */
	function ItemTransactionIDArrayType()
	{
		$this->EbatNs_ComplexType('ItemTransactionIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemTransactionID' =>
				array(
					'required' => false,
					'type' => 'ItemTransactionIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
