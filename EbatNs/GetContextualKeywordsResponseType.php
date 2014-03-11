<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ContextSearchAssetType.php';
require_once 'AbstractResponseType.php';

class GetContextualKeywordsResponseType extends AbstractResponseType
{
	// start props
	// @var ContextSearchAssetType $ContextSearchAsset
	var $ContextSearchAsset;
	// end props

/**
 *

 * @return ContextSearchAssetType
 * @param  $index 
 */
	function getContextSearchAsset($index = null)
	{
		if ($index) {
		return $this->ContextSearchAsset[$index];
	} else {
		return $this->ContextSearchAsset;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setContextSearchAsset($value, $index = null)
	{
		if ($index) {
	$this->ContextSearchAsset[$index] = $value;
	} else {
	$this->ContextSearchAsset = $value;
	}

	}
/**
 *

 * @return 
 */
	function GetContextualKeywordsResponseType()
	{
		$this->AbstractResponseType('GetContextualKeywordsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ContextSearchAsset' =>
				array(
					'required' => false,
					'type' => 'ContextSearchAssetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
