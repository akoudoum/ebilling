<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'MyeBayFavoriteSellerType.php';

class MyeBayFavoriteSellerListType extends EbatNs_ComplexType
{
	// start props
	// @var int $TotalAvailable
	var $TotalAvailable;
	// @var MyeBayFavoriteSellerType $FavoriteSeller
	var $FavoriteSeller;
	// end props

/**
 *

 * @return int
 */
	function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalAvailable($value)
	{
		$this->TotalAvailable = $value;
	}
/**
 *

 * @return MyeBayFavoriteSellerType
 * @param  $index 
 */
	function getFavoriteSeller($index = null)
	{
		if ($index) {
		return $this->FavoriteSeller[$index];
	} else {
		return $this->FavoriteSeller;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFavoriteSeller($value, $index = null)
	{
		if ($index) {
	$this->FavoriteSeller[$index] = $value;
	} else {
	$this->FavoriteSeller = $value;
	}

	}
/**
 *

 * @return 
 */
	function MyeBayFavoriteSellerListType()
	{
		$this->EbatNs_ComplexType('MyeBayFavoriteSellerListType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'TotalAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSeller' =>
				array(
					'required' => false,
					'type' => 'MyeBayFavoriteSellerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
