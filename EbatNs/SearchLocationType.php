<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'SiteLocationType.php';

class SearchLocationType extends EbatNs_ComplexType
{
	// start props
	// @var string $RegionID
	var $RegionID;
	// @var SiteLocationType $SiteLocation
	var $SiteLocation;
	// end props

/**
 *

 * @return string
 */
	function getRegionID()
	{
		return $this->RegionID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRegionID($value)
	{
		$this->RegionID = $value;
	}
/**
 *

 * @return SiteLocationType
 */
	function getSiteLocation()
	{
		return $this->SiteLocation;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSiteLocation($value)
	{
		$this->SiteLocation = $value;
	}
/**
 *

 * @return 
 */
	function SearchLocationType()
	{
		$this->EbatNs_ComplexType('SearchLocationType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'RegionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SiteLocation' =>
				array(
					'required' => false,
					'type' => 'SiteLocationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
