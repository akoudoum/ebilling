<?php


class		ElementsFacture extends ObjectModel
{
	public      $id;

	public      $id_ebay_element;
	
	public 		$titre;
	
	public 		$etat;
	
	public 		$quantite;
	
	public 		$prix_unitaire;
	
	public 		$id_facture;
	
	
 	protected 	$fieldsRequired = array('id_ebay_element', 'titre','id_facture');
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('prix_unitaire' => 'isPrice');
	protected   $fieldsUnique = array();
 	protected 	$fieldsLabel = array(
 	'id_ebay_element'=>'ID Ebay Element', 
 	'titre'=>'Titre', 
 	'etat'=>'Etat de l\'article',
 	'quantite'=>'Quantite',
 	'prix_unitaire'=>'Prix unitaire');

	protected 	$table = 'elements_facture';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{
		$fields['id_ebay_element'] = pSQL($this->id_ebay_element);
		$fields['titre'] = pSQL($this->titre);
		$fields['etat'] = pSQL($this->etat);
		$fields['quantite'] = pSQL($this->quantite);
		$fields['prix_unitaire'] = pSQL($this->prix_unitaire);
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