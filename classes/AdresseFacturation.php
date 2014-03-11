<?php


class		AdresseFacturation extends ObjectModel
{
	public      $id;
	
	public 		$f_nom;
	
	public 		$f_prenom;
	
	public 		$f_email;
	
	public 		$f_adresse_ligne1;
	
	public      $f_adresse_ligne2;
	
	public 		$f_ville;
	
	public 		$f_pays;
	
	public 		$f_code_postal;
	
	public 		$f_telephone1;
	
	public 		$f_telephone2;
	
	public 		$id_facture;

	
 	protected 	$fieldsRequired = array('id_facture', 'f_email');
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('f_nom' => 'isName', 'f_prenom' => 'isName', 'f_email' => 'isEmail', 'f_pays' => 'isCityName', 'f_ville' => 'isCountryName');
	protected   $fieldsUnique = array('f_email');
 	protected 	$fieldsLabel = array(
 	'f_nom'=>'Nom', 
 	'f_prenom'=>'Prénom', 
 	'f_email'=>'E-mail facturation', 
 	'f_adresse_ligne1'=>'Adresse ligne 1',
 	'f_ville'=>'Ville',
 	'f_pays'=>'Pays',
 	'f_code_postal'=>'Code postal',
 	'f_telephone1'=>'Telephone mobile',
 	'f_telephone2'=>'Telephone fixe'
 	);

	protected 	$table = 'adresse_facturation';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{
		
		$fields['f_nom'] = pSQL($this->f_nom);
 	    $fields['f_prenom'] = pSQL($this->f_prenom);
 	    $fields['f_email'] = pSQL($this->f_email);
 	    $fields['f_adresse_ligne1'] = pSQL($this->f_adresse_ligne1);
 	    $fields['f_ville'] = pSQL($this->f_ville);
 	    $fields['f_pays'] = pSQL($this->f_pays);
 	    $fields['f_code_postal'] = pSQL($this->f_code_postal);
 	    $fields['f_telephone1'] = pSQL($this->f_telephone1);
 	    $fields['f_telephone2'] = pSQL($this->f_telephone2);
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
		WHERE  `f_email` = \''.pSQL($email).'\'
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