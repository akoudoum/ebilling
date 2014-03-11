<?php
/* Item from facturation.pro*/

class RemoteItem {
	public $id;
	
	public $position;
	
	public $product_id;
	
	public $quantity;
	
	public $nature;
	
	public $title;
	
	public $unit_price;
	
	public function __construct($item = array()){
		
		if(count($item) > 0) {
			$this->position = isset($item["position"])?$item["position"]:"";
			$this->product_id  = isset($item["product_id"])?$item["product_id"]:"";
			$this->quantity = isset($item["quantity"])?$item["quantity"]:"";
			$this->title = isset($item["title"])?$item["title"]:"";
			$this->nature = isset($item["nature"])?$item["nature"]:"";
			$this->unit_price = isset($item["unit_price"])?$item["unit_price"]:"";
		}
	}
	
	public function GetItem() {
		
		return array(
			"position" => $this->position,
			"product_id" => $this->product_id,
			"quantity" => $this->quantity,
			"title" => $this->title,
			"nature" => $this->nature,
			"unit_price" => $this->unit_price
		);
		
		
	}


}

?>