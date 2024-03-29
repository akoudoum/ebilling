<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'TaxTableType.php';
require_once 'AbstractRequestType.php';

class SetTaxTableRequestType extends AbstractRequestType
{
	// start props
	// @var TaxTableType $TaxTable
	var $TaxTable;
	// end props

/**
 *

 * @return TaxTableType
 */
	function getTaxTable()
	{
		return $this->TaxTable;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}
/**
 *

 * @return 
 */
	function SetTaxTableRequestType()
	{
		$this->AbstractRequestType('SetTaxTableRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'TaxTable' =>
				array(
					'required' => false,
					'type' => 'TaxTableType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
