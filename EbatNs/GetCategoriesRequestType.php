<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractRequestType.php';

class GetCategoriesRequestType extends AbstractRequestType
{
	// start props
	// @var string $CategorySiteID
	var $CategorySiteID;
	// @var string $CategoryParent
	var $CategoryParent;
	// @var int $LevelLimit
	var $LevelLimit;
	// @var boolean $ViewAllNodes
	var $ViewAllNodes;
	// end props

/**
 *

 * @return string
 */
	function getCategorySiteID()
	{
		return $this->CategorySiteID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategorySiteID($value)
	{
		$this->CategorySiteID = $value;
	}
/**
 *

 * @return string
 * @param  $index 
 */
	function getCategoryParent($index = null)
	{
		if ($index) {
		return $this->CategoryParent[$index];
	} else {
		return $this->CategoryParent;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCategoryParent($value, $index = null)
	{
		if ($index) {
	$this->CategoryParent[$index] = $value;
	} else {
	$this->CategoryParent = $value;
	}

	}
/**
 *

 * @return int
 */
	function getLevelLimit()
	{
		return $this->LevelLimit;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLevelLimit($value)
	{
		$this->LevelLimit = $value;
	}
/**
 *

 * @return boolean
 */
	function getViewAllNodes()
	{
		return $this->ViewAllNodes;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setViewAllNodes($value)
	{
		$this->ViewAllNodes = $value;
	}
/**
 *

 * @return 
 */
	function GetCategoriesRequestType()
	{
		$this->AbstractRequestType('GetCategoriesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CategorySiteID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryParent' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'LevelLimit' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ViewAllNodes' =>
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
