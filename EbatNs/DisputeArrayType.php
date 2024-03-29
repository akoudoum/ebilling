<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'DisputeType.php';

class DisputeArrayType extends EbatNs_ComplexType
{
	// start props
	// @var DisputeType $Dispute
	var $Dispute;
	// end props

/**
 *

 * @return DisputeType
 * @param  $index 
 */
	function getDispute($index = null)
	{
		if ($index) {
		return $this->Dispute[$index];
	} else {
		return $this->Dispute;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDispute($value, $index = null)
	{
		if ($index) {
	$this->Dispute[$index] = $value;
	} else {
	$this->Dispute = $value;
	}

	}
/**
 *

 * @return 
 */
	function DisputeArrayType()
	{
		$this->EbatNs_ComplexType('DisputeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Dispute' =>
				array(
					'required' => false,
					'type' => 'DisputeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
