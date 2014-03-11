<?php 

class Options
{

public function execute(){
if(isset($_GET['action'])) $this->action = $_GET['action'];
	else $this->action = "";
	
switch($this->action) {
case 'valider':
if(!Admin::r($_SESSION['admin']['profil'],4))
Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
 $this->valider();
 break;
case 'EditerProfil':
if(!Admin::r($_SESSION['admin']['profil'],14))
Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
 $this->EditerProfil();
 break;
 default :
     $this->option();

 }
}

////////////////////////////////////
public function option(){
?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>	  
  
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="1" class="bord" style="font-weight:bold">
    <tr>
      <td colspan="2" bgcolor="#DDEEFF" class="head_form">Statistiques de la plateforme </td>
    </tr>
    <tr>
      <td width="258" bgcolor="#DDEEFF">Nombre de comptes administrateur : </td>
      <td width="231" bgcolor="#DDEEFF">
	  <?php 
	    $sql = "SELECT count(id_admin) AS nb FROM admins";
		$q = Db::getInstance()->Execute($sql);
		$l = mysql_fetch_array($q);
		echo $l['nb'];
	  ?>
	  </td>
    </tr>
<tr>
      <td bgcolor="#DDEEFF">Nombre de membres inscrit: </td>
      <td bgcolor="#DDEEFF">
	  <?php 
	    $sql = "SELECT count(id_client) AS total FROM clients";
		$q = Db::getInstance()->Execute($sql);
		$l = mysql_fetch_array($q);
		echo $l['total'];
	  ?>
	  </td>
    </tr>	
    <tr>
      <td bgcolor="#DDEEFF">Montant des ventes d&eacute;j&agrave; r&eacute;aliser: </td>
      <td bgcolor="#DDEEFF">
	  <?php 
	    $sql = "SELECT SUM(montant) AS total FROM cartes WHERE Statut = '1'";
		$q = Db::getInstance()->Execute($sql);
		$l = mysql_fetch_array($q);
		echo number_format($l['total'],0,'',' ');
	  ?> Fcfa
	  </td>
    </tr>
    
    <tr>
      <td bgcolor="#DDEEFF">Montant des cartes nom vendu: </td>
      <td bgcolor="#DDEEFF">
	  <?php 
	    $sql = "SELECT SUM(montant) AS total FROM cartes WHERE Statut = '0'";
		$q = Db::getInstance()->Execute($sql);
		$l = mysql_fetch_array($q);
		echo number_format($l['total'],0,'',' ');
	  ?> Fcfa
	  </td>
    </tr>
    <tr>
      <td bgcolor="#DDEEFF">Montant des cartes vendu: </td>
      <td bgcolor="#DDEEFF">
	  <?php 
	    $sql = "SELECT SUM(montant) AS total FROM cartes WHERE Statut = '1'";
		$q = Db::getInstance()->Execute($sql);
		$l = mysql_fetch_array($q);
		echo number_format($l['total'],0,'',' ');
	  ?> Fcfa
	  </td>
    </tr>
  </table>

 </td>
</tr>
<?php
}

}
?>