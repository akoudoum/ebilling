<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ASQPreferencesType.php';
require_once 'AbstractResponseType.php';

class GetMessagePreferencesResponseType extends AbstractResponseType
{
	// start props
	// @var ASQPreferencesType $ASQPreferences
	var $ASQPreferences;
	// end props

/**
 *

 * @return ASQPreferencesType
 */
	function getASQPreferences()
	{
		return $this->ASQPreferences;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setASQPreferences($value)
	{
		$this->ASQPreferences = $value;
	}
/**
 *

 * @return 
 */
	function GetMessagePreferencesResponseType()
	{
		$this->AbstractResponseType('GetMessagePreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ASQPreferences' =>
				array(
					'required' => false,
					'type' => 'ASQPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
