<?php


class		AdresseLivraison extends ObjectModel
{
	public      $id;
	
	public 		$l_nom;
	
	public 		$l_prenom;
	
	public 		$l_email;
	
	public 		$l_adresse_ligne1;
	
	public      $l_adresse_ligne2;
	
	public 		$l_ville;
	
	public 		$l_pays;
	
	public 		$l_code_postal;
	
	public 		$l_telephone1;
	
	public 		$l_telephone2;
	
	public 		$id_facture;

	
 	protected 	$fieldsRequired = array('id_facture', 'l_email');
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('l_nom' => 'isName', 'l_prenom' => 'isName', 'l_email' => 'isEmail', 'l_pays' => 'isCityName', 'l_ville' => 'isCountryName');
	protected   $fieldsUnique = array('l_email');
 	protected 	$fieldsLabel = array(
 	'l_nom'=>'Nom', 
 	'l_prenom'=>'Prénom', 
 	'l_email'=>'E-mail Livraison', 
 	'l_adresse_ligne1'=>'Adresse ligne 1',
 	'l_ville'=>'Ville',
 	'l_pays'=>'Pays',
 	'l_code_postal'=>'Code postal',
 	'l_telephone1'=>'Telephone mobile',
 	'l_telephone2'=>'Telephone fixe'
 	);

	protected 	$table = 'adresse_livraison';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{
		
		$fields['l_nom'] = pSQL($this->l_nom);
 	    $fields['l_prenom'] = pSQL($this->l_prenom);
 	    $fields['l_email'] = pSQL($this->l_email);
 	    $fields['l_adresse_ligne1'] = pSQL($this->l_adresse_ligne1);
 	    $fields['l_ville'] = pSQL($this->l_ville);
 	    $fields['l_pays'] = pSQL($this->l_pays);
 	    $fields['l_code_postal'] = pSQL($this->l_code_postal);
 	    $fields['l_telephone1'] = pSQL($this->l_telephone1);
 	    $fields['l_telephone2'] = pSQL($this->l_telephone2);
 	    $fields['id_facture'] = pSQL($this->id_facture);
		return $fields;
	}
	
	
	public function getObjectById($id)
	{
		$result = Db::getInstance()->getRow('
		SELECT *
		FROM `'.$this->table.'`
		WHERE `id` = '.pSQL($id));
		if (!$result)
		
		$this->id = $result['id'];

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
	
	public function getObjectByEmail($email)
	{
	 	if (!Validate::isEmail($email))
	 		return false;

		$result = Db::getInstance()->getRow('
		SELECT * 
		FROM `'.$this->table.'`
		WHERE  `l_email` = \''.pSQL($email).'\'
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
	
	
	
	
	
}
?>