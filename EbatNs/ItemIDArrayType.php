<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';

class ItemIDArrayType extends EbatNs_ComplexType
{
	// start props
	// @var ItemIDType $ItemID
	var $ItemID;
	// end props

/**
 *

 * @return ItemIDType
 * @param  $index 
 */
	function getItemID($index = null)
	{
		if ($index) {
		return $this->ItemID[$index];
	} else {
		return $this->ItemID;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setItemID($value, $index = null)
	{
		if ($index) {
	$this->ItemID[$index] = $value;
	} else {
	$this->ItemID = $value;
	}

	}
/**
 *

 * @return 
 */
	function ItemIDArrayType()
	{
		$this->EbatNs_ComplexType('ItemIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
