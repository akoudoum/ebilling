<?php


class		EntrepriseFacturation extends ObjectModel
{
	public      $id;
	
	public 		$raison_sociale;
	
	public 		$email;
	
	public 		$adresse_ligne1;
	
	public      $adresse_ligne2;
	
	public 		$ville;
	
	public 		$pays;
	
	public 		$code_postal;
	
	public 		$telephone1;
	
	public 		$telephone2;
	//update script
	public      $fax;
	
	public      $appliquertva;
	
	public      $firstnumfacture;
	
	public      $rcs;
	
	public      $numsiret;
	
	public      $tva;
	
	
	
 	protected 	$fieldsRequired = array('email','adresse_ligne1','ville','pays','telephone2','firstnumfacture');
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('raison_sociale' => 'isName',  'email' => 'isEmail', 'pays' => 'isCityName', 'ville' => 'isCountryName');
	protected   $fieldsUnique = array('email');
 	protected 	$fieldsLabel = array(
 	'raison_sociale'=>'Raison sociale', 
 	'email'=>'E-mail', 
 	'adresse_ligne1'=>'Adresse ligne 1',
 	'ville'=>'Ville',
 	'pays'=>'Pays',
 	'code_postal'=>'Code postal',
 	'telephone1'=>'Telephone mobile',
 	'firstnumfacture'=>'D&eacute;but numerotation facture',
 	'telephone2'=>'Telephone de Bureau',
 	'fax'=>'Fax',
 	'firstnumfacture'=>'Début numerotation facture',
 	'rcs'=>'RCS (Registre du commerce)',
 	'numsiret'=>'Le numéro Siret de la société',
 	'tva'=>'Taux de TVA'
 	);

	protected 	$table = 'entreprise_facturation';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{	
 	    $fields['raison_sociale'] = pSQL($this->raison_sociale);
 	    $fields['email'] = pSQL($this->email);
 	    $fields['adresse_ligne1'] = pSQL($this->adresse_ligne1);
 	    $fields['ville'] = pSQL($this->ville);
 	    $fields['pays'] = pSQL($this->pays);
 	    $fields['code_postal'] = pSQL($this->code_postal);
 	    $fields['telephone1'] = pSQL($this->telephone1);
 	    $fields['telephone2'] = pSQL($this->telephone2);
 	    $fields['fax'] = pSQL($this->fax);
 	    $fields['firstnumfacture'] = pSQL($this->firstnumfacture);
 	    $fields['rcs'] = pSQL($this->rcs);
 	    $fields['numsiret'] = pSQL($this->numsiret);
 	    $fields['appliquertva'] = pSQL($this->appliquertva);
 	    $fields['tva'] = pSQL($this->tva);
		return $fields;
	}
	
	
	public function getObjectById($id)
	{
		$result = Db::getInstance()->getRow('
		SELECT *
		FROM `'.$this->table.'`
		WHERE `id` = '.pSQL($id));
		if (!$result)
		
		echo $this->id = $result['id'];

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
		WHERE  `email` = \''.pSQL($email).'\'
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