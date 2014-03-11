<?php


class		ClientEbay extends ObjectModel
{
	public      $id;

	public      $id_client_ebay;
	
	public 		$nom;
	
	public 		$id_facture;
	
	
 	protected 	$fieldsRequired = array('id_client_ebay', 'id_facture');
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('nom' => 'isName');
	protected   $fieldsUnique = array();
 	protected 	$fieldsLabel = array('id_client_ebay'=>'ID Client ebay', 'mon'=>'Nom');

	protected 	$table = 'client_ebay';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{
		$fields['id_client_ebay'] = pSQL($this->id_client_ebay);
		$fields['nom'] = pSQL($this->nom);
		$fields['id_facture'] = pSQL($this->id_facture);
		
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
		//$this->id_profile = $result['id_profile'];
		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
	}

     public function getObjectByIdfacture($id)
	{
		$result = Db::getInstance()->getRow('
		SELECT *
		FROM `'.$this->table.'`
		WHERE `id_facture` = '.pSQL($id));
		if (!$result)
		
		$this->id = $result['id'];

		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
	}

	
}
?>