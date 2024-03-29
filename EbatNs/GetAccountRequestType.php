<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginationType.php';
require_once 'AccountEntrySortTypeCodeType.php';
require_once 'AccountHistorySelectionCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'CurrencyCodeType.php';

class GetAccountRequestType extends AbstractRequestType
{
	// start props
	// @var AccountHistorySelectionCodeType $AccountHistorySelection
	var $AccountHistorySelection;
	// @var dateTime $InvoiceDate
	var $InvoiceDate;
	// @var dateTime $BeginDate
	var $BeginDate;
	// @var dateTime $EndDate
	var $EndDate;
	// @var PaginationType $Pagination
	var $Pagination;
	// @var boolean $ExcludeBalance
	var $ExcludeBalance;
	// @var boolean $ExcludeSummary
	var $ExcludeSummary;
	// @var AccountEntrySortTypeCodeType $AccountEntrySortType
	var $AccountEntrySortType;
	// @var CurrencyCodeType $Currency
	var $Currency;
	// end props

/**
 *

 * @return AccountHistorySelectionCodeType
 */
	function getAccountHistorySelection()
	{
		return $this->AccountHistorySelection;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAccountHistorySelection($value)
	{
		$this->AccountHistorySelection = $value;
	}
/**
 *

 * @return dateTime
 */
	function getInvoiceDate()
	{
		return $this->InvoiceDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInvoiceDate($value)
	{
		$this->InvoiceDate = $value;
	}
/**
 *

 * @return dateTime
 */
	function getBeginDate()
	{
		return $this->BeginDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBeginDate($value)
	{
		$this->BeginDate = $value;
	}
/**
 *

 * @return dateTime
 */
	function getEndDate()
	{
		return $this->EndDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndDate($value)
	{
		$this->EndDate = $value;
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

 * @return boolean
 */
	function getExcludeBalance()
	{
		return $this->ExcludeBalance;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExcludeBalance($value)
	{
		$this->ExcludeBalance = $value;
	}
/**
 *

 * @return boolean
 */
	function getExcludeSummary()
	{
		return $this->ExcludeSummary;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExcludeSummary($value)
	{
		$this->ExcludeSummary = $value;
	}
/**
 *

 * @return AccountEntrySortTypeCodeType
 */
	function getAccountEntrySortType()
	{
		return $this->AccountEntrySortType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAccountEntrySortType($value)
	{
		$this->AccountEntrySortType = $value;
	}
/**
 *

 * @return CurrencyCodeType
 */
	function getCurrency()
	{
		return $this->Currency;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCurrency($value)
	{
		$this->Currency = $value;
	}
/**
 *

 * @return 
 */
	function GetAccountRequestType()
	{
		$this->AbstractRequestType('GetAccountRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AccountHistorySelection' =>
				array(
					'required' => false,
					'type' => 'AccountHistorySelectionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BeginDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndDate' =>
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
				),
				'ExcludeBalance' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExcludeSummary' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AccountEntrySortType' =>
				array(
					'required' => false,
					'type' => 'AccountEntrySortTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Currency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
