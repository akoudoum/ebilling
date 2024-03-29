<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'AbstractRequestType.php';

class GetStoreRequestType extends AbstractRequestType
{
	// start props
	// @var boolean $CategoryStructureOnly
	var $CategoryStructureOnly;
	// @var long $RootCategoryID
	var $RootCategoryID;
	// @var int $LevelLimit
	var $LevelLimit;
	// @var UserIDType $UserID
	var $UserID;
	// end props

/**
 *

 * @return boolean
 */
	function getCategoryStructureOnly()
	{
		return $this->CategoryStructureOnly;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCategoryStructureOnly($value)
	{
		$this->CategoryStructureOnly = $value;
	}
/**
 *

 * @return long
 */
	function getRootCategoryID()
	{
		return $this->RootCategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRootCategoryID($value)
	{
		$this->RootCategoryID = $value;
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

 * @return 
 */
	function GetStoreRequestType()
	{
		$this->AbstractRequestType('GetStoreRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CategoryStructureOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RootCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LevelLimit' =>
				array(
					'required' => false,
					'type' => 'int',
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
				)
			));

	}
}
?>
