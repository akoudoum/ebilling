<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'ExpressHistogramDepartmentType.php';

class DomainHistogramType extends EbatNs_ComplexType
{
	// start props
	// @var ExpressHistogramDepartmentType $Department
	var $Department;
	// end props

/**
 *

 * @return ExpressHistogramDepartmentType
 * @param  $index 
 */
	function getDepartment($index = null)
	{
		if ($index) {
		return $this->Department[$index];
	} else {
		return $this->Department;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDepartment($value, $index = null)
	{
		if ($index) {
	$this->Department[$index] = $value;
	} else {
	$this->Department = $value;
	}

	}
/**
 *

 * @return 
 */
	function DomainHistogramType()
	{
		$this->EbatNs_ComplexType('DomainHistogramType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Department' =>
				array(
					'required' => false,
					'type' => 'ExpressHistogramDepartmentType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
