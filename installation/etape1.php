<?php 
$sBasePath = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "installation" ) ) ;
@ini_set('max_execution_time', 70);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gestionnaire d'installation Facturation ebay</title>
<style type="text/css">
body{
font-family:Arial, Helvetica, sans-serif;
color:#000000;
font-size:12px}

.cellule{
background-color:#091058;
color:#FFFFFF}
.style1 {background-color: #091058; color: #FFFFFF; font-weight: bold; }
.style2{color: #e81b11; font-weight: bold}
.textesize{
	font-size:0.8em}
</style>
<script language="javascript">
function chargeur(){
document.getElementById('chargeur').style.display='block';
document.getElementById('btn_continu').style.display='none';}
</script>
</head>

<body>

  <div style="width:650px; margin:auto"><img src="../images/banner.jpg" width="800" height="66" /></div>
<h1 align="center" style="width:650px; margin:auto">Configuration de la base de donn&eacute;es</h1>
<div align="center" style="margin-top:10px; background-color:#06F; color:#FFF; width:650px; margin:0 auto; padding:0"> #1: Pr&eacute;-installation ||   <strong style="color:#FF0">#2: Configuration de la base de donn&eacute;es</strong> || #3: Configuration principale</div>

<p>&nbsp;</p>
<?php

if (!isset($_POST['username']) || !isset($_POST['host']) || !isset($_POST['dbname']))
{
?>
<form name="form1" method="post" action="" onsubmit="chargeur();">
  <table width="550" border="0" align="center" style="border:1px #CCC solid">
    <tr>
      <td width="257" valign="top"><div align="right">Nom de l'utilisateur de la base de donn&eacute;es: </div></td>
      <td width="283" class="textesize"><input name="username" type="text" id="username">
      <br />
      Soit&nbsp;<strong>'root'</strong>&nbsp;ou un identifiant fourni par votre h&eacute;bergeur</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Mot de passe de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="password" type="text" id="password">
        <br />
      Pour la s&eacute;curit&eacute; du site l'utilisation d'un mot de passe est obligatoire pour le compte mysql. C'est le m&ecirc;me mot de passe utilis&eacute; pour acc&eacute;der &agrave; votre base de donn&eacute;es.</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Nom du serveur de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="host" type="text" id="host" value="localhost">
        <br />
      Habituellement&nbsp;<strong>'localhost'</strong>&nbsp;ou un nom d'h&ocirc;te fourni par votre h&eacute;bergeur</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Nom de la base de données: </div></td>
      <td class="textesize"><input name="dbname" type="text" id="dbname" />
        <br />
      Certains h&eacute;bergeurs limitent le nombre de noms de BDD par site. Utilisez dans ce cas les pr&eacute;fixes de table pour distinguer les sites Joomla! utilisant la m&ecirc;me base de donn&eacute;es.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Adresse complet du script: </div></td>
      <td>http://
        <input name="url" type="text" id="url" size="30" value="<?php echo $sBasePath; ?>" /></td>
    </tr>
  </table>
  
  <p align="center" id="chargeur" style="display:none"><span style="border:dashed 2px #FF0000; background-color:#FFFF00">Le traitement est en cours veillez patienter</span> <br /><br />
    <img src="../images/chargeur.gif" width="220" height="19" /></p>
	
  <div align="center" id="btn_continu">
  
  <input type="submit" name="Submit" value="Continuer&gt;&gt;">
  </div>
</form>
  <?php
}
else
{

	$connect=@mysql_connect ( $_POST['host'], $_POST['username'] , $_POST['password'] );
	if ($connect)
	{
		$dbres=@mysql_select_db (  $_POST['dbname'] );
		if ($dbres)
		{
			//on lit fichier template des paramètres de connexion
		    $f = fopen ("../include/settings.sample.inc.php", "r");
		    $contenu = fread ($f, filesize ("../include/settings.sample.inc.php"));
		    fclose ($f);
			//////////////////////////////////////////////////////
 			$contenu=str_replace("{dbserver}", $_POST['host'], $contenu);
			$contenu=str_replace("{dbname}", $_POST['dbname'], $contenu);
			$contenu=str_replace("{dbuser}", $_POST['username'], $contenu);
			$contenu=str_replace("{dbpassword}", $_POST['password'], $contenu);
            //initialisation des paramètres de connection 
		    // vérifier si le fichier existe bien et si on peut écrire.

		   if (is_writable("../include/settings.inc.php")) {
		   //on écrase tout le contenu lors de l'écriture.

		   if (!$handle = fopen("../include/settings.inc.php", "w+")) {
				 echo "Impossible d'ouvrir le fichier  (".'"../include/settings.inc.php"'.")";
				 exit;
		   }
		   // écriture.

		   if (fwrite($handle, $contenu) === FALSE) {
			   echo "Impossible d'&eacute;crire dans le fichier (".'"../include/settings.inc.php"'.") SVP v&eacute;rifiez que vous avez mis les droits d'acc&egrave;s &agrave; 666";
			   exit;
		   }
		   //fermeture du fichier
		   fclose($handle);
		   } else {
		   echo "on ne peut pas &eacute;crire dans le fichier ".'"../include/settings.inc.php"'."  SVP v&eacute;rifiez que vous avez mis les droits d'acc&egrave;s &agrave; 666 ";
		   }

	        //////////////////////////////////////////
            //Exécution du fichier SQL
		    $f = fopen ("../db/mysql_install.sql", "r");
		    $contenu = fread ($f, filesize ("../db/mysql_install.sql"));
		    fclose ($f);
            $val=explode(";", $contenu);//print_r($val);
            $max = count($val);
            for ($i=0; $i<$max; $i++)
            {
            $query=trim($val[$i]);
            $query = str_replace("||", ";", $query);
            
           // echo $query ."<br><br>";
			if(!empty($query) || $query=="")
            mysql_query($query) or die("Error lors de l'ex&eacute;cution du fichier sql d'installation : ".mysql_error()." : requette : ".$query);
            
			}
			
			
      
			?>
			 <center>
			   <span style="font-weight:bold; color:#006600">Succ&egrave;s! Les param&egrave;tres de la base de donn&eacute;es sont corrects.</span> 
			   <br><input type="button" value="Continuer pour l'&eacute;tape suivante &gt;&gt;" onClick="javascript: window.location.href='etape2.php';"> 
</center>
			<?php
		  }else{
			?>
<form name="form1" method="post" action="" onsubmit="chargeur();" style="border:1px #CCC solid">
  <table width="550" border="0" align="center">
    <tr>
      <td><div align="right">Nom de l'utilisateur de la base de donn&eacute;es: </div></td>
      <td width="283" class="textesize"><input name="username" type="text" id="username" />
        <br />
        Soit&nbsp;<strong>'root'</strong>&nbsp;ou un identifiant fourni par votre h&eacute;bergeur</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Mot de passe de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="password" type="text" id="password" />
        <br />
      Pour la s&eacute;curit&eacute; du site l'utilisation d'un mot de passe est obligatoire pour le compte mysql. C'est le m&ecirc;me mot de passe utilis&eacute; pour acc&eacute;der &agrave; votre base de donn&eacute;es.</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Nom du serveur de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="host" type="text" id="host" value="localhost" />
        <br />
      Habituellement&nbsp;<strong>'localhost'</strong>&nbsp;ou un nom d'h&ocirc;te fourni par votre h&eacute;bergeur</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Nom de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="dbname" type="text" id="dbname" />
        <br />
      Certains h&eacute;bergeurs limitent le nombre de noms de BDD par site. Utilisez dans ce cas les pr&eacute;fixes de table pour distinguer les sites Joomla! utilisant la m&ecirc;me base de donn&eacute;es.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Adresse complet du script: </div></td>
      <td>http://
      <input name="url" type="text" id="url" size="30" value="<?php echo $sBasePath; ?>" /></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <div align="center">
			  <center>
			    <span class="style2">   <p align="center" id="chargeur" style="display:none"><span style="border:dashed 2px #FF0000; background-color:#FFFF00">Le traitement est en cours veillez patienter</span> <br /><br />
    <img src="../images/chargeur.gif" width="220" height="19" /></p>
Ech&egrave;c lors de la connexion &agrave; la  base de donn&eacute;es, SVP v&eacute;rifiez vos param&egrave;tres et recommencez !</span>


			  </center>
<input type="submit" name="Submit" value="Rev&eacute;rifier les param&egrave;tres">
</div>
</form>
			  <?php
		}
	}
	else
	{
		?>
<form name="form1" method="post" action="" onsubmit="chargeur();">
  <table width="550" border="0" align="center" style="border:1px #CCC solid">
    <tr>
      <td><div align="right">Nom de l'utilisateur de la base de donn&eacute;es: </div></td>
      <td width="283" class="textesize"><input name="username" type="text" id="username" />
        <br />
        Soit&nbsp;<strong>'root'</strong>&nbsp;ou un identifiant fourni par votre h&eacute;bergeur</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Mot de passe de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="password" type="text" id="password" />
        <br />
      Pour la s&eacute;curit&eacute; du site l'utilisation d'un mot de passe est obligatoire pour le compte mysql. C'est le m&ecirc;me mot de passe utilis&eacute; pour acc&eacute;der &agrave; votre base de donn&eacute;es.</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Nom du serveur de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="host" type="text" id="host" value="localhost" />
        <br />
      Habituellement&nbsp;<strong>'localhost'</strong>&nbsp;ou un nom d'h&ocirc;te fourni par votre h&eacute;bergeur</td>
    </tr>
    <tr>
      <td valign="top"><div align="right">Nom de la base de donn&eacute;es: </div></td>
      <td class="textesize"><input name="dbname" type="text" id="dbname" />
        <br />
      Certains h&eacute;bergeurs limitent le nombre de noms de BDD par site. Utilisez dans ce cas les pr&eacute;fixes de table pour distinguer les sites Joomla! utilisant la m&ecirc;me base de donn&eacute;es.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Adresse complet du script: </div></td>
      <td>http://
      <input name="url" type="text" id="url" size="30" value="<?php echo $sBasePath; ?>" /></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <div align="center">  <p align="center" id="chargeur" style="display:none"><span style="border:dashed 2px #FF0000; background-color:#FFFF00">Le traitement est en cours veillez patienter</span> <br /><br />
    <img src="../images/chargeur.gif" width="220" height="19" /></p>

		  <center>
		    <span class="style2">Ech&egrave;c lors de la connexion au serveur de base de donn&eacute;es, SVP v&eacute;rifiez vos param&egrave;tres et recommencez !</span>
		  </center>
		  <input type="submit" name="Submit" value="Rev&eacute;rifier les param&egrave;tres">
  </div>
</form>
		  <?php
	}
	

}
?>
<div>&nbsp;</div>
<div align="center" style="border-top:#000066 solid 1px; width:650px; margin:auto"><?php include("../admin/footer.php"); ?></div>
</div>
</body>
</html>