<?php
/**customer form facturation.pro**/

class RemoteCustomer extends ActiveResource {
	
	var $site = 'https://facturation.pro/firms/2857/';
	
    var $element_name = 'customer';
    
	public $api_custom;
	
	public $api_id;
	
	public $city;
	
	public $civility;
	
	public $company_name;
	
	public $country;
	
	public $email;
	
	public $fax;
	
	public $first_name;
	
	public $last_name;
	
	public $pay_before;
	
	public $penalty;
	
	public $phone;
	
	public $short_name;
	
	public $street;
	
	public $zip_code;

	
	
	
	public function InsertCustomer() 
	{
		$this->_data = array();
		$this->_data = array("api_custom" 		=> 	$this->api_custom
								,"api_id"		=>	$this->api_id
								,"city"			=>	$this->city
								,"civility"		=>	$this->civility
								,"company_name"	=>	$this->company_name
								,"country"		=>	$this->country
								,"email"		=>	$this->email
								,"fax"			=>	$this->fax
								,"first_name"	=>	$this->first_name
								,"last_name"	=>	$this->last_name
								,"pay_before"	=>	$this->pay_before
								,"penalty"		=>	$this->penalty
								,"phone"		=>	$this->phone
								,"short_name"	=> 	$this->short_name
								,"street"		=>	$this->street
								,"zip_code"		=>	$this->zip_code
								);
		$this->request_format = 'xml';
		$newClient = $this->post('', $this->_data);
		$entry = count($newClient->_data);
		if(DEBUG3){echo "<hr><br />Insert Customer:<br />";print_r($newClient);echo " - nb: ".$entry."<hr><br />";}
		
		return $entry>1 ? $newClient->_data:null;
		
	}
	public function coutryFormat($country)
	{
		$countryUcased = strtoupper($country);
		
		if(isset($countries[$countryUcased]))
			return $countryUcased;
		
		$key = array_search($countryUcased, $countries);
		
		if($key != FALSE)
			$key;
		else 
			"NA";
		
	}
	public function FindCustomer($options = array()) 
	{
		$this->request_format = 'xml';
		$this->_data = array();
		$rep = $this->get('', $options);
		
		if(DEBUG3){echo "<hr><br />Find Customer:<br />";print_r($rep);echo "<hr><br />";}
		
		return is_array($rep) ? $rep:null;
	}
	
	public function DeleteCustomer($options = array()) 
	{
		//todo
	}
	
	public function GetCustomerDetails($customer_id) 
	{
		
		$this->_data = array ('id' => $customer_id);
			
		return $this->get('');
	}
	
}

?>