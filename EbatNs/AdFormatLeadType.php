<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'MemberMessageExchangeArrayType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AdFormatLeadStatusCodeType.php';
require_once 'AddressType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';

class AdFormatLeadType extends EbatNs_ComplexType
{
	// start props
	// @var string $AdditionalInformation
	var $AdditionalInformation;
	// @var AddressType $Address
	var $Address;
	// @var string $BestTimeToCall
	var $BestTimeToCall;
	// @var string $Email
	var $Email;
	// @var string $FirstName
	var $FirstName;
	// @var string $LastName
	var $LastName;
	// @var string $Phone
	var $Phone;
	// @var dateTime $SubmittedTime
	var $SubmittedTime;
	// @var ItemIDType $ItemID
	var $ItemID;
	// @var string $ItemTitle
	var $ItemTitle;
	// @var UserIDType $UserID
	var $UserID;
	// @var MemberMessageExchangeArrayType $MemberMessage
	var $MemberMessage;
	// @var AdFormatLeadStatusCodeType $Status
	var $Status;
	// @var string $Phone2
	var $Phone2;
	// @var AmountType $LeadFee
	var $LeadFee;
	// end props

/**
 *

 * @return string
 */
	function getAdditionalInformation()
	{
		return $this->AdditionalInformation;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAdditionalInformation($value)
	{
		$this->AdditionalInformation = $value;
	}
/**
 *

 * @return AddressType
 */
	function getAddress()
	{
		return $this->Address;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAddress($value)
	{
		$this->Address = $value;
	}
/**
 *

 * @return string
 */
	function getBestTimeToCall()
	{
		return $this->BestTimeToCall;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBestTimeToCall($value)
	{
		$this->BestTimeToCall = $value;
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

 * @return string
 */
	function getFirstName()
	{
		return $this->FirstName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFirstName($value)
	{
		$this->FirstName = $value;
	}
/**
 *

 * @return string
 */
	function getLastName()
	{
		return $this->LastName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLastName($value)
	{
		$this->LastName = $value;
	}
/**
 *

 * @return string
 */
	function getPhone()
	{
		return $this->Phone;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPhone($value)
	{
		$this->Phone = $value;
	}
/**
 *

 * @return dateTime
 */
	function getSubmittedTime()
	{
		return $this->SubmittedTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSubmittedTime($value)
	{
		$this->SubmittedTime = $value;
	}
/**
 *

 * @return ItemIDType
 */
	function getItemID()
	{
		return $this->ItemID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
/**
 *

 * @return string
 */
	function getItemTitle()
	{
		return $this->ItemTitle;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemTitle($value)
	{
		$this->ItemTitle = $value;
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

 * @return MemberMessageExchangeArrayType
 */
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}
/**
 *

 * @return AdFormatLeadStatusCodeType
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
	function getPhone2()
	{
		return $this->Phone2;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPhone2($value)
	{
		$this->Phone2 = $value;
	}
/**
 *

 * @return AmountType
 */
	function getLeadFee()
	{
		return $this->LeadFee;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLeadFee($value)
	{
		$this->LeadFee = $value;
	}
/**
 *

 * @return 
 */
	function AdFormatLeadType()
	{
		$this->EbatNs_ComplexType('AdFormatLeadType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'AdditionalInformation' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Address' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestTimeToCall' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'FirstName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Phone' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubmittedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemTitle' =>
				array(
					'required' => false,
					'type' => 'string',
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
				),
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageExchangeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'AdFormatLeadStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Phone2' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LeadFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
