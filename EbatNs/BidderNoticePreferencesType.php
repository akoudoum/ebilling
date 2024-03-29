<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class BidderNoticePreferencesType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $UnsuccessfulBidderNoticeIncludeMyItems
	var $UnsuccessfulBidderNoticeIncludeMyItems;
	// end props

/**
 *

 * @return boolean
 */
	function getUnsuccessfulBidderNoticeIncludeMyItems()
	{
		return $this->UnsuccessfulBidderNoticeIncludeMyItems;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUnsuccessfulBidderNoticeIncludeMyItems($value)
	{
		$this->UnsuccessfulBidderNoticeIncludeMyItems = $value;
	}
/**
 *

 * @return 
 */
	function BidderNoticePreferencesType()
	{
		$this->EbatNs_ComplexType('BidderNoticePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'UnsuccessfulBidderNoticeIncludeMyItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
