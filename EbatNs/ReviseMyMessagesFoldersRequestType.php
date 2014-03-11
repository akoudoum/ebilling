<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'MyMessagesFolderOperationCodeType.php';
require_once 'AbstractRequestType.php';

class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
	// start props
	// @var MyMessagesFolderOperationCodeType $Operation
	var $Operation;
	// @var long $FolderID
	var $FolderID;
	// @var string $FolderName
	var $FolderName;
	// end props

/**
 *

 * @return MyMessagesFolderOperationCodeType
 */
	function getOperation()
	{
		return $this->Operation;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setOperation($value)
	{
		$this->Operation = $value;
	}
/**
 *

 * @return long
 * @param  $index 
 */
	function getFolderID($index = null)
	{
		if ($index) {
		return $this->FolderID[$index];
	} else {
		return $this->FolderID;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFolderID($value, $index = null)
	{
		if ($index) {
	$this->FolderID[$index] = $value;
	} else {
	$this->FolderID = $value;
	}

	}
/**
 *

 * @return string
 * @param  $index 
 */
	function getFolderName($index = null)
	{
		if ($index) {
		return $this->FolderName[$index];
	} else {
		return $this->FolderName;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setFolderName($value, $index = null)
	{
		if ($index) {
	$this->FolderName[$index] = $value;
	} else {
	$this->FolderName = $value;
	}

	}
/**
 *

 * @return 
 */
	function ReviseMyMessagesFoldersRequestType()
	{
		$this->AbstractRequestType('ReviseMyMessagesFoldersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Operation' =>
				array(
					'required' => false,
					'type' => 'MyMessagesFolderOperationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'FolderName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
