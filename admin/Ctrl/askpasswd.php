<?php 
class askpasswd
{


 function valider(){
$admin->copyFromPost();

$file = dirname(__FILE__)."/messages/fr/motdepasseoublie_admin.txt";
$ad = $admin->askpasswd($file);
if(!$ad) $er[] = "Impossible d'envoyer votre mot de passe";
else {
	   $message ='  <div class="bien" style="text-align:center">
                            <p>&nbsp;</p>
						    <p >Un nouveau mot de passe vient d\'&ecirc;tre &agrave; votre adresse e-mail</p>
						    <p>Veuillez vous connecter &agrave; votre bo&icirc;te e-mail pour le relever </p>
						    <p>Merci</p>
						    <p>En cas de problème veuillez nous adresser à: '.ASSISTANCE_.'. </p>
						    <p>&nbsp;</p>
  </div>
';
       include("msg.php");
	   exit(0);
}
}


function execute(){
if(isset($_GET['action'])) $this->action = $_GET['action'];
	else $this->action = "";
	
switch($this->action) {
case 'valider':
 $this->valider();
 break;

}

?>
 

  
    <form action="index.php?ctrl=askpasswd&action=valider" method="post" onSubmit="return validate(this);">
     <div class="formulaire formulaire50cent">
     
      <div class="head_form">Entrez votre e-mail pour recevoir votre nouveau mot de passe</div> 
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
        <div class="leftcol">&nbsp;</div>
        <div class="rightcol">
          <label>
            <input name="valider" type="submit" class="bouton" id="valider" value="..:: Envoyer ::.." />
          </label>
        </div>
      </div>
        
      <div class="hBox">
	      <div class="barrevert">&nbsp;</div>
      </div>
      
      <div class="hBox centrer">
      <a href="index.php?ctrl=connexion" class="nump">Se connecter </a>
      </div>
      
      </div>
    </form>
<?php 
  }
}
?>