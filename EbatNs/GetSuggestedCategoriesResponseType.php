<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractResponseType.php';
require_once 'SuggestedCategoryArrayType.php';

class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
	// start props
	// @var SuggestedCategoryArrayType $SuggestedCategoryArray
	var $SuggestedCategoryArray;
	// @var int $CategoryCount
	var $CategoryCount;
	// end props

/**
 *

 * @return SuggestedCategoryArrayType
 */
	function getSuggestedCategoryArray()
	{
		return $this->SuggestedCategoryArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSuggestedCategoryArray($value)
	{
		$this->SuggestedCategoryArray = $value;
	}
/**
 *

 * @return int
 */
	function getCategoryCount()
	{
		return $this->CategoryCount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategoryCount($value)
	{
		$this->CategoryCount = $value;
	}
/**
 *

 * @return 
 */
	function GetSuggestedCategoriesResponseType()
	{
		$this->AbstractResponseType('GetSuggestedCategoriesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SuggestedCategoryArray' =>
				array(
					'required' => false,
					'type' => 'SuggestedCategoryArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryCount' =>
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
