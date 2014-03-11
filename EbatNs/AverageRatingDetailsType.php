<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'FeedbackRatingDetailCodeType.php';
require_once 'EbatNs_ComplexType.php';

class AverageRatingDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var FeedbackRatingDetailCodeType $RatingDetail
	var $RatingDetail;
	// @var double $Rating
	var $Rating;
	// @var int $RatingCount
	var $RatingCount;
	// end props

/**
 *

 * @return FeedbackRatingDetailCodeType
 */
	function getRatingDetail()
	{
		return $this->RatingDetail;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRatingDetail($value)
	{
		$this->RatingDetail = $value;
	}
/**
 *

 * @return double
 */
	function getRating()
	{
		return $this->Rating;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRating($value)
	{
		$this->Rating = $value;
	}
/**
 *

 * @return int
 */
	function getRatingCount()
	{
		return $this->RatingCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRatingCount($value)
	{
		$this->RatingCount = $value;
	}
/**
 *

 * @return 
 */
	function AverageRatingDetailsType()
	{
		$this->EbatNs_ComplexType('AverageRatingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'RatingDetail' =>
				array(
					'required' => false,
					'type' => 'FeedbackRatingDetailCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Rating' =>
				array(
					'required' => false,
					'type' => 'double',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RatingCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
