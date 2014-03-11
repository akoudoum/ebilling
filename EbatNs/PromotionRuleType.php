<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PromotionMethodCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PromotionSchemeCodeType.php';
require_once 'ItemIDType.php';

class PromotionRuleType extends EbatNs_ComplexType
{
	// start props
	// @var long $PromotedStoreCategoryID
	var $PromotedStoreCategoryID;
	// @var string $PromotedeBayCategoryID
	var $PromotedeBayCategoryID;
	// @var string $PromotedKeywords
	var $PromotedKeywords;
	// @var ItemIDType $ReferringItemID
	var $ReferringItemID;
	// @var long $ReferringStoreCategoryID
	var $ReferringStoreCategoryID;
	// @var string $ReferringeBayCategoryID
	var $ReferringeBayCategoryID;
	// @var string $ReferringKeywords
	var $ReferringKeywords;
	// @var PromotionSchemeCodeType $PromotionScheme
	var $PromotionScheme;
	// @var PromotionMethodCodeType $PromotionMethod
	var $PromotionMethod;
	// end props

/**
 *

 * @return long
 */
	function getPromotedStoreCategoryID()
	{
		return $this->PromotedStoreCategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotedStoreCategoryID($value)
	{
		$this->PromotedStoreCategoryID = $value;
	}
/**
 *

 * @return string
 */
	function getPromotedeBayCategoryID()
	{
		return $this->PromotedeBayCategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotedeBayCategoryID($value)
	{
		$this->PromotedeBayCategoryID = $value;
	}
/**
 *

 * @return string
 */
	function getPromotedKeywords()
	{
		return $this->PromotedKeywords;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotedKeywords($value)
	{
		$this->PromotedKeywords = $value;
	}
/**
 *

 * @return ItemIDType
 */
	function getReferringItemID()
	{
		return $this->ReferringItemID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReferringItemID($value)
	{
		$this->ReferringItemID = $value;
	}
/**
 *

 * @return long
 */
	function getReferringStoreCategoryID()
	{
		return $this->ReferringStoreCategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReferringStoreCategoryID($value)
	{
		$this->ReferringStoreCategoryID = $value;
	}
/**
 *

 * @return string
 */
	function getReferringeBayCategoryID()
	{
		return $this->ReferringeBayCategoryID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReferringeBayCategoryID($value)
	{
		$this->ReferringeBayCategoryID = $value;
	}
/**
 *

 * @return string
 */
	function getReferringKeywords()
	{
		return $this->ReferringKeywords;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setReferringKeywords($value)
	{
		$this->ReferringKeywords = $value;
	}
/**
 *

 * @return PromotionSchemeCodeType
 */
	function getPromotionScheme()
	{
		return $this->PromotionScheme;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionScheme($value)
	{
		$this->PromotionScheme = $value;
	}
/**
 *

 * @return PromotionMethodCodeType
 */
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}
/**
 *

 * @return 
 */
	function PromotionRuleType()
	{
		$this->EbatNs_ComplexType('PromotionRuleType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PromotedStoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotedeBayCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotedKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringStoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringeBayCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionScheme' =>
				array(
					'required' => false,
					'type' => 'PromotionSchemeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionMethod' =>
				array(
					'required' => false,
					'type' => 'PromotionMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
