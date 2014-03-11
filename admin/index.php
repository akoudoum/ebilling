<?php
    session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
    ob_start();
    include("inc.php");
     if(!Db::getInstance()){
    	header("LOCATION:../installation/");
    	exit();
    }
	
	/** 
	 * Redirect request to controler
	 */
	function forward($ctrlName) {
		$control = getCtrlForName($ctrlName);
		// enregistrement du controleur.
		$_SESSION['control']=$control;
		// dispatch la requête.
		$control->execute();
	}
	
	/**
	 * Return controler found by its name
	 */
	function getCtrlForName($name) {
		global $db;
		if(!isset($_SESSION['admin']) and $name!="askpasswd") return new connexion();

		switch($name) {
		case "GestionAdmin":
			return new GestionAdmin();
		break;
		case "GestionFacture":
			return new GestionFacture();
		break;
		case "askpasswd":
			return new askpasswd();
		break;
		case "MonCompte":
			return new MonCompte();
		break;
		
		default :
		    return new connexion();	
		}
	}

//$contenuCache = ob_get_contents();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Panneau Administrateur::..Facturation Ebay</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../include/js.js">
</script>
<script type="text/javascript" src="calandrier/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118">
</script>

<style type="text/css">
	#ad{
		padding-top:220px;
		padding-left:10px;
	}
<!--
-->
</style>
<link type="text/css" rel="stylesheet" href="calandrier/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></link>

</head>

<body>
<div id="main">
<div id="head"> <img src="../images/banner.jpg" width="800" height="66" /> </div>
<div id="conteneur">
  <?php 
  if(isset($_SESSION['admin'])){
  ?>

    <div style="adminbar">
      <div align="left" class="labele">Bienvenue <a href="index.php?ctrl=MonCompte" class="nump"><strong>
        <?php if(!empty($_SESSION['admin']['nom'])) echo $_SESSION['admin']['nom']; else echo $_SESSION['admin']['email']; ?>
      </strong></a> [ <a href="index.php?ctrl=MonCompte" class="mn2"><strong>Editer mon compte</strong></a> ] | <a href="logout.php" target="_self" class="nump">D&eacute;connexion</a> 
      </div>
    </div>
    
    
    <div id="menu_admin">
    <ul>
    
	 
      <li <?php if(isset($_GET['ctrl']))if($_GET['ctrl']==='GestionAdmin') echo 'class="actvi_mnm"';?>>
          <a href="index.php?ctrl=GestionAdmin">Comptes Administrateurs</a>
      </li>
	
      <li <?php if(isset($_GET['ctrl']))if($_GET['ctrl']==='GestionFacture') echo 'class="actvi_mnm"';?>>
         <a href="index.php?ctrl=GestionFacture">Gestion des factures</a>
      </li>
       
      
    </ul>
    </div>
    
    
  
	<div id="sous_menu"><?php echo Tools::soumenu($_GET['ctrl'])?><hr class="clear"/></div>
    
    <div id="contenu">
	  <?php 
	  
	  }
	  	if( isset($_GET['ctrl'])) {
			$ctrl = $_GET['ctrl'];
		} else {
			$ctrl = "connexion";
		}
                //ob_end_flush();	
		forward($ctrl);
	
	  ?>
    </div>
    
    <div id="footer"><?php include("footer.php");?></div>
    
 </div>
</div>
</body>
</html>