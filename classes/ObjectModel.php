<?php

abstract class ObjectModel
{
	/** @var integer Object id */
	public $id;

	/** @var string SQL Table name */
	protected $table = NULL;

	/** @var string SQL Table identifier */
	protected $identifier = NULL;

	
	/** @var array Required fields for admin panel forms */
 	protected $fieldsRequired = array();

 	/** @var array Maximum fields size for admin panel forms */
 	protected $fieldsSize = array();

 	/** @var array Fields validity functions for admin panel forms */
 	protected $fieldsValidate = array();
	
 	/** @var array Fields unique functions for admin panel forms */
 	protected $fieldsUnique = array();
	
	protected $fieldsLabel = array();

	/** @var array tables */
 	protected $tables = array();

	/**
	 * Returns object validation rules (fields validity)
	 *
	 * @param string $className Child class name for static use (optional)
	 * @return array Validation rules (fields validity)
	 */
	static public function getValidationRules($className)
	{
		$object = new $className();
		return array(
		'required' => $object->fieldsRequired,
		'size' => $object->fieldsSize,
		'label' => $object->fieldsLabel,
		'validate' => $object->fieldsValidate);
	}
	
	public function copyFromPost()
	{
		/* Classical fields */
		foreach ($_POST AS $key => $value)
			if (key_exists($key, $this) AND $key != 'id_'.$this->table)
			{
				/* Do not take care of password field if empty */
				if ($key == 'passwd' AND Tools::getValue('id_'.$this->table) AND empty($value))
					continue;
				/* Automatically encrypt password in MD5 */
				if ($key == 'passwd' AND !empty($value))
					$value = Tools::encrypt($value);
				$this->{$key} = $value;
			}
			
			return $this;
  
	}


	/**
	 * Prepare fields for ObjectModel class (add, update)
	 * All fields are verified (pSQL, intval...)
	 *
	 * @return array All object fields
	 */
	public function getFields()	{ return array(); }
	
	/**
	 * Return all table' rows form the database
	 *
	 * @return all table' rows
	*/
	
	public function getAllRowsEntry() {
	
		$result = Db::getInstance()->GetAllEntries($this->table);
		
		return $result;
	}

	/**
	 * Build object
	 *
	 * @param integer $id Existing object id in order to load object (optional)
	 * @param integer $id_lang Required if object is multilingual (optional)
	 */
	public function __construct()
	{}



	static public function displayFieldName($field, $className = __CLASS__, $htmlentities = true)
	{
		global $_FIELDS;
		$key = $className.'_'.md5($field);
		return ((is_array($_FIELDS) AND array_key_exists($key, $_FIELDS)) ? ($htmlentities ? htmlentities($_FIELDS[$key], ENT_QUOTES, 'utf-8') : $_FIELDS[$key]) : $field);
	}


	/**
	 * Save current object to database (add or update)
	 *
	 * return boolean Insertion result
	 */
	public function save($nullValues = false, $autodate = true)
	{
		return intval($this->id) > 0 ? $this->update($nullValues) : $this->add($autodate, $nullValues);
	}

	/**
	 * Add current object to database
	 *
	 * return boolean Insertion result
	 */
	public function add($autodate = true, $nullValues = false)
	{
	 	if (!Validate::isTableOrIdentifier($this->table))
			die(Tools::displayError());
	
		/* Automatically fill dates */
		if ($autodate AND key_exists('date_add', $this))
			$this->date_add = date('Y-m-d H:i:s');
		if ($autodate AND key_exists('date_upd', $this))
			$this->date_upd = date('Y-m-d H:i:s');
		
		/* Database insertion */
		if ($nullValues)
			$result = Db::getInstance()->autoExecuteWithNullValues($this->table, $this->getFields(), 'INSERT');
		else
			$result = Db::getInstance()->autoExecute($this->table, $this->getFields(), 'INSERT');
		if (!$result)
			return false;

		/* Get object id in database */
		$this->id = Db::getInstance()->Insert_ID();

		return $result;
	}

	/**
	 * Update current object to database
	 *
	 * return boolean Update result
	 */
	public function update($nullValues = false)
	{
	 	if (!Validate::isTableOrIdentifier($this->identifier) OR !Validate::isTableOrIdentifier($this->table))
			die(Tools::displayError());

		/* Automatically fill dates */
		if (key_exists('date_upd', $this))
			$this->date_upd = date('Y-m-d H:i:s');
       // print_r($this->getFields());
		/* Database update */
		if ($nullValues)
			$result = Db::getInstance()->autoExecuteWithNullValues($this->table, $this->getFields(), 'UPDATE', '`'.pSQL($this->identifier).'` = '.intval($this->id));
		else
			$result = Db::getInstance()->autoExecute($this->table, $this->getFields(), 'UPDATE', '`'.pSQL($this->identifier).'` = '.intval($this->id));
		if (!$result)
			return false;

		return $result;
	}

	/**
	 * Delete current object from database
	 *
	 * return boolean Deletion result
	 */
	public function delete()
	{
	 	if (!Validate::isTableOrIdentifier($this->identifier) OR !Validate::isTableOrIdentifier($this->table))
	 		die(Tools::displayError());

		/* Database deletion */
		$result = Db::getInstance()->Execute('DELETE FROM `'.pSQL($this->table).'` WHERE `'.pSQL($this->identifier).'` = '.intval($this->id));
		if (!$result)
			return false;

		return $result;
	}

	/**
	 * Delete several objects from database
	 *
	 * return boolean Deletion result
	 */
	public function deleteSelection($selection)
	{
		if (!is_array($selection) OR !Validate::isTableOrIdentifier($this->identifier) OR !Validate::isTableOrIdentifier($this->table))
			die(Tools::displayError());
		$result = true;
		foreach ($selection AS $id)
		{
			$this->id = intval($id);
			$result = $result AND $this->delete();
		}
		return $result;
	}

	/**
	 * Toggle object status in database
	 *
	 * return boolean Update result
	 */
	public function toggleStatus()
	{
	 	if (!Validate::isTableOrIdentifier($this->identifier) OR !Validate::isTableOrIdentifier($this->table))
	 		die(Tools::displayError());

	 	/* Object must have a variable called 'active' */
	 	elseif (!key_exists('active', $this))
	 		die(Tools::displayError());
             
		/* Change status to active/inactive */
		return Db::getInstance()->Execute('
		UPDATE `'.pSQL($this->table).'`
		SET `active` = !`active`
		WHERE `'.pSQL($this->identifier).'` = '.intval($this->id));
	}


	public function activeCompte()
	{
	 	if (!Validate::isTableOrIdentifier($this->identifier) OR !Validate::isTableOrIdentifier($this->table))
	 		die(Tools::displayError());

	 	/* Object must have a variable called 'active' */
	 	elseif (!key_exists('activesingnup', $this))
	 		die(Tools::displayError());
             
		/* Change status to active/inactive */
		return Db::getInstance()->Execute('
		UPDATE `'.pSQL($this->table).'`
		SET `activesingnup` = \'1\'
		WHERE `'.pSQL($this->identifier).'` = '.intval($this->id));
	}



	public function validateControler($htmlentities = true)
	{
		$errors = array();

		/* Checking for required fields */
		foreach ($this->fieldsRequired AS $field)
		if (($value = Tools::getValue($field, $this->{$field})) == false AND (string)$value != '0')
			if (!$this->id OR $field != 'passwd')
				$errors[] = '<b>'.self::displayFieldName2($field).'</b> '.Tools::displayError(' est obligatoire');


		/* Checking for maximum fields sizes */
		foreach ($this->fieldsSize AS $field => $maxLength)
			if (($value = Tools::getValue($field, $this->{$field})) AND Tools::strlen($value) > $maxLength)
				$errors[] = '<b>'.self::displayFieldName2($field).'</b> '.Tools::displayError('est trop long').' ('.Tools::displayError('taille maximum:').' '.$maxLength.')';


		/* Checking for uniques fields */
		foreach ($this->fieldsUnique AS $field){//check unique
		
		        $value = Tools::getValue($field, $this->{$field});
				$q = Db::getInstance()->Execute("SELECT ".$field." FROM `".pSQL($this->table)."` WHERE `".$field."` = '".$value."'");
				$nb = mysql_num_rows($q);

				if($nb>0 && (empty($this->id) or $this->id==0 or $this->id=="" or $this->id==NULL))
				$errors[] = '<b>'.self::displayFieldName2($field).'</b> '.Tools::displayError('(existe déjà) '.$this->id);
				
				//if($nb>1 && !empty($this->id))
				//$errors[] = '<b>'.self::displayFieldName2($field).'</b> '.Tools::displayError('(existe déjà) '.$this->id);
				}//check unique


		/* Checking for fields validity */
		foreach ($this->fieldsValidate AS $field => $function)
		{
			// Hack for postcode required for country which does not have postcodes
			if ($value = Tools::getValue($field, $this->{$field}) OR ($field == 'postcode' AND $value == '0'))
			{
				if (!Validate::$function($value))
					$errors[] = '<b>'.self::displayFieldName2($field).'</b> '.Tools::displayError(' invalide');
			    elseif($field == 'passwd' && isset($_POST['passwd2'])){
				
					if ($_POST[$field] == $_POST['passwd2'])
					{
						if ($value = Tools::getValue($field))
							$this->{$field} = Tools::encrypt($value);
					}
					else
					$errors[] = '<b>Confirmation de mot de passe</b> '.Tools::displayError(' invalide');
				}
				else
				{
					if ($field == 'passwd')
					{
						if ($value = Tools::getValue($field))
							$this->{$field} = Tools::encrypt($value);
					}
					else	
						$this->{$field} = $value;
				}
			}
		}
		return $errors;
	}
	
	
	public function displayFieldName2($field)
	{
		return $this->fieldsLabel[$field];
	}
	

}

?>
