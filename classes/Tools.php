<?php

/**
  *
  */

class Tools
{
	/**
	* GÃ©nerateur de mot de passe alÃ©atoire
	*
	* @Params integer $length avec une valeur (optionnel)
	* @Retour Une chaine de caractÃ¨re
	*/
	static public function passwdGen($length = 8)
	{
		$str = 'abcdefghijkmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		for ($i = 0, $passwd = ''; $i < $length; $i++)
			$passwd .= Tools::substr($str, mt_rand(0, Tools::strlen($str) - 1), 1);
		return $passwd;
	}



	public function gencode($taille){
		$code="";
		for($i=1;$i<=$taille;$i++){
		$code.=rand(0,9);
		}
		return $code;
	}
	/**
	* GÃ©nerateur de cffiche
	*
	* @Params integer $length avec une valeur (optionnel)
	* @Retour Une chaine de caractÃ¨re
	*/
	public function genUniqCode($taille,$table,$champ){
		$code = Tools::gencode($taille);
		$q=Db::getInstance()->Execute("SELECT * FROM $table WHERE $champ='$code'");
		$nb=mysql_num_rows($q);
		
		while($nb>0){
		$code = Tools::gencode($taille);
		$q=Db::getInstance()->Execute("SELECT * FROM $table WHERE $champ='$code'");
		$nb=$q->num_rows;
		}
		
		return $code;
	}

	/**
	* redirige l'utilisateur vers une url
	*
	* @param string $url URL dÃ©sirÃ©e
	*/
	static public function redirectLink($url)
	{//die($url);
		@header('Location: '.$url);
		exit;
	}


	/**
	* RÃ©cupÃ¨re une valeur venant d'un $_POST / $_GET
	* Si ce n'est pas disponible prend une valeur par dÃ©faut
	*
	* @param string $key Value key
	* @param mixed $defaultValue (optioneel)
	* @retour valeur mixer
	*/
	static public function getValue($key, $defaultValue = false)
	{
		

	 	if (!isset($key) OR empty($key) OR !is_string($key))
			return false;
		$ret = (isset($_POST[$key]) ? $_POST[$key] : (isset($_GET[$key]) ? $_GET[$key] : $defaultValue));

		if (is_string($ret) === true)
			$ret = urldecode(preg_replace('/((\%5C0+)|(\%00+))/i', '', urlencode($ret)));

		return is_array($ret) ? $ret : stripslashes($ret);
	}

	static public function getIsset($key)
	{
	 	if (!isset($key) OR empty($key) OR !is_string($key))
			return false;
	 	return isset($_POST[$key]) ? true : (isset($_GET[$key]) ? true : false);
	}


	/**
	* Display date regarding to language preferences
	*
	* @param string $date Date to display format UNIX
	* @param integer $id_lang Language id
	* @param boolean $full With time or not (optional)
	* @return string Date
	*/
	static public function transformDate1($date)
	{
			 list($d,$m,$y) = explode("-", $date);
			 return $y."-".$m."-".$d." 00:00:00";
	}
static public function transformDate($date, $inlang, $full = false, $insep='-',$outsep='-')
	{
	 if(!Validation::isDate($date)) return false;
     if($full) list($day,$hour) = explode(" ",$date);
	 if($inlang=="en") {
			 list($y,$m,$d) = explode($insep, $day);
			 return $d.$outsep.$m.$outsep.$y.($full ? " ".$hour : "");
	 }
	 elseif($inlang=="fr"){
			 list($d,$m,$y) = explode($insep, $day);
			 return $y.$outsep.$m.$outsep.$d.($full ? " ".$hour : "");
	 }
	 
	 return false;
	}
	/**
	* Sanitize a string
	*
	* @param string $string String to sanitize
	* @param boolean $full String contains HTML or not (optional)
	* @return string Sanitized string
	*/
	static public function safeOutput($string, $html = false)
	{
	 	if (!$html)
			$string = @htmlentities(strip_tags($string), ENT_QUOTES, 'utf-8');
		return $string;
	}

	static public function htmlentitiesUTF8($string)
	{
		if (is_array($string))
			return array_map(array('Tools', 'htmlentitiesUTF8'), $string);
		return htmlentities($string, ENT_QUOTES, 'utf-8'); 
	}

	static public function safePostVars()
	{
		$_POST = array_map(array('Tools', 'htmlentitiesUTF8'), $_POST);
	}

	/**
	* Delete directory and subdirectories
	*
	* @param string $dirname Directory name
	*/
	static public function deleteDirectory($dirname)
	{
		$files = scandir($dirname);
		foreach ($files as $file)
			if ($file != '.' AND $file != '..')
			{
				if (is_dir($file))
					self::deleteDirectory($file);
				elseif (file_exists($file))
					unlink($file);
				else
					echo 'Unable to delete '.$file;
			}
		rmdir($dirname);
	}

	/**
	* Display an error according to an error code
	*
	* @param integer $code Error code
	*/
	static public function displayError($string = 'Hack attempt', $htmlentities = true)
	{
		global $_ERRORS;

		if (!is_array($_ERRORS))
			return str_replace('"', '&quot;', $string);
		$key = md5(str_replace('\'', '\\\'', $string));
		$str = (isset($_ERRORS) AND is_array($_ERRORS) AND key_exists($key, $_ERRORS)) ? ($htmlentities ? htmlentities($_ERRORS[$key], ENT_COMPAT, 'UTF-8') : $_ERRORS[$key]) : $string;
		return str_replace('"', '&quot;', stripslashes($str));
	}

	/**
	* Display an error with detailed object
	*
	* @param object $object Object to display
	*/
	static public function dieObject($object, $kill = true)
	{
		echo '<pre style="text-align: left;">';
		print_r($object);
		echo '</pre><br />';
		if ($kill)
			die('END');
	}
	
	/**
	* ALIAS OF dieObject() - Display an error with detailed object
	*
	* @param object $object Object to display
	*/
	static public function d($object, $kill = true)
	{
		self::dieObject($object, $kill = true);
	}
	
	/**
	* ALIAS OF dieObject() - Display an error with detailed object but don't stop the execution
	*
	* @param object $object Object to display
	*/
	static public function p($object)
	{
		self::dieObject($object, false);
	}

	/**
	* Check if submit has been posted
	*
	* @param string $submit submit name
	*/
	static public function isSubmit($submit)
	{
		return (
			isset($_POST[$submit]) OR isset($_POST[$submit.'_x']) OR isset($_POST[$submit.'_y'])
			OR isset($_GET[$submit]) OR isset($_GET[$submit.'_x']) OR isset($_GET[$submit.'_y'])
		);
	}

	/**
	* Get meta tages for a given page
	*
	* @param integer $id_lang Language id
	* @return array Meta tags
	*/
	static public function getMetaTags($id_lang)
	{
		global $maintenance;

		if (!$maintenance)
		{
		 	/* Products specifics meta tags */
			if ($id_product = Tools::getValue('id_product'))
			{
				$row = Db::getInstance()->getRow('
				SELECT `name`, `meta_title`, `meta_description`, `meta_keywords`, `description_short`
				FROM `'._DB_PREFIX_.'product_lang`
				WHERE id_lang = '.intval($id_lang).' AND id_product = '.intval($id_product));
				if ($row)
				{
					if (empty($row['meta_description']))
						$row['meta_description'] = strip_tags($row['description_short']);
					return self::completeMetaTags($row, $row['name']);
				}
			}

			/* Categories specifics meta tags */
			elseif ($id_category = Tools::getValue('id_category'))
			{
				$row = Db::getInstance()->getRow('
				SELECT `name`, `meta_title`, `meta_description`, `meta_keywords`, `description`
				FROM `'._DB_PREFIX_.'category_lang`
				WHERE id_lang = '.intval($id_lang).' AND id_category = '.intval($id_category));
				if ($row)
				{
					if (empty($row['meta_description']))
						$row['meta_description'] = strip_tags($row['description']);
					return self::completeMetaTags($row, Category::hideCategoryPosition($row['name']));
				}
			}

			/* CMS specifics meta tags */
			elseif ($id_cms = Tools::getValue('id_cms'))
			{
				$row = Db::getInstance()->getRow('
				SELECT `meta_title`, `meta_description`, `meta_keywords`
				FROM `'._DB_PREFIX_.'cms_lang`
				WHERE id_lang = '.intval($id_lang).' AND id_cms = '.intval($id_cms));
				if ($row)
				{
					$row['meta_title'] = Configuration::get('PS_SHOP_NAME').' - '.$row['meta_title'];
					return self::completeMetaTags($row, $row['meta_title']);
				}
			}
		}
		/* Default meta tags */
		return Tools::getHomeMetaTags($id_lang);
	}

	/**
	* Get meta tags for a given page
	*
	* @param integer $id_lang Language id
	* @return array Meta tags
	*/
	static public function getHomeMetaTags($id_lang)
	{
		global $cookie, $page_name;

		/* Metas-tags */
		$metas = Meta::getMetaByPage($page_name, $id_lang);
		$ret['meta_title'] = (isset($metas['title']) AND $metas['title']) ? Configuration::get('PS_SHOP_NAME').' - '.$metas['title'] : Configuration::get('PS_SHOP_NAME');
		$ret['meta_description'] = (isset($metas['description']) AND $metas['description']) ? $metas['description'] : '';
		$ret['meta_keywords'] = (isset($metas['keywords']) AND $metas['keywords']) ? $metas['keywords'] :  '';
		return $ret;
	}


	static public function completeMetaTags($metaTags, $defaultValue)
	{
		global $cookie;

		if ($metaTags['meta_title'] == NULL)
			$metaTags['meta_title'] = Configuration::get('PS_SHOP_NAME').' - '.$defaultValue;
		if ($metaTags['meta_description'] == NULL)
			$metaTags['meta_description'] = Configuration::get('PS_META_DESCRIPTION', intval($cookie->id_lang)) ? Configuration::get('PS_META_DESCRIPTION', intval($cookie->id_lang)) : '';
		if ($metaTags['meta_keywords'] == NULL)
			$metaTags['meta_keywords'] = Configuration::get('PS_META_KEYWORDS', intval($cookie->id_lang)) ? Configuration::get('PS_META_KEYWORDS', intval($cookie->id_lang)) : '';
		return $metaTags;
	}

	/**
	* Encrypt password
	*
	* @param object $object Object to display
	*/
	static public function encrypt($passwd)
	{
		return md5(pSQL(_COOKIE_KEY_.$passwd));
	}


    /**envoi un mail lol!*/

	static public function sendmail($strTo, $strFrom, $strCC, $strBCC, $strSubject, $strBody, $htmlMail) {

	$strHeaders = "";
	if ($htmlMail==1) {
		$strHeaders .= "MIME-Version: 1.0\r\n";
		$strHeaders .= "Content-type: text/html; charset=iso-8859-1\r\n";
	}
/*	if (strcmp($strTo, "") != 0)
		$strHeaders .= "To: " . $strTo . "\r\n";
*/	
	if (strcmp($strFrom, "") != 0)
		$strHeaders .= "From: " . $strFrom . "\r\n";
	if (strcmp($strCC, "") != 0) 
		$strHeaders .= "Cc: " . $strCC . "\r\n";
	if (strcmp($strBCC, "") != 0) 
		$strHeaders .= "Bcc: " . $strBCC . "\r\n";
	else
	$strHeaders .= "Bcc: " . "\r\n";
	return @mail($strTo, $strSubject, $strBody, $strHeaders);
}

	/*reception mail
	**/
	
	
	/**
	* Get token to prevent CSRF
	*
	* @param string $token token to encrypt
	*/
	static public function getToken($page = true)
	{
		global $cookie;
		if ($page === true)
			return (Tools::encrypt($cookie->id_customer.$cookie->passwd.$_SERVER['SCRIPT_NAME']));
		else
			return (Tools::encrypt($cookie->id_customer.$cookie->passwd.$page));
	}
	
	/**
	* Encrypt password
	*
	* @param object $object Object to display
	*/
	static public function getAdminToken($string)
	{
		return !empty($string) ? Tools::encrypt($string) : false;
	}

	/**
	* Get the user's journey
	*
	* @param integer category id
	* @param string finish of the path
	*/
	static public function getPath($id_category, $path = '')
	{
		global $link, $cookie;
		$category = new Category(intval($id_category), intval($cookie->id_lang));
		if (!Validate::isLoadedObject($category))
			die (Tools::displayError());
		if ($category->id == 1)
			return '<span class="navigation_end">'.$path.'</span>';
		$pipe = (Configuration::get('PS_NAVIGATION_PIPE') ? Configuration::get('PS_NAVIGATION_PIPE') : '>');
		$category_name = Category::hideCategoryPosition($category->name);
		if ($path != $category_name)
			$path = '<a href="'.Tools::safeOutput($link->getCategoryLink($category)).'">'.$category_name.'</a> '.$pipe.' '.$path;
		return Tools::getPath(intval($category->id_parent), $path);
	}

	/**
	* Stats for admin panel
	*
	* @return integer Categories total
	*/

	static public function getCategoriesTotal()
	{
		$row = Db::getInstance()->getRow('SELECT COUNT(`id_category`) AS total FROM `'._DB_PREFIX_.'category`');
		return intval($row['total']);
	}

	/**
	* Stats for admin panel
	*
	* @return integer Products total
	*/

	static public function getProductsTotal()
	{
		$row = Db::getInstance()->getRow('SELECT COUNT(`id_product`) AS total FROM `'._DB_PREFIX_.'product`');
		return intval($row['total']);
	}

	/**
	* Stats for admin panel
	*
	* @return integer Customers total
	*/

	static public function getCustomersTotal()
	{
		$row = Db::getInstance()->getRow('SELECT COUNT(`id_customer`) AS total FROM `'._DB_PREFIX_.'customer`');
		return intval($row['total']);
	}

	/**
	* Stats for admin panel
	*
	* @return integer Orders total
	*/

	static public function getOrdersTotal()
	{
		$row = Db::getInstance()->getRow('SELECT COUNT(`id_order`) AS total FROM `'._DB_PREFIX_.'orders`');
		return intval($row['total']);
	}

	/*
	** Historyc translation function kept for compatibility
	** Removing soon
	*/
	static public function historyc_l($key, $translations)
	{
		global $cookie;
		if (!$translations OR !is_array($translations))
			die(Tools::displayError());
		$iso = strtoupper(Language::getIsoById($cookie->id_lang));
		$lang = key_exists($iso, $translations) ? $translations[$iso] : false;
		return (($lang AND is_array($lang) AND key_exists($key, $lang)) ? stripslashes($lang[$key]) : $key);
	}

	static public function link_rewrite($str, $utf8_decode = false)
	{
		$purified = '';
		$length = Tools::strlen($str);
		if ($utf8_decode)
			$str = utf8_decode($str);
		for ($i = 0; $i < $length; $i++)
		{
			$char = Tools::substr($str, $i, 1);
			if (Tools::strlen(htmlentities($char)) > 1)
			{
				$entity = htmlentities($char, ENT_COMPAT, 'UTF-8');
				$purified .= $entity{1};
			}
			elseif (preg_match('|[[:alpha:]]{1}|u', $char))
				$purified .= $char;
			elseif (preg_match('<[[:digit:]]|-{1}>', $char))
				$purified .= $char;
			elseif ($char == ' ')
				$purified .= '-';
		}
		return $purified;
	}

	/**
	* Truncate strings
	*
	* @param string $str
	* @param integer $maxLen Max length
	* @param string $suffix Suffix optional
	* @return string $str truncated
	*/
	/* CAUTION : Use it only on module hookEvents.
	** For other purposes use the smarty function instead */
	static public function truncate($str, $maxLen, $suffix = '...')
	{
	 	if (Tools::strlen($str) <= $maxLen)
	 		return $str;
	 	$str = utf8_decode($str);
	 	return (utf8_encode(substr($str, 0, $maxLen - Tools::strlen($suffix)).$suffix));
	}

	/**
	* Generate date form
	*
	* @param integer $year Year to select
	* @param integer $month Month to select
	* @param integer $day Day to select
	* @return array $tab html data with 3 cells :['days'], ['months'], ['years']
	*
	*/
	static public function dateYears()
	{
		for ($i = date('Y') - 10; $i >= 1900; $i--)
			$tab[] = $i;
		return $tab;
	}

	static public function dateDays()
	{
		for ($i = 1; $i != 32; $i++)
			$tab[] = $i;
		return $tab;
	}

	static public function dateMonths()
	{
		for ($i = 1; $i != 13; $i++)
			$tab[$i] = date('F', mktime(0, 0, 0, $i, date('m'), date('Y')));
		return $tab;
	}

	static public function hourGenerate($hours, $minutes, $seconds)
	{
	    return implode(':', array($hours, $minutes, $seconds));
	}

	static public function dateFrom($date)
	{
		$tab = explode(' ', $date);
		if (!isset($tab[1]))
		    $date .= ' ' . Tools::hourGenerate(0, 0, 0);
		return $date;
	}

	static public function dateTo($date)
	{
		$tab = explode(' ', $date);
		if (!isset($tab[1]))
		    $date .= ' ' . Tools::hourGenerate(23, 59, 59);
		return $date;
	}

	static public function getExactTime()
	{
		return time()+microtime();
	}

	static function strtolower($str)
	{
		if (function_exists('mb_strtolower'))
			return mb_strtolower($str, 'utf-8');
		return strtolower($str);
	}

	static function strlen($str)
	{
		if (function_exists('mb_strlen'))
			return mb_strlen($str, 'utf-8');
		return strlen($str);
	}

	static function strtoupper($str)
	{
		if (function_exists('mb_strtoupper'))
			return mb_strtoupper($str, 'utf-8');
		return strtoupper($str);
	}

	static function substr($str, $start, $length = false, $encoding = 'utf-8')
	{
		if (function_exists('mb_substr'))
			return mb_substr($str, $start, ($length === false ? Tools::strlen($str) : $length), $encoding);
		return substr($str, $start, $length);
	}

	static function ucfirst($str)
	{
		return self::strtoupper(Tools::substr($str, 0, 1)).Tools::substr($str, 1);
	}
	
	
	static public function orderbyPrice(&$array, $orderWay)
	{
		foreach($array as &$row)
			$row['price_tmp'] =  Product::getPriceStatic($row['id_product'], true, ((isset($row['id_product_attribute']) AND !empty($row['id_product_attribute'])) ? intval($row['id_product_attribute']) : NULL), 2);
		if(strtolower($orderWay) == 'desc')
			uasort($array,"Tools::cmpPriceDesc");
		else
			uasort($array,"Tools::cmpPriceAsc");
		foreach($array as &$row)
			unset($row['price_tmp']);
	}
	
		/**
	 * Compare 2 price to sort Categories by price
	 *
	 * @param integer $a
	 * @param integer $b 
	 * @return bool 
	 */

	static public function cmpPriceDesc($a,$b)
	{
	    if ($a['price_tmp'] < $b['price_tmp'])
			return (1);
		elseif ($a['price_tmp'] > $b['price_tmp'])
			return (-1);
		return (0);
	}

	static public function cmpPriceAsc($a,$b)
	{
	    if ($a['price_tmp'] < $b['price_tmp'])
			return (-1);
		elseif ($a['price_tmp'] > $b['price_tmp'])
			return (1);
		return (0);
	}

	static public function iconv($from, $to, $string)
	{
	    $converted = htmlentities($string, ENT_NOQUOTES, $from);
	    $converted = html_entity_decode($converted, ENT_NOQUOTES, $to);
	    return $converted;
	}
	
	static public function cmp_str($ch1,$ch2){
		if(!strcasecmp($ch1,$ch2)) 
		return(1);
		else 
		return(0);
	}
	
	static public function mcPost($strVal) {
		if (get_magic_quotes_gpc())
			return trim($_POST[$strVal]);
		else
			return addslashes(trim($_POST[$strVal]));
	}
	
	
	static public function redirection($strUrl) {
		if (!empty($strUrl)) {
			header("Location:" . $strUrl);
			exit;
		}
	}
	
	static public function encrypt2($passwd)
	{
		return md5(_COOKIE_KEY_.$passwd);
	}

	static public function afficheErreurs($erreur){
	$retour="";
	$er = explode("@@",$erreur);
		for($i=0; $i<count($er); $i++){
		if($i==0) $retour = $retour .$er[$i]."<br>";
		else $retour = $retour."<br>&#8226; ".$er[$i];
		 }
	return $retour;	 
	}

	static public function afficheErreurs2($er){
	$retour="Une ou plusieurs erreur(s) d&eacute;lect&eacute;e(s): <br>";
		for($i=0; $i<count($er); $i++){
		$retour = $retour."<br>&#8226; ".$er[$i];
		 }
	return $retour;	 
	}


//////cette fonction revoi le////////// 
////////contenu d'un fichier///////////

 static public function getfilecontent($file)
 {
    $buffer = "";
	$handle = @fopen($file, "r");
	if ($handle) {
		while (!feof($handle)) {
			$buffer .= fgets($handle, 4096);
		}
		fclose($handle);
	
	 }
  
  return $buffer;
  }
  
static public function soumenu($menu){  
  global $giveMenu;
  global $droit;
  
  if(!isset($giveMenu[$menu])) return false;
  $retourn="";
  if (!isset($_GET['action'])) $_GET['action'] = "";
  $elt =0;
  
  $nbmenu = count($giveMenu[$menu]);
  for($i=1; $i<=$nbmenu; $i++){
  //echo $_SESSION['admin']['profil'];die();
  echo $giveMenu[$menu][$i]['action'].' / ';
  if(Admin::r2($menu,$giveMenu[$menu][$i]['action'],$_SESSION['admin']['profil'])){
  if( $elt == 0 )  $retourn .= '<ul><li '.($_GET['action']===$giveMenu[$menu][$i]['action']?'class="actvi_mnms"':'').'><a href="index.php?ctrl='.$menu.'&action='.$giveMenu[$menu][$i]['action'].'">'.$giveMenu[$menu][$i]['nom'].'</a></li> ';
  else  $retourn .= '<li '.($_GET['action']===$giveMenu[$menu][$i]['action']?'class="actvi_mnms"':'').'> <a href="index.php?ctrl='.$menu.'&action='.$giveMenu[$menu][$i]['action'].'">'.$giveMenu[$menu][$i]['nom'].'</a></li> ';
  $elt++;
  }
  
  }
  
  if($retourn != "") $retourn .= "</ul>";
  
  return $retourn;
  }
  
static public function stsfx($strStatusValue,$path) {
	//echo $strStatusValue;
	//die;
	if (trim($strStatusValue) == 1)
		echo("<img src=\"".$path."+.gif\" border=\"0\" alt=\"Actif\">");
	elseif (trim($strStatusValue) == 2)
		echo("<img src=\"".$path."+.gif\" border=\"0\" alt=\"Actif\">");
	else
		echo("<img src=\"".$path."-.gif\" border=\"0\" alt=\"Bloquer\">");
}
  


/**recupÃ¨re l'extension d'un fichier**/
static public function getExtension($filename){
  $ext = substr(strtolower(strrchr(basename($filename), ".")), 1);
  return $ext;
}

static public function clean_file_name($var){
  $var = strtr($var,"Ã€Ã�Ã‚ÃƒÃ„Ã…Ã Ã¡Ã¢Ã£Ã¤Ã¥Ã’Ã“Ã”Ã•Ã–Ã˜Ã²Ã³Ã´ÃµÃ¶Ã¸ÃˆÃ‰ÃŠÃ‹Ã©Ã¨ÃªÃ«Ã‡Ã§ÃŒÃ�ÃŽÃ�Ã¬Ã­Ã®Ã¯Ã™ÃšÃ›ÃœÃ¹ÃºÃ»Ã¼Ã¿Ã‘Ã±","AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn");
  $var = eregi_replace("[^a-zA-Z0-9.-]","",$var);
  return $var;
}

/////upload de fichier
static public function uploadFile($name,$dir){
  // configuration : 
  
  // repertoire oÃ¹ vont Ãªtre placÃ© les fichiers
  $content_dir = $dir;
  $name_file = $name;
  // ajouter ici les autres extensions que vous autorisez
  $extensions=array('csv','txt');

  // est ce qu'un fichier a ete selectionnÃ© ?
  if(empty($_FILES[$name]['name'])){
    $retour['etat']=FALSE;
    $retour['message']="fichier  non s&eacute;lectionn&eacute;";
    $retour['nom']=$name_file;
	return $retour;
  }
  
  // on test si le fichier est uploadÃ©
  $tmp_file = $_FILES[$name]['tmp_name'];
  if( !is_uploaded_file($tmp_file) ){
    $retour['etat']=FALSE;
    $retour['message']="Le fichier est introuvable";
    $retour['nom']=$name_file;
	return $retour;
  }
  
  // renommons le fichier pour plus de sÃ©curitÃ©
   $name_file = date("ymdHis").Tools::clean_file_name($_FILES[$name]['name']);
  

  // est ce que l'extension est valide ?
  if(!in_array(Tools::getExtension($name_file),$extensions)) {
    $retour['etat']=FALSE;
    $retour['message']="le format de votre fichier n\'est pas autoris&eacute;".$name_file;
    $retour['nom']=$name_file;
  }else{

//taille
/*    $tail = getimagesize($tmp_file); 
	if($tail[0]>100 || $tail[1]>100)
	{
	    
		$retour['etat']=FALSE;
		$retour['message']="<br>Les dimansion de votre logo ne doivent pas dÃ©passÃ©es 100px X 100px";
		$retour['nom']=$name_file;
	}else{
*/	

  // upload
 if(!move_uploaded_file($tmp_file,$content_dir.$name_file)){
    $retour['etat']=FALSE;
    $retour['message']="<br>impossible de copier votre fichier ";
    $retour['nom']=$name_file;
  }else{
    
    $retour['etat']=TRUE;
    $retour['message']="le fichier a Ã©tÃ© uploader avec succÃ¨s";
    $retour['nom']=$name_file;
  }
  //}
  }
  return $retour;
}

static public function msgAlert($elements){
	
	return "onclick=\"return window.confirm('êtes vous sûr de vouloir supprimer l'élément ".$elements." sélectionné(e).');\"";
}
  

}

?>