<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'SellerPaymentMethodCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AccountStateCodeType.php';
require_once 'AdditionalAccountType.php';
require_once 'AmountType.php';

class AccountSummaryType extends EbatNs_ComplexType
{
	// start props
	// @var AccountStateCodeType $AccountState
	var $AccountState;
	// @var AmountType $InvoicePayment
	var $InvoicePayment;
	// @var AmountType $InvoiceCredit
	var $InvoiceCredit;
	// @var AmountType $InvoiceNewFee
	var $InvoiceNewFee;
	// @var AdditionalAccountType $AdditionalAccount
	var $AdditionalAccount;
	// @var AmountType $AmountPastDue
	var $AmountPastDue;
	// @var string $BankAccountInfo
	var $BankAccountInfo;
	// @var dateTime $BankModifyDate
	var $BankModifyDate;
	// @var int $BillingCycleDate
	var $BillingCycleDate;
	// @var dateTime $CreditCardExpiration
	var $CreditCardExpiration;
	// @var string $CreditCardInfo
	var $CreditCardInfo;
	// @var dateTime $CreditCardModifyDate
	var $CreditCardModifyDate;
	// @var AmountType $CurrentBalance
	var $CurrentBalance;
	// @var string $Email
	var $Email;
	// @var AmountType $InvoiceBalance
	var $InvoiceBalance;
	// @var dateTime $InvoiceDate
	var $InvoiceDate;
	// @var AmountType $LastAmountPaid
	var $LastAmountPaid;
	// @var dateTime $LastPaymentDate
	var $LastPaymentDate;
	// @var boolean $PastDue
	var $PastDue;
	// @var SellerPaymentMethodCodeType $PaymentMethod
	var $PaymentMethod;
	// end props

/**
 *

 * @return AccountStateCodeType
 */
	function getAccountState()
	{
		return $this->AccountState;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAccountState($value)
	{
		$this->AccountState = $value;
	}
/**
 *

 * @return AmountType
 */
	function getInvoicePayment()
	{
		return $this->InvoicePayment;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInvoicePayment($value)
	{
		$this->InvoicePayment = $value;
	}
/**
 *

 * @return AmountType
 */
	function getInvoiceCredit()
	{
		return $this->InvoiceCredit;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInvoiceCredit($value)
	{
		$this->InvoiceCredit = $value;
	}
/**
 *

 * @return AmountType
 */
	function getInvoiceNewFee()
	{
		return $this->InvoiceNewFee;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInvoiceNewFee($value)
	{
		$this->InvoiceNewFee = $value;
	}
/**
 *

 * @return AdditionalAccountType
 * @param  $index 
 */
	function getAdditionalAccount($index = null)
	{
		if ($index) {
		return $this->AdditionalAccount[$index];
	} else {
		return $this->AdditionalAccount;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setAdditionalAccount($value, $index = null)
	{
		if ($index) {
	$this->AdditionalAccount[$index] = $value;
	} else {
	$this->AdditionalAccount = $value;
	}

	}
/**
 *

 * @return AmountType
 */
	function getAmountPastDue()
	{
		return $this->AmountPastDue;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAmountPastDue($value)
	{
		$this->AmountPastDue = $value;
	}
/**
 *

 * @return string
 */
	function getBankAccountInfo()
	{
		return $this->BankAccountInfo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBankAccountInfo($value)
	{
		$this->BankAccountInfo = $value;
	}
/**
 *

 * @return dateTime
 */
	function getBankModifyDate()
	{
		return $this->BankModifyDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBankModifyDate($value)
	{
		$this->BankModifyDate = $value;
	}
/**
 *

 * @return int
 */
	function getBillingCycleDate()
	{
		return $this->BillingCycleDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBillingCycleDate($value)
	{
		$this->BillingCycleDate = $value;
	}
/**
 *

 * @return dateTime
 */
	function getCreditCardExpiration()
	{
		return $this->CreditCardExpiration;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCreditCardExpiration($value)
	{
		$this->CreditCardExpiration = $value;
	}
/**
 *

 * @return string
 */
	function getCreditCardInfo()
	{
		return $this->CreditCardInfo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCreditCardInfo($value)
	{
		$this->CreditCardInfo = $value;
	}
/**
 *

 * @return dateTime
 */
	function getCreditCardModifyDate()
	{
		return $this->CreditCardModifyDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCreditCardModifyDate($value)
	{
		$this->CreditCardModifyDate = $value;
	}
/**
 *

 * @return AmountType
 */
	function getCurrentBalance()
	{
		return $this->CurrentBalance;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCurrentBalance($value)
	{
		$this->CurrentBalance = $value;
	}
/**
 *

 * @return string
 */
	function getEmail()
	{
		return $this->Email;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEmail($value)
	{
		$this->Email = $value;
	}
/**
 *

 * @return AmountType
 */
	function getInvoiceBalance()
	{
		return $this->InvoiceBalance;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setInvoiceBalance($value)
	{
		$this->InvoiceBalance = $value;
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

 * @return AmountType
 */
	function getLastAmountPaid()
	{
		return $this->LastAmountPaid;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLastAmountPaid($value)
	{
		$this->LastAmountPaid = $value;
	}
/**
 *

 * @return dateTime
 */
	function getLastPaymentDate()
	{
		return $this->LastPaymentDate;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLastPaymentDate($value)
	{
		$this->LastPaymentDate = $value;
	}
/**
 *

 * @return boolean
 */
	function getPastDue()
	{
		return $this->PastDue;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPastDue($value)
	{
		$this->PastDue = $value;
	}
/**
 *

 * @return SellerPaymentMethodCodeType
 */
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}
/**
 *

 * @return 
 */
	function AccountSummaryType()
	{
		$this->EbatNs_ComplexType('AccountSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AccountState' =>
				array(
					'required' => false,
					'type' => 'AccountStateCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoicePayment' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceCredit' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceNewFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdditionalAccount' =>
				array(
					'required' => false,
					'type' => 'AdditionalAccountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'AmountPastDue' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BankAccountInfo' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BankModifyDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BillingCycleDate' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreditCardExpiration' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreditCardInfo' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreditCardModifyDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CurrentBalance' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Email' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceBalance' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
				'LastAmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastPaymentDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PastDue' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethod' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
