<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractRequestType.php';

class GetStoreCustomPageRequestType extends AbstractRequestType
{
	// start props
	// @var long $PageID
	var $PageID;
	// end props

/**
 *

 * @return long
 */
	function getPageID()
	{
		return $this->PageID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPageID($value)
	{
		$this->PageID = $value;
	}
/**
 *

 * @return 
 */
	function GetStoreCustomPageRequestType()
	{
		$this->AbstractRequestType('GetStoreCustomPageRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PageID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
