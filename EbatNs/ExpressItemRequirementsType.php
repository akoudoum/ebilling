<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class ExpressItemRequirementsType extends EbatNs_ComplexType
{
	// start props
	// @var boolean $SellerExpressEligible
	var $SellerExpressEligible;
	// @var boolean $ExpressOptOut
	var $ExpressOptOut;
	// @var boolean $ExpressApproved
	var $ExpressApproved;
	// @var boolean $ExpressEligibleListingType
	var $ExpressEligibleListingType;
	// @var boolean $ExpressEnabledCategory
	var $ExpressEnabledCategory;
	// @var boolean $EligiblePayPalAccount
	var $EligiblePayPalAccount;
	// @var boolean $DomesticShippingCost
	var $DomesticShippingCost;
	// @var boolean $EligibleReturnPolicy
	var $EligibleReturnPolicy;
	// @var boolean $Picture
	var $Picture;
	// @var boolean $EligibleItemCondition
	var $EligibleItemCondition;
	// @var boolean $PriceAboveMinimum
	var $PriceAboveMinimum;
	// @var boolean $PriceBelowMaximum
	var $PriceBelowMaximum;
	// @var boolean $EligibleCheckout
	var $EligibleCheckout;
	// @var boolean $NoPreapprovedBidderList
	var $NoPreapprovedBidderList;
	// @var boolean $NoCharity
	var $NoCharity;
	// @var boolean $NoDigitalDelivery
	var $NoDigitalDelivery;
	// @var boolean $CombinedShippingDiscount
	var $CombinedShippingDiscount;
	// @var boolean $ShipFromEligibleCountry
	var $ShipFromEligibleCountry;
	// @var boolean $PayPalAccountAcceptsUnconfirmedAddress
	var $PayPalAccountAcceptsUnconfirmedAddress;
	// end props

/**
 *

 * @return boolean
 */
	function getSellerExpressEligible()
	{
		return $this->SellerExpressEligible;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellerExpressEligible($value)
	{
		$this->SellerExpressEligible = $value;
	}
/**
 *

 * @return boolean
 */
	function getExpressOptOut()
	{
		return $this->ExpressOptOut;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressOptOut($value)
	{
		$this->ExpressOptOut = $value;
	}
/**
 *

 * @return boolean
 */
	function getExpressApproved()
	{
		return $this->ExpressApproved;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressApproved($value)
	{
		$this->ExpressApproved = $value;
	}
/**
 *

 * @return boolean
 */
	function getExpressEligibleListingType()
	{
		return $this->ExpressEligibleListingType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressEligibleListingType($value)
	{
		$this->ExpressEligibleListingType = $value;
	}
/**
 *

 * @return boolean
 */
	function getExpressEnabledCategory()
	{
		return $this->ExpressEnabledCategory;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExpressEnabledCategory($value)
	{
		$this->ExpressEnabledCategory = $value;
	}
/**
 *

 * @return boolean
 */
	function getEligiblePayPalAccount()
	{
		return $this->EligiblePayPalAccount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEligiblePayPalAccount($value)
	{
		$this->EligiblePayPalAccount = $value;
	}
/**
 *

 * @return boolean
 */
	function getDomesticShippingCost()
	{
		return $this->DomesticShippingCost;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDomesticShippingCost($value)
	{
		$this->DomesticShippingCost = $value;
	}
/**
 *

 * @return boolean
 */
	function getEligibleReturnPolicy()
	{
		return $this->EligibleReturnPolicy;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEligibleReturnPolicy($value)
	{
		$this->EligibleReturnPolicy = $value;
	}
/**
 *

 * @return boolean
 */
	function getPicture()
	{
		return $this->Picture;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPicture($value)
	{
		$this->Picture = $value;
	}
/**
 *

 * @return boolean
 */
	function getEligibleItemCondition()
	{
		return $this->EligibleItemCondition;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEligibleItemCondition($value)
	{
		$this->EligibleItemCondition = $value;
	}
/**
 *

 * @return boolean
 */
	function getPriceAboveMinimum()
	{
		return $this->PriceAboveMinimum;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPriceAboveMinimum($value)
	{
		$this->PriceAboveMinimum = $value;
	}
/**
 *

 * @return boolean
 */
	function getPriceBelowMaximum()
	{
		return $this->PriceBelowMaximum;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPriceBelowMaximum($value)
	{
		$this->PriceBelowMaximum = $value;
	}
/**
 *

 * @return boolean
 */
	function getEligibleCheckout()
	{
		return $this->EligibleCheckout;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEligibleCheckout($value)
	{
		$this->EligibleCheckout = $value;
	}
/**
 *

 * @return boolean
 */
	function getNoPreapprovedBidderList()
	{
		return $this->NoPreapprovedBidderList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setNoPreapprovedBidderList($value)
	{
		$this->NoPreapprovedBidderList = $value;
	}
/**
 *

 * @return boolean
 */
	function getNoCharity()
	{
		return $this->NoCharity;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setNoCharity($value)
	{
		$this->NoCharity = $value;
	}
/**
 *

 * @return boolean
 */
	function getNoDigitalDelivery()
	{
		return $this->NoDigitalDelivery;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setNoDigitalDelivery($value)
	{
		$this->NoDigitalDelivery = $value;
	}
/**
 *

 * @return boolean
 */
	function getCombinedShippingDiscount()
	{
		return $this->CombinedShippingDiscount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCombinedShippingDiscount($value)
	{
		$this->CombinedShippingDiscount = $value;
	}
/**
 *

 * @return boolean
 */
	function getShipFromEligibleCountry()
	{
		return $this->ShipFromEligibleCountry;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShipFromEligibleCountry($value)
	{
		$this->ShipFromEligibleCountry = $value;
	}
/**
 *

 * @return boolean
 */
	function getPayPalAccountAcceptsUnconfirmedAddress()
	{
		return $this->PayPalAccountAcceptsUnconfirmedAddress;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPayPalAccountAcceptsUnconfirmedAddress($value)
	{
		$this->PayPalAccountAcceptsUnconfirmedAddress = $value;
	}
/**
 *

 * @return 
 */
	function ExpressItemRequirementsType()
	{
		$this->EbatNs_ComplexType('ExpressItemRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SellerExpressEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressOptOut' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressApproved' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressEligibleListingType' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressEnabledCategory' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligiblePayPalAccount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticShippingCost' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleReturnPolicy' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Picture' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleItemCondition' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PriceAboveMinimum' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PriceBelowMaximum' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleCheckout' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoPreapprovedBidderList' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoCharity' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoDigitalDelivery' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipFromEligibleCountry' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalAccountAcceptsUnconfirmedAddress' =>
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
