<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'SiteIDFilterCodeType.php';

class SiteLocationType extends EbatNs_ComplexType
{
	// start props
	// @var SiteIDFilterCodeType $SiteID
	var $SiteID;
	// end props

/**
 *

 * @return SiteIDFilterCodeType
 */
	function getSiteID()
	{
		return $this->SiteID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSiteID($value)
	{
		$this->SiteID = $value;
	}
/**
 *

 * @return 
 */
	function SiteLocationType()
	{
		$this->EbatNs_ComplexType('SiteLocationType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SiteID' =>
				array(
					'required' => false,
					'type' => 'SiteIDFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
