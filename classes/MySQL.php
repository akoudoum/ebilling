<?php


class MySQL extends Db
{
	public function	connect()
	{	
		if ($this->_link = @mysql_connect($this->_server, $this->_user, $this->_password))
		{
			if(!mysql_select_db($this->_database, $this->_link))
				die(Tools::displayError('The database selection cannot be made.'));
		}
		else
			die(Tools::displayError('Link to database cannot be established.'));
		/* UTF-8 support */
		if (!mysql_query('SET NAMES \'utf8\'', $this->_link))
			die(Tools::displayError(' Fatal error: no utf-8 support. Please check your server configuration.'));
		/* Disable some MySQL limitations */
		mysql_query('SET GLOBAL SQL_MODE=\'\'', $this->_link);
		return $this->_link;
	}
	
	public function	disconnect()
	{
		if ($this->_link)
			mysql_close($this->_link);
		$this->_link = false;
	}
	
	public function	getRow($query)
	{
		if (parent::blacklist($query))
			return false;
		$this->_result = false;
		if ($this->_link)
			if ($this->_result = mysql_query($query.' LIMIT 1', $this->_link))
				return mysql_fetch_assoc($this->_result);
		return false;
	}
	
	public function	Execute($query)
	{
		if (parent::blacklist($query))
			return false;
		$this->_result = false;
		if ($this->_link)
		{
			$this->_result = mysql_query($query, $this->_link);
			return $this->_result;
		}				
		return false;
	}
	
	public function Selection($table, $fields = array(), $restriction, $limit = 0){
		
		$selectedfields = "*";
		if(count($fields) > 0) 
			$selectedfields = implode(",", $fields);
		
		$query = "SELECT ".$selectedfields." FROM ".$table." ".$restriction.(($limit!=0)?" LIMIT".$limit:"");
		if (parent::blacklist($query))
			return false;
		if ($this->_link)
			if ($this->_result = mysql_query($query, $this->_link))
			{
				$resultArray = array();
				while ($row = mysql_fetch_assoc($this->_result))
					$resultArray[] = $row;
				return $resultArray;
			}
		return false;
	}
	
	public function	ExecuteS($query)
	{
		if (parent::blacklist($query))
			return false;
		$this->_result = false;
		if ($this->_link)
			if ($this->_result = mysql_query($query, $this->_link))
			{
				$resultArray = array();
				while ($row = mysql_fetch_assoc($this->_result))
					$resultArray[] = $row;
				return $resultArray;
			}
		return false;
	}
	
	public function	delete($table, $where = false, $limit = false)
	{
		$this->_result = false;
		if ($this->_link)
			return mysql_query('DELETE FROM `'.pSQL($table).'`'.($where ? ' WHERE '.$where : '').($limit ? ' LIMIT '.intval($limit) : ''), $this->_link);
		return false;
	}
	
	public function	NumRows()
	{
		if ($this->_link AND $this->_result)
			return mysql_num_rows($this->_result);
	}
	
	public function	Insert_ID()
	{
		if ($this->_link)
			return mysql_insert_id($this->_link);
		return false;
	}
	
	public function	Affected_Rows()
	{
		if ($this->_link)
			return mysql_affected_rows($this->_link);
		return false;
	}

	protected function q($query)
	{
		if (parent::blacklist($query))
			return false;
		$this->_result = false;
		if ($this->_link)
			return mysql_query($query, $this->_link) or die("Erreur : ".mysql_error());
		return false;
	}
	
	/**
	 * Returns the text of the error message from previous MySQL operation
	 *
	 * @acces public
	 * @return string error
	 */
	public function getMsgError()
	{
		return mysql_error();
	}
	
	public function getNumberError()
	{
		return mysql_errno();
	}
	
	static public function tryToConnect($server, $user, $pwd, $db)
	{
		if (!$link = @mysql_connect($server, $user, $pwd))
			return 1;
		if (!@mysql_select_db($db, $link))
			return 2;
		return 0;
	}
	
	
	
	///afficharge par page
//constructeur
public function page(){
       $this->nb_num_page = 6;
	   $this->elt_page=10;
	   $this->nom_page="";
	   if(!isset($_REQUEST['np'])) $this->np=0;
	   else $this->np=$_REQUEST['np'];
	   $this->deb = $this->np*$this->elt_page;
}

public function nbTotalItem($sql){
$q = mysql_query($sql, $this->_link);
$this->nb_elt = mysql_num_rows($q);
}

public function Getdata($sql){
$this->deb=$this->np*$this->elt_page;
$q = mysql_query($sql." LIMIT ".$this->deb.", ".$this->elt_page, $this->_link) or die("error2");
return $q;
}

public function GetAllEntries($table_name){
	
	$entries = array();
	$q = mysql_query("SELECT * FROM ".$table_name) or die("classes/Mysql funct GetAllEntrie: ".mysql_error());
	 
	while($l = mysql_fetch_array($q))
		array_puch($entries, $l);
		 
	return $entries;
}

public function GetFieldsInTable($table_name, $fields = array()){
	
	$entries = array();
	$sql = "";
	
	if(count($fields) > 0) {
		
		foreach($fields as $f) {
			
			if(empty($sql))
				$sql .= $f;
			else
				$sql .= ", ".$f;
		}
				
		$q = mysql_query("SELECT $f FROM ".$table_name) or die("classes/Mysql funct GetFieldsInTable: ".mysql_error());
	}
	 
	while($l = mysql_fetch_array($q))
		array_puch($entries, $l);
		 
	return $entries;
}


public function print_nb(){

	   $mod=$this->nb_elt%$this->elt_page;
	   if($mod==0) $page=$this->nb_elt/$this->elt_page; else $page=(($this->nb_elt-$mod)/$this->elt_page+1);
	   if($this->np>0){
       $pre1='<strong><a href="'.$this->nom_page.'np=0">&laquo;&laquo;</a></strong>';
	   $this->permiere_pg=$this->nom_page.'np=0';//
       //if($this->np>0){
       $precedent=$this->np-1;
       $pre='<strong><a href="'.$this->nom_page.'np='.$precedent.'">&lt;Pr&eacute;c&eacute;dente</a></strong>';
	   $this->pg_precedente=$this->nom_page.'np='.$precedent;//
       }else{
       $pre1='<strong>&laquo;&laquo;</strong>';/////////
	   $pre='<strong>&lt;Pr&eacute;c&eacute;dent</strong>';
	   $this->pg_precedente="#";//
	   }
 	   
	   if(($this->np+1)<$page){
	   $suiv1='<strong><a href="'.$this->nom_page.'np='.($page-1).'">&raquo;&raquo;</a></strong>';
	   $this->derniere_pg=$this->nom_page.'np='.($page-1);//
	   
       $suivant=$this->np+1;
       $suiv='<strong><a href="'.$this->nom_page.'np='.$suivant.'">suivant&gt;</a></strong>';
	   $this->pg_suivante=$this->nom_page.'np='.$suivant;
	   }else{
	   $suiv1='<strong>&raquo;&raquo;</strong>';
       $suiv='<strong>Suivant&gt;</strong>';
	   $this->pg_suivante="#";
	   }
       $numero='';
	   $cote=($this->nb_num_page-($this->nb_num_page%2))/2;
       $debut=$this->np-$cote; if ($debut<0) {$debut=0; $fin=$debut+$this->nb_num_page-1; if($fin>$page) $fin=$page-1;}
	   else{$fin=$this->np+$cote; if($fin>=$page) $fin=$page-1;}
	   
for($k=$debut;$k<=$fin;$k++) 
if($this->np==$k) $numero.='<b>'.($this->np+1).'</b>';
else $numero.=' <a href="'.$this->nom_page.'np='.($k).'">'.($k+1).'</a>  ';				
		$pg='<span>page : '.($this->np+1)." Sur ".$page.'</span>';	  
       
	    $this->numero = $numero;
	    $this->pg_encour = $this->np+1;
		$this->nb_total_pg = $page;
		
return $pre1.' | '.$pre.'| &nbsp;&nbsp;&nbsp;'.$pg.' &nbsp;&nbsp;&nbsp;&nbsp;'.$numero.'  &nbsp;&nbsp;&nbsp;| '.$suiv.' | '.$suiv1;

}

//////////////////////////////////////////	
}

?>
