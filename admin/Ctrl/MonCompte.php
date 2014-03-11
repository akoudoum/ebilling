<?php 
class MonCompte
{
 public $er = array();
 public $message;

 function valider(){
$admin = new Admin();
$admin = $admin->copyFromPost();

$this->er = $admin->validateControler(true);
$nb = count($this->er);

if($nb==0){
   if(!$admin->update()){
   $this->er[] = 'Les modification n\'ont pas pu &ecirc;tre  sauvegard&eacute;es'; 
   return $admin;
   }
   else{//////////////////////////////////
   
	   $this->message ='  <div class="bien" style="width:500px;margin:3px auto;text-align:center">
						    <p >Les modifications ont bien été sauvegardées</p>
						    <p>Merci</p>
  </div>
';
        $_SESSION['admin']['email'] = $admin->email;
        $_SESSION['admin']['nom'] = $admin->nom;
        return $admin;
	   }
	
	}else return $admin;

}

////////////////////////////////////////
 function pasacces(){
   
	   $message ='   <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> <div class="alert" style="width:500px;margin:3px auto;text-align:center">
						    <p >Désolé!!</p>
						    <p>Vous n\'avez les droits d\'accès à cette fonctionnalitée</p>
  </div>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>

';

echo $message;
}

////////////////////////////////////
function execute(){

if(!isset($_SESSION['admin']))
Tools::redirectLink("index.php?ctrl=connexion&expir=1");


if(isset($_GET['action'])) $this->action = $_GET['action'];
	else $this->action = "";
	
switch($this->action) {
case 'valider':
 $admin = $this->valider();
 break;
 default :
 $admin = new Admin();
 $admin = $admin->getObjectByEmail($_SESSION['admin']['email']);
 if(!$admin)
    Tools::redirectLink("logout.php"); 
 break;

}

?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>	  <?php if(isset($this->er) and count($this->er)>0){?>
	  <div class="alert" style="font-weight:normal"><?php  echo Tools::afficheErreurs2($this->er);?></div>
	  <?php 
	  }
	  if(!empty($this->message)) echo $this->message;
	  ?>
</td>
  </tr>
  <tr>
    <td>
	<h3>Bonjour <?php if(!empty($_SESSION['admin']['nom'])) echo $_SESSION['admin']['nom']; else echo $_SESSION['admin']['email']; ?>, voici les informations consernant votre compte administrateur. Vous pouvez les &eacute;diter </h3>
	  <div id="form_inscription" class="bord">
	      <form action="index.php?ctrl=MonCompte&action=valider" method="post">
	    <label for="nom">Nom</label><input name="nom" id="nom" type="text" value="<?php echo $admin->nom; ?>" /><br />
		<label for="email">Email</label><input name="email" type="text" id="email" value="<?php echo $admin->email; ?>" /><br /><br />
		<div class="labele" style="padding-left:30px">Pour modifier votre mot de passe, entrez le nouveau mot de passe et sa confirmation</div>
		<br />
		<label for="passwd">Nouveau mot de passe </label>
		<input name="passwd" type="password" id="passwd" />
		<br />
		<label for="passwd2">Confirmez</label>
		<input name="passwd2" type="password"  id="passwd2"/>
		<input name="id" type="hidden" id="id" value="<?php echo $admin->id; ?>" />
		<br />
		<label>&nbsp;</label><input name="valider" type="submit" value="..:: Enregistrer les modifications ::.." class="bouton" />
	  </form>
</div>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="bouton">&nbsp;</td>
  </tr>
<?php 
  }
}
?>