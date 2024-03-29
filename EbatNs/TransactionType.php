<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'TransactionPlatformCodeType.php';
require_once 'FeedbackInfoType.php';
require_once 'RefundArrayType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'ListingCheckoutRedirectPreferenceType.php';
require_once 'OrderType.php';
require_once 'ShippingDetailsType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'TransactionPlatformType.php';
require_once 'TransactionStatusType.php';
require_once 'SiteCodeType.php';
require_once 'UserType.php';
require_once 'PaidStatusCodeType.php';
require_once 'AmountType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ExternalTransactionType.php';
require_once 'ItemType.php';
require_once 'DepositTypeCodeType.php';

class TransactionType extends EbatNs_ComplexType
{
	// start props
	// @var AmountType $AmountPaid
	var $AmountPaid;
	// @var AmountType $AdjustmentAmount
	var $AdjustmentAmount;
	// @var AmountType $ConvertedAdjustmentAmount
	var $ConvertedAdjustmentAmount;
	// @var UserType $Buyer
	var $Buyer;
	// @var ShippingDetailsType $ShippingDetails
	var $ShippingDetails;
	// @var AmountType $ConvertedAmountPaid
	var $ConvertedAmountPaid;
	// @var AmountType $ConvertedTransactionPrice
	var $ConvertedTransactionPrice;
	// @var dateTime $CreatedDate
	var $CreatedDate;
	// @var DepositTypeCodeType $DepositType
	var $DepositType;
	// @var ItemType $Item
	var $Item;
	// @var int $QuantityPurchased
	var $QuantityPurchased;
	// @var TransactionStatusType $Status
	var $Status;
	// @var string $TransactionID
	var $TransactionID;
	// @var AmountType $TransactionPrice
	var $TransactionPrice;
	// @var boolean $BestOfferSale
	var $BestOfferSale;
	// @var decimal $VATPercent
	var $VATPercent;
	// @var ExternalTransactionType $ExternalTransaction
	var $ExternalTransaction;
	// @var SellingManagerProductDetailsType $SellingManagerProductDetails
	var $SellingManagerProductDetails;
	// @var ShippingServiceOptionsType $ShippingServiceSelected
	var $ShippingServiceSelected;
	// @var string $BuyerMessage
	var $BuyerMessage;
	// @var AmountType $DutchAuctionBid
	var $DutchAuctionBid;
	// @var PaidStatusCodeType $BuyerPaidStatus
	var $BuyerPaidStatus;
	// @var PaidStatusCodeType $SellerPaidStatus
	var $SellerPaidStatus;
	// @var dateTime $PaidTime
	var $PaidTime;
	// @var dateTime $ShippedTime
	var $ShippedTime;
	// @var AmountType $TotalPrice
	var $TotalPrice;
	// @var FeedbackInfoType $FeedbackLeft
	var $FeedbackLeft;
	// @var FeedbackInfoType $FeedbackReceived
	var $FeedbackReceived;
	// @var OrderType $ContainingOrder
	var $ContainingOrder;
	// @var AmountType $FinalValueFee
	var $FinalValueFee;
	// @var TransactionPlatformType $TransactionPlatform
	var $TransactionPlatform;
	// @var ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
	var $ListingCheckoutRedirectPreference;
	// @var RefundArrayType $RefundArray
	var $RefundArray;
	// @var SiteCodeType $TransactionSiteID
	var $TransactionSiteID;
	// @var TransactionPlatformCodeType $Platform
	var $Platform;
	// @var string $CartID
	var $CartID;
	// @var boolean $SellerContactBuyerByEmail
	var $SellerContactBuyerByEmail;
	// end props

/**
 *

 * @return AmountType
 */
	function getAmountPaid()
	{
		return $this->AmountPaid;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAmountPaid($value)
	{
		$this->AmountPaid = $value;
	}
/**
 *

 * @return AmountType
 */
	function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAdjustmentAmount($value)
	{
		$this->AdjustmentAmount = $value;
	}
/**
 *

 * @return AmountType
 */
	function getConvertedAdjustmentAmount()
	{
		return $this->ConvertedAdjustmentAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setConvertedAdjustmentAmount($value)
	{
		$this->ConvertedAdjustmentAmount = $value;
	}
/**
 *

 * @return UserType
 */
	function getBuyer()
	{
		return $this->Buyer;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyer($value)
	{
		$this->Buyer = $value;
	}
/**
 *

 * @return ShippingDetailsType
 */
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}
/**
 *

 * @return AmountType
 */
	function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setConvertedAmountPaid($value)
	{
		$this->ConvertedAmountPaid = $value;
	}
/**
 *

 * @return AmountType
 */
	function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setConvertedTransactionPrice($value)
	{
		$this->ConvertedTransactionPrice = $value;
	}
/**
 *

 * @return dateTime
 */
	function getCreatedDate()
	{
		return $this->CreatedDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCreatedDate($value)
	{
		$this->CreatedDate = $value;
	}
/**
 *

 * @return DepositTypeCodeType
 */
	function getDepositType()
	{
		return $this->DepositType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDepositType($value)
	{
		$this->DepositType = $value;
	}
/**
 *

 * @return ItemType
 */
	function getItem()
	{
		return $this->Item;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItem($value)
	{
		$this->Item = $value;
	}
/**
 *

 * @return int
 */
	function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setQuantityPurchased($value)
	{
		$this->QuantityPurchased = $value;
	}
/**
 *

 * @return TransactionStatusType
 */
	function getStatus()
	{
		return $this->Status;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
/**
 *

 * @return string
 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransactionPrice($value)
	{
		$this->TransactionPrice = $value;
	}
/**
 *

 * @return boolean
 */
	function getBestOfferSale()
	{
		return $this->BestOfferSale;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBestOfferSale($value)
	{
		$this->BestOfferSale = $value;
	}
/**
 *

 * @return decimal
 */
	function getVATPercent()
	{
		return $this->VATPercent;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}
/**
 *

 * @return ExternalTransactionType
 * @param  $index 
 */
	function getExternalTransaction($index = null)
	{
		if ($index) {
		return $this->ExternalTransaction[$index];
	} else {
		return $this->ExternalTransaction;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setExternalTransaction($value, $index = null)
	{
		if ($index) {
	$this->ExternalTransaction[$index] = $value;
	} else {
	$this->ExternalTransaction = $value;
	}

	}
/**
 *

 * @return SellingManagerProductDetailsType
 */
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}
/**
 *

 * @return ShippingServiceOptionsType
 */
	function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippingServiceSelected($value)
	{
		$this->ShippingServiceSelected = $value;
	}
/**
 *

 * @return string
 */
	function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyerMessage($value)
	{
		$this->BuyerMessage = $value;
	}
/**
 *

 * @return AmountType
 */
	function getDutchAuctionBid()
	{
		return $this->DutchAuctionBid;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setDutchAuctionBid($value)
	{
		$this->DutchAuctionBid = $value;
	}
/**
 *

 * @return PaidStatusCodeType
 */
	function getBuyerPaidStatus()
	{
		return $this->BuyerPaidStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyerPaidStatus($value)
	{
		$this->BuyerPaidStatus = $value;
	}
/**
 *

 * @return PaidStatusCodeType
 */
	function getSellerPaidStatus()
	{
		return $this->SellerPaidStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellerPaidStatus($value)
	{
		$this->SellerPaidStatus = $value;
	}
/**
 *

 * @return dateTime
 */
	function getPaidTime()
	{
		return $this->PaidTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaidTime($value)
	{
		$this->PaidTime = $value;
	}
/**
 *

 * @return dateTime
 */
	function getShippedTime()
	{
		return $this->ShippedTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setShippedTime($value)
	{
		$this->ShippedTime = $value;
	}
/**
 *

 * @return AmountType
 */
	function getTotalPrice()
	{
		return $this->TotalPrice;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTotalPrice($value)
	{
		$this->TotalPrice = $value;
	}
/**
 *

 * @return FeedbackInfoType
 */
	function getFeedbackLeft()
	{
		return $this->FeedbackLeft;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackLeft($value)
	{
		$this->FeedbackLeft = $value;
	}
/**
 *

 * @return FeedbackInfoType
 */
	function getFeedbackReceived()
	{
		return $this->FeedbackReceived;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackReceived($value)
	{
		$this->FeedbackReceived = $value;
	}
/**
 *

 * @return OrderType
 */
	function getContainingOrder()
	{
		return $this->ContainingOrder;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setContainingOrder($value)
	{
		$this->ContainingOrder = $value;
	}
/**
 *

 * @return AmountType
 */
	function getFinalValueFee()
	{
		return $this->FinalValueFee;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFinalValueFee($value)
	{
		$this->FinalValueFee = $value;
	}
/**
 *

 * @return TransactionPlatformType
 */
	function getTransactionPlatform()
	{
		return $this->TransactionPlatform;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransactionPlatform($value)
	{
		$this->TransactionPlatform = $value;
	}
/**
 *

 * @return ListingCheckoutRedirectPreferenceType
 */
	function getListingCheckoutRedirectPreference()
	{
		return $this->ListingCheckoutRedirectPreference;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setListingCheckoutRedirectPreference($value)
	{
		$this->ListingCheckoutRedirectPreference = $value;
	}
/**
 *

 * @return RefundArrayType
 */
	function getRefundArray()
	{
		return $this->RefundArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRefundArray($value)
	{
		$this->RefundArray = $value;
	}
/**
 *

 * @return SiteCodeType
 */
	function getTransactionSiteID()
	{
		return $this->TransactionSiteID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransactionSiteID($value)
	{
		$this->TransactionSiteID = $value;
	}
/**
 *

 * @return TransactionPlatformCodeType
 */
	function getPlatform()
	{
		return $this->Platform;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPlatform($value)
	{
		$this->Platform = $value;
	}
/**
 *

 * @return string
 */
	function getCartID()
	{
		return $this->CartID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCartID($value)
	{
		$this->CartID = $value;
	}
/**
 *

 * @return boolean
 */
	function getSellerContactBuyerByEmail()
	{
		return $this->SellerContactBuyerByEmail;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSellerContactBuyerByEmail($value)
	{
		$this->SellerContactBuyerByEmail = $value;
	}
/**
 *

 * @return 
 */
	function TransactionType()
	{
		$this->EbatNs_ComplexType('TransactionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedAdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Buyer' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedAmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedTransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatedDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DepositType' =>
				array(
					'required' => false,
					'type' => 'DepositTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityPurchased' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'TransactionStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferSale' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATPercent' =>
				array(
					'required' => false,
					'type' => 'decimal',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransaction' =>
				array(
					'required' => false,
					'type' => 'ExternalTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceSelected' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceOptionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DutchAuctionBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerPaidStatus' =>
				array(
					'required' => false,
					'type' => 'PaidStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaidStatus' =>
				array(
					'required' => false,
					'type' => 'PaidStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaidTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackLeft' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackReceived' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContainingOrder' =>
				array(
					'required' => false,
					'type' => 'OrderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FinalValueFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPlatform' =>
				array(
					'required' => false,
					'type' => 'TransactionPlatformType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingCheckoutRedirectPreference' =>
				array(
					'required' => false,
					'type' => 'ListingCheckoutRedirectPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundArray' =>
				array(
					'required' => false,
					'type' => 'RefundArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionSiteID' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Platform' =>
				array(
					'required' => false,
					'type' => 'TransactionPlatformCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CartID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerContactBuyerByEmail' =>
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
