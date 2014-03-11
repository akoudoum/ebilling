<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreVacationPreferencesType.php';

class StorePreferencesType extends EbatNs_ComplexType
{
	// start props
	// @var StoreVacationPreferencesType $VacationPreferences
	var $VacationPreferences;
	// end props

/**
 *

 * @return StoreVacationPreferencesType
 */
	function getVacationPreferences()
	{
		return $this->VacationPreferences;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setVacationPreferences($value)
	{
		$this->VacationPreferences = $value;
	}
/**
 *

 * @return 
 */
	function StorePreferencesType()
	{
		$this->EbatNs_ComplexType('StorePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'VacationPreferences' =>
				array(
					'required' => false,
					'type' => 'StoreVacationPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
