<?php 
class connexion
{
 public $er = array();

 function valider(){
    $admin = new Admin();

	$passwd = trim(Tools::getValue('passwd'));
	$email = trim(Tools::getValue('email'));
	if (empty($email) && empty($passwd))
		$this->er[] = Tools::displayError('l\'e-mail et mot de passe vide');
	elseif (empty($email))
		$this->er[] = Tools::displayError('l\'e-mail est vide');
	elseif (!Validate::isEmail($email))
		$this->er[] = Tools::displayError('address e-mail invalide');
	elseif (empty($passwd))
		$this->er[] = Tools::displayError('le mot de passe est vide');
	elseif (!Validate::isPasswd($passwd))
		$this->er[] = Tools::displayError('mot de passe invalide');
  else{

$ad = $admin->getByemail($email, Tools::encrypt($passwd));
if(!$ad) $this->er[] = "Email ou mot de passe incorrect ";//.Tools::encrypt("admin2011");
else {
if($ad->active != 1){
$this->er[] = "Désolé, votre compte est bloqué";
}else{
$_SESSION['admin']['id_client'] = $ad->id_client; 	
$_SESSION['admin']['nom'] = $ad->nom; 	
$_SESSION['admin']['prenom'] = $ad->prenom; 	
$_SESSION['admin']['email'] = $ad->email; 	
$_SESSION['admin']['adresse'] = $ad->adresse; 	
$_SESSION['admin']['telephone'] = $ad->telephone;
$_SESSION['admin']['profil'] = Admin::droits($ad->profil);

ob_end_clean();
Tools::redirectLink("index.php?ctrl=MonCompte");

  }
 }
}

}


function execute(){

if(isset($_SESSION['admin'])) {
   ob_end_clean();
   Tools::redirectLink("index.php?ctrl=MonCompte");
   }
elseif(isset($_GET['expir'])){
if($_GET['expir'] == 1) $this->er[] = 'Désolé, votre session est expirer';
}

if(isset($_GET['action'])) $this->action = $_GET['action'];
	else $this->action = "";
	
switch($this->action) {
case 'valider':
 $this->valider();
 break;
 default:;

}

?>
 	  
    
     <form action="index.php?ctrl=connexion&action=valider" method="post" onSubmit="return validate(this);">
     <div class="formulaire formulaire50cent">
     
      <div class="head_form">Acc&egrave;s administrateur </div>
      
      <div class="hBox">
	      <?php if(isset($this->er) and count($this->er)>0){?>
		  <div class="alert"><?php  echo Tools::afficheErreurs2($this->er);?></div>
		  <?php }?>
	  </div>
	  
      <div class="hBox">
        <div class="leftcol">&nbsp;&nbsp;&nbsp;Email : </div>
        <div class="rightcol">
           <label>
             <input name="email" type="text" id="email" />
           </label>
           <input name="send" type="hidden" id="send" value="1" />
        </div>
      </div>
      
      <div class="hBox">
	      <div class="barrevert">&nbsp;</div>
      </div>
      
      <div class="hBox">
        <div class="leftcol">&nbsp;&nbsp;&nbsp;Mot de passe : </div>
        <div class="rightcol">
          <label>
            <input name="passwd" type="password" id="passwd" />
          </label>
        </div>
      </div>
      
     <div class="hBox">
	      <div class="barrevert">&nbsp;</div>
      </div>
      
      
      <div class="hBox">
        <div class="leftcol">&nbsp;</div>
        <div class="rightcol">
          <label>
            <input name="connexion" type="submit" class="bouton" id="connexion" value="..:: Entrer ::.." />
          </label>
        </div>
      </div>
      
      <div class="hBox">
	      <div class="barrevert">&nbsp;</div>
      </div>
      
      <div class="hBox centrer">
      <a href="index.php?ctrl=askpasswd" class="nump">Mot de passe oubli&eacute;?</a>
      </div>
      
      
    </div>
    </form>
<?php 
  }
}
?>