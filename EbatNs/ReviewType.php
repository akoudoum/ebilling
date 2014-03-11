<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'EbatNs_ComplexType.php';

class ReviewType extends EbatNs_ComplexType
{
	// start props
	// @var anyURI $URL
	var $URL;
	// @var string $Title
	var $Title;
	// @var int $Rating
	var $Rating;
	// @var string $Text
	var $Text;
	// @var UserIDType $UserID
	var $UserID;
	// @var dateTime $CreationTime
	var $CreationTime;
	// end props

/**
 *

 * @return anyURI
 */
	function getURL()
	{
		return $this->URL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setURL($value)
	{
		$this->URL = $value;
	}
/**
 *

 * @return string
 */
	function getTitle()
	{
		return $this->Title;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
/**
 *

 * @return int
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

 * @return string
 */
	function getText()
	{
		return $this->Text;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setText($value)
	{
		$this->Text = $value;
	}
/**
 *

 * @return UserIDType
 */
	function getUserID()
	{
		return $this->UserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
/**
 *

 * @return dateTime
 */
	function getCreationTime()
	{
		return $this->CreationTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCreationTime($value)
	{
		$this->CreationTime = $value;
	}
/**
 *

 * @return 
 */
	function ReviewType()
	{
		$this->EbatNs_ComplexType('ReviewType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'URL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Rating' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Text' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
