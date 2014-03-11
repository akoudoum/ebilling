<?php
/* Bill from facturation.pro*/

class RemoteBill extends ActiveResource {
	
	var $site = 'https://facturation.pro/firms/2857/';
	
    var $element_name = 'invoice';
    
	public $id;
	
	public $api_custom;
	
	public $api_id;
	
	public $customer_id;
	
	public $bill_items = array();


	public function FindBill($options = array()) {
		$this->request_format = 'xml';
		$this->_data = array();
		$rep = $this->get('', $options);
		
		if(DEBUG3){echo "<hr /><br />Find Bill:<br />";print_r($rep);echo "<hr /><br />";}
		return is_array($rep) ? $rep:null;
	}
	
	public function DeleteBill($options = array()) {
		//todo
	}
	
	public function InsertBill() {
		$this->bill_items["@type"] = "array";
		$this->_data = array(
			"api_custom" => $this->api_custom,
			"api_id" => $this->api_id,
			"customer_id" => $this->customer_id,
			"items_attributes" => $this->bill_items
		);
		if(DEBUG3) {echo "<hr /><br />Insert Bill:<br />";print_r($this->_data);echo "<hr /><br />";}
		
		$this->request_format = 'xml';
		
		$newBill = $this->post('', $this->_data);
		//$newBill = $this->save();
		if(DEBUG3){echo "<hr /><br />Insert Bill rep:<br />";print_r($newBill);echo "<hr /><br />";}
		return is_array($newBill) ? $newBill:null;
	}
	
	public function AddItem($item = array()) {
		
		$this->bill_items[] =  array("items_attribute" => $item);
		
	}

}

?>