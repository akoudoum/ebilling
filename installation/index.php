<?php
if(isset($_POST['send'])){
	

$file = $_POST['dir'].'/include/settings.inc.php';

// Mise en place d'une connexion basique
$conn_id = @ftp_connect($_POST['server']);
if(!$conn_id) $ftp_error = 'Impossible d\'ouvrir une connexion FTP avec l\'hôte. vérifiez l\'adresse du serveur';
// Identification avec un nom d'utilisateur et un mot de passe
$login_result = @ftp_login($conn_id, $_POST['user'], $_POST['password']);

if(!$login_result) $ftp_error = 'Echèc de le connexion ftp. Utilisateur ou mot de passe incorrect';
// Tentative de modification des permissions du fichier $file en 644
if (@ftp_chmod($conn_id, 0666, $file) !== false) ;
else {
// Récupération du contenu d'un dossier
if(!isset($ftp_error))
$alldir = ftp_nlist($conn_id, ".");

}

// Fermeture de la connexion
@ftp_close($conn_id);
}
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
.style2 {color: #FF0000}
</style>
</head>

<body>

  <div style="width:650px; margin:auto"><img src="../images/banner.jpg" width="800" height="66" /></div>
<div style="width:650px; margin:auto">
  <h1 align="center" style="font-size:1.8em">Installation de Facturation eBay </h1>
</div>
<div style="width:650px; margin:auto">

  <div align="center">Ce script vous guidera tout au cours de l'installation de Facturation eBay </div>
  
  <div align="center" style="margin-top:10px; background-color:#06F; color:#FFF"> <strong style="color:#FF0">#1: Pr&eacute;-installation</strong> ||   #2: Configuration de la base de donn&eacute;es ||  #3: Configuration principale</div>
<div align="center">&nbsp;</div>
<div align="center">
  <table width="650" border="0" cellspacing="2" cellpadding="0">
    <tr>
      <td width="100" class="style1"><div align="center"># Etape 1 </div></td>
      <td width="550" class="cellule"><p style="text-align:left; margin-left:20px">D&eacute;compressez l'archive Zip et transf&eacute;rez le contenu <br />
        par FTP dans votre repertoire distant du serveur ( si cette &eacute;tape est d&eacute;j&agrave; r&eacute;alis&eacute;e, passons &agrave; l'&eacute;tape2)</p>        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style1"><div align="center"># Etape 2 </div></td>
      <td class="cellule"><div style="text-align:left; margin-left:20px"><strong>
	  <?php
	  if(is_writable("../incluse/settings.inc.php")) {
	  ?>
      Correct! le fichier "incluse/settings.inc.php" est accessible en &eacute;criture
      <?php }else{?>
      Rendez le ficchier &quot;incluse/settings.inc.php&quot; possible en &eacute;criture: Mettez  ces permissions &agrave; 666
      <?php }?>
      </strong><br />
        <br />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style1"><div align="center"># Etape 3 </div></td>
      <td class="cellule"><div style="text-align:left; margin-left:20px"><strong>Cr&eacute;ez une base de donn&eacute;es vide et un utilisateur pour cette base de donn&eacute;es</strong></div></td>
    </tr>
    <tr>
      <td height="16">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style1"><div align="center"># Etape 4 </div></td>
      <td class="style1"><div style="text-align:left; margin-left:20px">Ouvrez l'adresse  <?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?> pour lancer l'installation et suivez les instuctions </div></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
	  <?php
	  if(is_writable("../include/settings.inc.php")) {
	  ?>
      
        <div align="center">
        <strong style="font-size:1.3em; color:#090; font-weight:bold">F&eacute;licitation, tout est correct! Vous pouvez poursuivre votre installation</strong>...<br />
          <br />
<input type="submit" name="Submit" value="Continuer l'installation"  onClick="javascript: window.location.href='etape1.php';"/>
          </div>
   
      <?php }else{
		  
		  ?>
      <span class="browntext"><strong style="color:#F00; font-weight:700">L'installateur a d&eacute;tect&eacute; un certain probl&egrave;me avec les permissions sur le fichier <span class="text"> 'include/settings.inc.php</span>'.</strong><strong> Mettez  ces permissions &agrave; 666</strong><strong style="color:#F00; font-weight:700"><br />
      <br />
SVP corrigez ces probl&egrave;mes et actualisez votre page par la suite pour rev&eacute;rifier votre environement.</strong></span><strong><br />
<br />
<span class="text">Le probl&egrave;me qui a &eacute;t&eacute; d&eacute;tect&eacute; est un probl&egrave;me de permission du fichier 'incluse/settings.inc.php'.   Vous pourriez permettre &agrave; l'installateur de rem&eacute;dier &agrave; ce probl&egrave;mes automatiquement via FTP .</span></strong><span class="text"><br />
<br />
Vous devez corriger ces probl&egrave;mes manuellement, puis actualisez cette page, apr&egrave;s que les corrections ont &eacute;t&eacute; apport&eacute;es . La plus part des programmes FTP, comme FileZilla, FtpExpert, et autre ,   permettent aux utilisateurs de changer les permissions des fichiers et des dossiers sur le serveur  .</span><br />
<br />
<form action="" method="post">Nous pouvons le faire pour vous. il vous suffit de renseigner les champs ci-dessous:<br />
  <?php if (isset($ftp_error)) echo '<div style="color:#F00; font-weight:bold">'.$ftp_error.'</div>'; ?>
Adresse du serveur FTP du site:<br />
<label>
  <input name="server" type="text" id="server" size="40" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
</label>
<br />
Utilisateur:<br />
<label>
  <input name="user" type="text" id="user" size="40" />
</label>
<br />
Mot de passe:<br />
<label>
  <input name="password" type="password" id="password" size="40" />
</label>
<br />
<?php if (!isset($alldir)){ ?>
R&eacute;pertoire de publication du site:<br />
<label>
<?php 
$scriptdir = str_replace("/installation/index.php","",$_SERVER['PHP_SELF']);	

$dir = 'public_html'.$scriptdir;
?>
  <input name="dir" type="text" id="dir" size="40" value="<?php echo $dir; ?>" />
  <br />
  <br />
  <input type="submit" name="button" id="button" value="- - - Ex&eacute;cuter - - -" />
</label>
<?php }else{?>
R&eacute;pertoire de publication du site:<br />
<?php 
foreach($alldir as $name){
if(!empty($name) and $name!='.' and $name!='..'){
?>
<label>
  <input type="radio" name="dir" id="radio" value="<?php echo str_replace(".","",$name); ?>" /><?php echo str_replace(".","",$name); ?>
</label>
<br />


<?php 
}
 }
}?>
<input name="send" type="hidden" id="send" value="1" />
</form>
<?php }?>
      </td>
      </tr>
  </table>
</div>
<div align="center" style="margin-top:15px; border-top:#000066 solid 1px"><?php include("../admin/footer.php");?></div>
</div>

</body>
</html>
