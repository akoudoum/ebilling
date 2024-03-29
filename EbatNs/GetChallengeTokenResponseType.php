<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'AbstractResponseType.php';

class GetChallengeTokenResponseType extends AbstractResponseType
{
	// start props
	// @var string $ChallengeToken
	var $ChallengeToken;
	// @var string $ImageChallengeURL
	var $ImageChallengeURL;
	// @var string $AudioChallengeURL
	var $AudioChallengeURL;
	// end props

/**
 *

 * @return string
 */
	function getChallengeToken()
	{
		return $this->ChallengeToken;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setChallengeToken($value)
	{
		$this->ChallengeToken = $value;
	}
/**
 *

 * @return string
 */
	function getImageChallengeURL()
	{
		return $this->ImageChallengeURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setImageChallengeURL($value)
	{
		$this->ImageChallengeURL = $value;
	}
/**
 *

 * @return string
 */
	function getAudioChallengeURL()
	{
		return $this->AudioChallengeURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setAudioChallengeURL($value)
	{
		$this->AudioChallengeURL = $value;
	}
/**
 *

 * @return 
 */
	function GetChallengeTokenResponseType()
	{
		$this->AbstractResponseType('GetChallengeTokenResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ChallengeToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ImageChallengeURL' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AudioChallengeURL' =>
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
