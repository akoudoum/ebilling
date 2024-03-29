<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'GalleryTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PictureSourceCodeType.php';
require_once 'PhotoDisplayCodeType.php';

class PictureDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var GalleryTypeCodeType $GalleryType
	var $GalleryType;
	// @var anyURI $GalleryURL
	var $GalleryURL;
	// @var PhotoDisplayCodeType $PhotoDisplay
	var $PhotoDisplay;
	// @var anyURI $PictureURL
	var $PictureURL;
	// @var PictureSourceCodeType $PictureSource
	var $PictureSource;
	// end props

/**
 *

 * @return GalleryTypeCodeType
 */
	function getGalleryType()
	{
		return $this->GalleryType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setGalleryType($value)
	{
		$this->GalleryType = $value;
	}
/**
 *

 * @return anyURI
 */
	function getGalleryURL()
	{
		return $this->GalleryURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setGalleryURL($value)
	{
		$this->GalleryURL = $value;
	}
/**
 *

 * @return PhotoDisplayCodeType
 */
	function getPhotoDisplay()
	{
		return $this->PhotoDisplay;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPhotoDisplay($value)
	{
		$this->PhotoDisplay = $value;
	}
/**
 *

 * @return anyURI
 * @param  $index 
 */
	function getPictureURL($index = null)
	{
		if ($index) {
		return $this->PictureURL[$index];
	} else {
		return $this->PictureURL;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setPictureURL($value, $index = null)
	{
		if ($index) {
	$this->PictureURL[$index] = $value;
	} else {
	$this->PictureURL = $value;
	}

	}
/**
 *

 * @return PictureSourceCodeType
 */
	function getPictureSource()
	{
		return $this->PictureSource;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPictureSource($value)
	{
		$this->PictureSource = $value;
	}
/**
 *

 * @return 
 */
	function PictureDetailsType()
	{
		$this->EbatNs_ComplexType('PictureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'GalleryType' =>
				array(
					'required' => false,
					'type' => 'GalleryTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GalleryURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PhotoDisplay' =>
				array(
					'required' => false,
					'type' => 'PhotoDisplayCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PictureSource' =>
				array(
					'required' => false,
					'type' => 'PictureSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
