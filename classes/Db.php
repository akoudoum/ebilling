<?php


if (file_exists(dirname(__FILE__).'/../include/settings.inc.php'))
	include_once(dirname(__FILE__).'/../include/settings.inc.php');
include_once(dirname(__FILE__).'/MySQL.php');

abstract class Db
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
	private static $_blacklist = '/UNION|LOAD_FILE|OUTFILE|DUMPFILE|ESCAPED|TERMINATED|CASCADE|INFILE|X509|TRIGGER|REVOKE/i';
	
	
	//traitement de resultats par page
	   public $nb_num_page;//nombre de numero de page � afficher
       public $elt_page;   //nombre d'�l�ment par page
	   public $nom_page;   //nom de la page
	   public $np;          //numero de page
       public $deb;        //d�but de s�lection des enregistremnts
	   public $nb_elt;     //nombre total d'enregistrement
	   public $pg_suivante;
	   public $pg_precedente;
	   public $derniere_pg;
	   public $permiere_pg;
	   public $pg_encour;
	   public $nb_total_pg;
	   public $numero;
  
	/**
	 * Get Db object instance (Singleton)
	 *
	 * @return object Db instance
	 */
	public static function getInstance()
	{	
		if(!isset(self::$_instance))
			self::$_instance = new MySQL();
			
		return self::$_instance;
	}
	
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
		
	/**
	 * Filter SQL query within a blacklist
	 *
	 * @param string $query SQL query
	 * @return boolean True if query need to be blocked
	 */
	public static function blacklist(&$query)
	{
		return preg_match(self::$_blacklist, $query) ? true : false;
	}
	
	/**
	 * Filter SQL query within a blacklist
	 *
	 * @param string $table Table where insert/update data
	 * @param string $values Data to insert/update
	 * @param string $type INSERT or UPDATE
	 * @param string $where WHERE clause, only for UPDATE (optional)
	 * @param string $limit LIMIT clause (optional)
	 * @return mixed|boolean SQL query result
	 */
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
			    if($value!=NULL)
				$query .= '`'.$key.'` = \''.$value.'\',';
			$query = rtrim($query, ',');
			if ($where)
				$query .= ' WHERE '.$where;
			if ($limit)
				$query .= ' LIMIT '.intval($limit);//echo $query."................";
			return $this->q($query);
		}
		
		return false;
	}


	/**
	 * Filter SQL query within a blacklist
	 *
	 * @param string $table Table where insert/update data
	 * @param string $values Data to insert/update
	 * @param string $type INSERT or UPDATE
	 * @param string $where WHERE clause, only for UPDATE (optional)
	 * @param string $limit LIMIT clause (optional)
	 * @return mixed|boolean SQL query result
	 */
	public function	autoExecuteWithNullValues($table, $values, $type, $where = false, $limit = false)
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
				$query .= (($value === '' OR $value === NULL) ? 'NULL' : '\''.$value.'\'').',';
			$query = rtrim($query, ',').')';
			if ($limit)
				$query .= ' LIMIT '.intval($limit);
			return $this->q($query);
		}
		elseif (strtoupper($type) == 'UPDATE')
		{
			$query = 'UPDATE `'.$table.'` SET ';
			foreach ($values AS $key => $value)
				$query .= '`'.$key.'` = '.(($value === '' OR $value === NULL) ? 'NULL' : '\''.$value.'\'').',';
			$query = rtrim($query, ',');
			if ($where)
				$query .= ' WHERE '.$where;			
			if ($limit)
				$query .= ' LIMIT '.intval($limit);
			return $this->q($query);
		}
		
		return false;
	}

	/*********************************************************
	 * ABSTRACT METHODS
	 *********************************************************/
	
	/**
	 * Open a connection
	 */
	abstract public function connect();

	/**
	 * Get the ID generated from the previous INSERT operation
	 */
	abstract public function Insert_ID();

	/**
	 * Get number of affected rows in previous databse operation
	 */
	abstract public function Affected_Rows();

	/**
	 * Gets the number of rows in a result
	 */
	abstract public function NumRows();

	/**
	 * Delete
	 */
	abstract public function delete ($table, $where = false, $limit = false);
	/**
	 * Fetches a row from a result set
	 */
	abstract public function Execute ($query);

	/**
	 * Fetches an array containing all of the rows from a result set
	 */
	abstract public function ExecuteS($query);
	
	/**
		 * Alias of Db::getInstance()->ExecuteS
		 *
		 * @acces string query The query to execute
		 * @return array Array of line returned by MySQL
		 */
	static public function s($query)
	{
		return Db::getInstance()->ExecuteS($query);
	}

	/**
	 * Get Row
	 */
	abstract public function getRow($query);

	/**
	 * Returns the text of the error message from previous database operation
	 */
	abstract public function getMsgError();
}

/**
 * Sanitize data which will be injected into SQL query
 *
 * @param string $string SQL data which will be injected into SQL query
 * @param boolean $htmlOK Does data contain HTML code ? (optional)
 * @return string Sanitized data
 */
function pSQL($string, $htmlOK = false)
{
	if (MAGIC_QUOTES_GPC_)
		$string = stripslashes($string);
	if (!is_numeric($string))
	{
		$string = MYSQL_REAL_ESCAPE_STRING_ ? mysql_real_escape_string($string) : addslashes($string);
		if (!$htmlOK)
			$string = strip_tags(nl2br2($string));
	}
		
	return $string;
}

/**
 * Convert \n to <br />
 *
 * @param string $string String to transform
 * @return string New string
 */
function nl2br2($string)
{
	return str_replace(array("\r\n", "\r", "\n"), '<br />', $string);
}

?>
