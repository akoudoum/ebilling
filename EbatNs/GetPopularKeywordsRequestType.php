<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';

class GetPopularKeywordsRequestType extends AbstractRequestType
{
	// start props
	// @var string $CategoryID
	var $CategoryID;
	// @var boolean $IncludeChildCategories
	var $IncludeChildCategories;
	// @var int $MaxKeywordsRetrieved
	var $MaxKeywordsRetrieved;
	// @var PaginationType $Pagination
	var $Pagination;
	// end props

/**
 *

 * @return string
 * @param  $index 
 */
	function getCategoryID($index = null)
	{
		if ($index) {
		return $this->CategoryID[$index];
	} else {
		return $this->CategoryID;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCategoryID($value, $index = null)
	{
		if ($index) {
	$this->CategoryID[$index] = $value;
	} else {
	$this->CategoryID = $value;
	}

	}
/**
 *

 * @return boolean
 */
	function getIncludeChildCategories()
	{
		return $this->IncludeChildCategories;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludeChildCategories($value)
	{
		$this->IncludeChildCategories = $value;
	}
/**
 *

 * @return int
 */
	function getMaxKeywordsRetrieved()
	{
		return $this->MaxKeywordsRetrieved;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMaxKeywordsRetrieved($value)
	{
		$this->MaxKeywordsRetrieved = $value;
	}
/**
 *

 * @return PaginationType
 */
	function getPagination()
	{
		return $this->Pagination;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
/**
 *

 * @return 
 */
	function GetPopularKeywordsRequestType()
	{
		$this->AbstractRequestType('GetPopularKeywordsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'IncludeChildCategories' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxKeywordsRetrieved' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
