<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginationType.php';
require_once 'DisputeFilterTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'DisputeSortTypeCodeType.php';

class GetUserDisputesRequestType extends AbstractRequestType
{
	// start props
	// @var DisputeFilterTypeCodeType $DisputeFilterType
	var $DisputeFilterType;
	// @var DisputeSortTypeCodeType $DisputeSortType
	var $DisputeSortType;
	// @var dateTime $ModTimeFrom
	var $ModTimeFrom;
	// @var dateTime $ModTimeTo
	var $ModTimeTo;
	// @var PaginationType $Pagination
	var $Pagination;
	// end props

/**
 *

 * @return DisputeFilterTypeCodeType
 */
	function getDisputeFilterType()
	{
		return $this->DisputeFilterType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisputeFilterType($value)
	{
		$this->DisputeFilterType = $value;
	}
/**
 *

 * @return DisputeSortTypeCodeType
 */
	function getDisputeSortType()
	{
		return $this->DisputeSortType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDisputeSortType($value)
	{
		$this->DisputeSortType = $value;
	}
/**
 *

 * @return dateTime
 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
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
	function GetUserDisputesRequestType()
	{
		$this->AbstractRequestType('GetUserDisputesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DisputeFilterType' =>
				array(
					'required' => false,
					'type' => 'DisputeFilterTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeSortType' =>
				array(
					'required' => false,
					'type' => 'DisputeSortTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
