<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemSortFilterCodeType.php';
require_once 'GallerySortFilterCodeType.php';
require_once 'ItemFormatSortFilterCodeType.php';

class CrossPromotionPreferencesType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $CrossPromotionEnabled
	var $CrossPromotionEnabled;
	// @var ItemFormatSortFilterCodeType $CrossSellItemFormatSortFilter
	var $CrossSellItemFormatSortFilter;
	// @var GallerySortFilterCodeType $CrossSellGallerySortFilter
	var $CrossSellGallerySortFilter;
	// @var ItemSortFilterCodeType $CrossSellItemSortFilter
	var $CrossSellItemSortFilter;
	// @var ItemFormatSortFilterCodeType $UpSellItemFormatSortFilter
	var $UpSellItemFormatSortFilter;
	// @var GallerySortFilterCodeType $UpSellGallerySortFilter
	var $UpSellGallerySortFilter;
	// @var ItemSortFilterCodeType $UpSellItemSortFilter
	var $UpSellItemSortFilter;
	// end props

/**
 *

 * @return boolean
 */
	function getCrossPromotionEnabled()
	{
		return $this->CrossPromotionEnabled;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCrossPromotionEnabled($value)
	{
		$this->CrossPromotionEnabled = $value;
	}
/**
 *

 * @return ItemFormatSortFilterCodeType
 */
	function getCrossSellItemFormatSortFilter()
	{
		return $this->CrossSellItemFormatSortFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCrossSellItemFormatSortFilter($value)
	{
		$this->CrossSellItemFormatSortFilter = $value;
	}
/**
 *

 * @return GallerySortFilterCodeType
 */
	function getCrossSellGallerySortFilter()
	{
		return $this->CrossSellGallerySortFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCrossSellGallerySortFilter($value)
	{
		$this->CrossSellGallerySortFilter = $value;
	}
/**
 *

 * @return ItemSortFilterCodeType
 */
	function getCrossSellItemSortFilter()
	{
		return $this->CrossSellItemSortFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCrossSellItemSortFilter($value)
	{
		$this->CrossSellItemSortFilter = $value;
	}
/**
 *

 * @return ItemFormatSortFilterCodeType
 */
	function getUpSellItemFormatSortFilter()
	{
		return $this->UpSellItemFormatSortFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUpSellItemFormatSortFilter($value)
	{
		$this->UpSellItemFormatSortFilter = $value;
	}
/**
 *

 * @return GallerySortFilterCodeType
 */
	function getUpSellGallerySortFilter()
	{
		return $this->UpSellGallerySortFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUpSellGallerySortFilter($value)
	{
		$this->UpSellGallerySortFilter = $value;
	}
/**
 *

 * @return ItemSortFilterCodeType
 */
	function getUpSellItemSortFilter()
	{
		return $this->UpSellItemSortFilter;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUpSellItemSortFilter($value)
	{
		$this->UpSellItemSortFilter = $value;
	}
/**
 *

 * @return 
 */
	function CrossPromotionPreferencesType()
	{
		$this->EbatNs_ComplexType('CrossPromotionPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CrossPromotionEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossSellItemFormatSortFilter' =>
				array(
					'required' => false,
					'type' => 'ItemFormatSortFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossSellGallerySortFilter' =>
				array(
					'required' => false,
					'type' => 'GallerySortFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossSellItemSortFilter' =>
				array(
					'required' => false,
					'type' => 'ItemSortFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpSellItemFormatSortFilter' =>
				array(
					'required' => false,
					'type' => 'ItemFormatSortFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpSellGallerySortFilter' =>
				array(
					'required' => false,
					'type' => 'GallerySortFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpSellItemSortFilter' =>
				array(
					'required' => false,
					'type' => 'ItemSortFilterCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
