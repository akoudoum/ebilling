<?php


class		ServiceLivraison extends ObjectModel
{
	public      $id;
	
	public 		$nom_livreur;
	
	public 		$montant_livraison;
	
	public 		$devise;
	
	public      $date_livraison;
	
	public 		$id_facture;

	
	
	
 	protected 	$fieldsRequired = array();
 	protected 	$fieldsSize = array();
 	protected 	$fieldsValidate = array('nom_livreur' => 'isName');
	protected   $fieldsUnique = array();
 	protected 	$fieldsLabel = array(
 	'nom_livreur'=>'Nom Service Livraison', 
 	'montant_livraison'=>'Montant', 
 	'devise'=>'Devise',
 	'date_livraison'=>'Date Livraison',
 	'id_facture'=>'ID facture'
 	);

	protected 	$table = 'service_livraison';
	protected 	$identifier = 'id';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{
		
	
 	    $fields['nom_livreur'] = pSQL($this->nom_livreur);
 	    $fields['montant_livraison'] = pSQL($this->montant_livraison);
 	    $fields['devise'] = pSQL($this->devise);
 	    $fields['date_livraison'] = pSQL($this->date_livraison);
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
	
	
	
	
}
?>