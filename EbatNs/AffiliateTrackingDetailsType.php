<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ApplicationDeviceTypeCodeType.php';

class AffiliateTrackingDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var string $TrackingID
	var $TrackingID;
	// @var string $TrackingPartnerCode
	var $TrackingPartnerCode;
	// @var ApplicationDeviceTypeCodeType $ApplicationDeviceType
	var $ApplicationDeviceType;
	// @var string $AffiliateUserID
	var $AffiliateUserID;
	// end props

/**
 *

 * @return string
 */
	function getTrackingID()
	{
		return $this->TrackingID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTrackingID($value)
	{
		$this->TrackingID = $value;
	}
/**
 *

 * @return string
 */
	function getTrackingPartnerCode()
	{
		return $this->TrackingPartnerCode;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTrackingPartnerCode($value)
	{
		$this->TrackingPartnerCode = $value;
	}
/**
 *

 * @return ApplicationDeviceTypeCodeType
 */
	function getApplicationDeviceType()
	{
		return $this->ApplicationDeviceType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setApplicationDeviceType($value)
	{
		$this->ApplicationDeviceType = $value;
	}
/**
 *

 * @return string
 */
	function getAffiliateUserID()
	{
		return $this->AffiliateUserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAffiliateUserID($value)
	{
		$this->AffiliateUserID = $value;
	}
/**
 *

 * @return 
 */
	function AffiliateTrackingDetailsType()
	{
		$this->EbatNs_ComplexType('AffiliateTrackingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'TrackingID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TrackingPartnerCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ApplicationDeviceType' =>
				array(
					'required' => false,
					'type' => 'ApplicationDeviceTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AffiliateUserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
