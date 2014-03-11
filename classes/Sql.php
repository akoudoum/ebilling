<?php 
class Sql
{
	/** @var string Server (eg. localhost) */
	protected $_server;
	
	/** @var string Database user (eg. root) */
	protected $_user;

	/** @var string Database password (eg. can be empty !) */
	protected $_password;
  
	/** @var string Database type (MySQL, PgSQL) */
	protected $_type;
  
	/** @var string Database name */
	protected $_database;
	
	/** @var mixed Ressource link */
	protected $_link;
  
	/** @var mixed SQL cached result */
	protected $_result;
	
	/** @var mixed ? */
	protected static $_db;
  
	/** @var mixed Object instance for singleton */
	private static $_instance;
  
	/** @var string Keywords not allowed in SQL string */
	private static $_blacklist = 'UNION|LOAD_FILE|OUTFILE|DUMPFILE|ESCAPED|TERMINATED|CASCADE|INFILE|X509|TRIGGER|REVOKE';

//constructeur && destructeur
    public function __destruct()
    {
        $this->disconnect();
    }
	
	/**
	 * Build a Db object
	 */
	public function __construct()
	{
		$this->_server = _DB_SERVER_;
		$this->_user = _DB_USER_;
		$this->_password = _DB_PASSWD_;
		$this->_type = _DB_TYPE_;
		$this->_database = _DB_NAME_;
		$this->connect();
	}


	public function	connect()
	{
		if ($this->_link = @mysql_connect($this->_server, $this->_user, $this->_password))
		{
			if(!mysql_select_db($this->_database, $this->_link))
				die(Tools::displayError('Impossible de sélectionner la base de données.'));
		}
		else
			die(Tools::displayError('Impossible de ce connecter àla base de données.'));
		
		/* UTF-8 support */
		if (!mysql_query('SET NAMES \'utf8\'', $this->_link))
			die(Tools::displayError('PrestaShop Fatal error: no utf-8 support. Please check your server configuration.'));
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



// contrôle données insérées dans la base de données
function pSQL($string, $htmlOK = false)
{
	if (get_magic_quotes_gpc())
		$string = stripslashes($string);
	if (!is_numeric($string))
	{
		$string = function_exists('mysql_real_escape_string') ? mysql_real_escape_string($string) : addslashes($string);
		if (!$htmlOK)
			$string = strip_tags(nl2br2($string));
	}
		
	return $string;
}

//
function nl2br2($string)
{
	return str_replace(array("\r\n", "\r", "\n"), '<br />', $string);
}


//requete insertion et update
	public function	autoExecute($table, $values, $type, $where = false, $limit = false)
	{
		if (!sizeof($values))
			return true;

		if (strtoupper($type) == 'INSERT')
		{
			$query = 'INSERT INTO `'.$table.'` (';
			foreach ($values AS $key => $value)
				$query .= '`'.$key.'`,';
			$query = rtrim($query, ',').') VALUES (';
			foreach ($values AS $key => $value)
				$query .= '\''.$value.'\',';
			$query = rtrim($query, ',').')';
			if ($limit)
				$query .= ' LIMIT '.intval($limit);
			return $this->q($query);
		}
		elseif (strtoupper($type) == 'UPDATE')
		{
			$query = 'UPDATE `'.$table.'` SET ';
			foreach ($values AS $key => $value)
				$query .= '`'.$key.'` = \''.$value.'\',';
			$query = rtrim($query, ',');
			if ($where)
				$query .= ' WHERE '.$where;
			if ($limit)
				$query .= ' LIMIT '.intval($limit);
			return $this->q($query);
		}
		
		return false;
	}


	protected function q($query)
	{
		if (parent::blacklist($query))
			return false;
		$this->_result = false;
		if ($this->_link)
			return mysql_query($query, $this->_link);
		return false;
	}

}
?>