<?php
class		Facture extends ObjectModel
{
	public      $id;

	public      $id_ebay;
	
	public 		$montant;
	
	public      $devise;
	
	public 		$mode_paiement;
	
	public 		$id_trasaction;
	
	public 		$date_commande;
	
	public 		$date_facturation;
	
	public 		$date_paiment;
	
	public 		$legande;
	//update field
	public      $numfacture;
	
	public 		$id_facture_online;
	

	
 	protected 	$fieldsRequired = array('id_ebay', 'montant','mode_paiement','date_commande');
 	protected 	$fieldsSize = array('montant' => 64,  'id_ebay' => 50);
 	protected 	$fieldsValidate = array('montant' => 'isPrice');
	protected   $fieldsUnique = array('id_ebay');
 	protected 	$fieldsLabel = array('id_ebay'=>'ID commande ebay', 'montant'=>'Montant de la commande', 'devise'=>'Devise', 'mode_paiement'=>'Mode de paiement','id_trasaction'=>'ID de transaction paypal','date_commande'=>'Date de commande');

	protected 	$table = 'facture';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
	public function setID($id){
		$this->id = $id;
	}
		
	public function getFields()
	{
		$fields['id_ebay'] = pSQL($this->id_ebay);
		$fields['montant'] = pSQL($this->montant);
		$fields['devise'] = pSQL($this->devise);
		$fields['mode_paiement'] = pSQL($this->mode_paiement);
		$fields['id_trasaction'] = pSQL($this->id_trasaction);
		$fields['date_commande'] = pSQL($this->date_commande);
		$fields['date_facturation'] = pSQL($this->date_facturation);
		$fields['date_paiment'] = pSQL($this->date_paiment);
		$fields['legande'] = pSQL($this->legande);
		$fields['numfacture'] = pSQL($this->numfacture);
		$fields['id_facture_online'] = pSQL($this->id_facture_online);
		return $fields;
	}
	

	public function getObjectById($id)
	{

		$result = Db::getInstance()->getRow('
		SELECT * 
		FROM `'.$this->table.'`
		WHERE  `'.$this->identifier.'` = \''.intval($id).'\'
		'); 
		if (!$result)
			return false;
		$this->id = $result['id'];
		
		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
	}

    public function getLastObject()
	{

		$result = Db::getInstance()->getRow('SELECT * FROM `'.$this->table.'` ORDER BY '.$this->table.'.id DESC'); 
		
		//print_r($result);
		if (!$result)
			return false;

		return $result['numfacture'];
	}
    
	
    public function Objectexiste()
	{
		$sql = '
		SELECT * 
		FROM `'.$this->table.'`
		WHERE  `id_ebay` = \''.$this->id_ebay.'\'
		';
		
		$result = Db::getInstance()->getRow($sql);
		
		if (!$result)
			return false;
		else return true;
	}
	
}
?>