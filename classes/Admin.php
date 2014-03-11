<?php


class		Admin extends ObjectModel
{
	public      $id;

	public      $id_admin;
	
	public 		$nom;
	
	public 		$email;
	
	public 		$passwd;
	
	public 		$profil;

	public 		$active = 1;
	
	public 		$date_add;

	public 		$date_upd;
	
 	protected 	$fieldsRequired = array('email', 'passwd');
 	protected 	$fieldsSize = array('nom' => 64,  'email' => 64, 'passwd' => 32);
 	protected 	$fieldsValidate = array('nom' => 'isName', 'email' => 'isEmail', 'passwd' => 'isPasswd');
	protected   $fieldsUnique = array('email');
 	protected 	$fieldsLabel = array('nom'=>'Nom', 'email'=>'E-mail', 'passwd'=>'Mot de passe');

	protected 	$table = 'admins';
	protected 	$identifier = 'id_admin';
	
	
	public function __construct(){
	}
		
	public function getFields()
	{
		$fields['nom'] = pSQL($this->nom);
		$fields['email'] = pSQL($this->email);
		if (empty($this->id) && !empty($_POST['passwd']))
		   $fields['passwd'] = pSQL($this->passwd);
		$fields['date_add'] = pSQL($this->date_add);
		$fields['date_upd'] = pSQL($this->date_upd);
		if(isset($this->profil))
		  if(!empty($this->profil))
		$fields['profil'] = pSQL($this->profil);
		return $fields;
	}
	
	
	static public function getNameById($id_admin)
	{
		$result = Db::getInstance()->getRow('
		SELECT `nom`
		FROM `'.$this->table.'`
		WHERE `id_admin` = '.intval($id_admin));
		if ($result != false)
			return $result['nom'];
		return false;
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
		$this->id = $result['id_admin'];
		//$this->id_profile = $result['id_profile'];
		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
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
		$this->id = $result['id_admin'];
		//$this->id_profile = $result['id_profile'];
		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
	}
	
	
	
	public function getByemail($email, $passwd = NULL)
	{
	 	if (!Validate::isEmail($email) OR ($passwd != NULL AND !Validate::isPasswd($passwd)))
	 		return false;

		$result = Db::getInstance()->getRow('
		SELECT * 
		FROM `'.$this->table.'`
		WHERE  `email` = \''.pSQL($email).'\'
		'.($passwd ? 'AND `passwd` = \''.pSQL($passwd).'\'' : ''));
		if (!$result)
			return false;
		$this->id = $result['id_admin'];
		//$this->id_profile = $result['id_profile'];
		foreach ($result AS $key => $value)
			if (key_exists($key, $this))
				$this->{$key} = $value;
		return $this;
	}
	


	public function askpasswd($file)
	{
	 	if (!Validate::isEmail($this->email))
	 		return false;
			
		$cl = $this->getObjectByEmail($this->email);

        if(!$cl) return false;
		
       $passwd = Tools::passwdGen();
       $msg = Tools::getfilecontent($file);
	   $msg = str_replace("[nom]", $cl->prenom." ".$cl->nom, $msg);
	   $msg = str_replace("[email]", $cl->email, $msg);
	   $msg = str_replace("[password]",$passwd,$msg);

	   if($msg != ""){
	     $sjt = "Maayabi.com - votre demande de mot de passe";
	     if(Tools::sendmail($cl->email, EMAIL_ADMIN, "", "", $sjt, $msg, 0)){
		 
		Db::getInstance()->Execute('
		UPDATE  `'.$this->table.'` SET passwd=\''.Tools::encrypt($passwd).'\'
		WHERE  `email` = \''.pSQL($email).'\'');
		 return true;
		 }else return false;
		 
		 /////////////////////////////////
	   }else return false;
		
	}
	
	public function profile($id){
	$q = Db::getInstance()->Execute("SELECT nom FROM profil WHERE id_profil = '".$id."'");
	if(!$q) return "NAN";
	$l = mysql_fetch_array($q);
	return $l['nom'];
	}
	
	public function droits($id){
	$q = Db::getInstance()->Execute("SELECT * FROM profil WHERE id_profil = '".$id."'");

	$l = mysql_fetch_array($q);
	return $l['droits'];
	}
	
	public function r($right,$val){

	$r = explode(";",$right);
	return in_array($val,$r);
	}
	
	
	public function r2($menu,$sousmenn,$right){
    global $giveMenu;
    global $droit;
	
	$r = explode(";",$right);
	$nbd=count($droit);
	for($i=1; $i <= $nbd;$i++)
	 if(in_array($droit[$i]['code'],$r) && $droit[$i]['ctrl']===$menu && $droit[$i]['action']===$sousmenn)
	 	
	 return true;
	 
	 
	return false;
	}
	
}
?>