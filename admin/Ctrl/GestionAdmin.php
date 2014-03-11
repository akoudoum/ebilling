<?php
class GestionAdmin
{
	public $er = array();
	public $message;


	public function execute(){
		if(isset($_GET['action'])) $this->action = $_GET['action'];
		else $this->action = "";

		switch($this->action) {
			case 'valider':
				if(!Admin::r($_SESSION['admin']['profil'],4))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->valider();
				break;
			case 'SaveAdmin':
				if(!Admin::r($_SESSION['admin']['profil'],6))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->SaveAdmin();
				break;
			case 'Voir':
				if(!Admin::r($_SESSION['admin']['profil'],2))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->Voir($_GET['id']);
			case 'CreerAdmin':
				if(!Admin::r($_SESSION['admin']['profil'],6))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->CreerAdmin();
				break;
			case 'Editer':
				if(!Admin::r($_SESSION['admin']['profil'],4))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->Editer($_GET['id']);
				break;
			case 'Supprimer':
				if(!Admin::r($_SESSION['admin']['profil'],3))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->Supprimer($_GET['id']);
				break;
			case 'Debloquer':
				if(!Admin::r($_SESSION['admin']['profil'],5))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->Debloquer();
				break;
			case 'Bloquer':
				if(!Admin::r($_SESSION['admin']['profil'],5))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->Bloquer();
				break;
			case 'liste':
				if(!Admin::r($_SESSION['admin']['profil'],1))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->liste();
				break;
			case 'ProfilsAdmin':
				if(!Admin::r($_SESSION['admin']['profil'],12))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->ProfilsAdmin();
				break;
			case 'SaveProfil':
				if(!Admin::r($_SESSION['admin']['profil'],13))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->SaveProfil();
				break;
			case 'UpdateProfil':
				if(!Admin::r($_SESSION['admin']['profil'],14))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->UpdateProfil();
				break;
			case 'VoirProfil':
				if(!Admin::r($_SESSION['admin']['profil'],21))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->VoirProfil();
				break;
			case 'SupprimerProfil':
				if(!Admin::r($_SESSION['admin']['profil'],15))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->SupprimerProfil();
				break;
			case 'EditerProfil':
				if(!Admin::r($_SESSION['admin']['profil'],14))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->EditerProfil();
				break;
			default :
				$this->liste();

		}
	}


	////////////////////////////////////////////////
	public function SupprimerProfil(){
		Db::getInstance()->Execute("DELETE FROM profil WHERE id_profil='".$_GET['id']."'");
		$this->message ='
	   <div class="bien" style="width:500px; margin:auto;font-weight:normal;text-align:center">
         <p>Correct!!</p>
		 <p >Le profil a bien été supprimer</p>
       </div>';
		$this->ProfilsAdmin();

	}

	////////////////////////////////////////////////
	public function SaveProfil(){
		if(empty($_POST['nom'])) $this->er[] = "<b>Nom du profile</b> est obligatoire";
		else $nom = Tools::mcPost("nom");

		if(isset($_POST['droits'])){
			if(count($_POST['droits'])<=0) $this->er[] = "Vous devez sélectionner aumoins un droit";
			else $droits = implode(";",$_POST['droits']);
		}

		if(count($this->er)==0){

			Db::getInstance()->Execute("INSERT INTO profil SET nom='$nom', droits='$droits'");
			$this->message ='  <div class="bien" style="width:500px;margin:3px auto;text-align:center">
						    <p >Profil créer</p>
  </div>
';
			unset($_POST);
			$this->ProfilsAdmin();

		}else  $this->ProfilsAdmin();


	}


	////////////////////////////////////////////////
	public function UpdateProfil(){
		if(empty($_POST['nom'])) $this->er[] = "<b>Nom du profile</b> est obligatoire";
		else $nom = Tools::mcPost("nom");
		if(count($_POST['droits'])<=0) $this->er[] = "Vous devez sélectionner aumoins un droit";
		else $droits = implode(";",$_POST['droits']);

		if(count($this->er)==0){

			Db::getInstance()->Execute("UPDATE profil SET nom='$nom', droits='$droits' WHERE id_profil ='".$_GET['id']."'");
			$this->message ='  <div class="bien" style="width:500px;margin:3px auto;text-align:center">
						    <p >Profil Editer</p>
  </div>
';
			unset($_POST);
			$this->EditerProfil();

		}else  $this->EditerProfil();


	}
	////////////////////////////////////////////////
	public function Bloquer(){

		Db::getInstance()->Execute("UPDATE admins SET active='0' WHERE id_admin='".$_GET['id']."'");
		$this->message ='  <div class="bien" style="text-align:center">
                            <p>Correct!!</p>
						    <p >Le compte administrateur a bien été Bloqué</p>
  </div>
';
		$this->liste();

	}


	////////////////////////////////////////////////
	public function Debloquer(){

		Db::getInstance()->Execute("UPDATE admins SET active='1' WHERE id_admin='".$_GET['id']."'");
		$this->message ='  <div class="bien" style="text-align:center">
                            <p>Correct!!</p>
						    <p >Le compte administrateur a bien été Debloqué</p>
  </div>
';
		$this->liste();

	}

	//////////////////////////////////////
	public function Supprimer($id){
		$admin = new Admin();
		$admin->id = $id;

		if(!$admin->delete()){
			$this->er[] = "Le compte n'a pas pu &ecirc;tre supprim&eacute;";
			$this->liste();
		}else{
			$this->message ='
	   <div class="bien" style="text-align:center">
          <p>Correct!!</p>
		  <p >Le compte administrateur a bien été supprim&eacute;</p>
       </div>';
			$this->liste();
		}

	}

	///////////////////////////////////////
	public function valider(){

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
  </div>
';
	   $this->Editer($admin->id);
			}

		}else $this->Editer($admin->id);

	}


	function SaveAdmin(){

		$admin = new Admin();
		$admin->copyFromPost();
		$this->er = $admin->validateControler(true);
		$nb = count($this->er);

		if($nb==0){
			if(!$admin->add());
			else{//////////////////////////////////
				 
				$file = dirname(__FILE__)."/../../messages/fr/inscription_admin.txt";
				$msg = Tools::getfilecontent($file);
	   $msg = str_replace("[nom]", $admin->nom, $msg);
	   $msg = str_replace("[email]", $admin->email, $msg);
	   $msg = str_replace("[password]",$_POST['passwd'],$msg);

	   if($msg != ""){
	   	$sjt = "Maayabi.com - Vos paramètres administrateur";
	   	Tools::sendmail($admin->email, EMAIL_ADMIN, "", "", $sjt, $msg, 0);
	   	/////////////////////////////////
	   }

	   $this->message ='  <div class="bien" style="text-align:center">
                            <p>&nbsp;</p>
						    <p >Le compte administrateur bien été sauvegardé</p>
						    <p>Un mail a été envoyé à l\'adresse Email utilisée pour l\'inscription</p>
						    <p>Merci !</p>
  </div>
';
	   $this->liste();
			}

		}
		else{
			$this->er[] = "Le compte n'a pas pu &ecirc;tre cr&eacute;&eacute;";
			$this->CreerAdmin();
		}

	}



	public function liste(){

		//if any records retrieved
		$page = Db::getInstance();
		$page->page();
		$page->classp="mn2";
		$page->classp1="mn2";
		$page->classs="mn2";
		$page->classs1="mn2";
		$page->classna="nump";
		$page->classn="mn2";
		$page->classpg="nump";
		if(isset($_POST['criteria'])) {
			$sql="SELECT * FROM admins WHERE ".$_POST['criteria']." LIKE '%".$_POST['what']."%'";
			$page->nom_page="index.php?ctrl=GestionAdmin&criteria=".$_POST['criteria']."&what=".$_POST['what']."&";
		}elseif(isset($_POST['sort'])){
			$sql="SELECT * FROM admins ORDER BY ".$_POST['sort']." ".$_POST['sortorder'];
			if(isset($_POST['ps']) && $_POST['ps']!="") $page->elt_page=$_POST['ps'];
			$page->nom_page="index.php?ctrl=GestionAdmin&sort=".$_POST['sort']."&sortorder=".$_POST['sortorder']."&ps=".$_POST['ps']."&";
		}else{
			$sql="SELECT * FROM admins  ORDER BY date_add DESC";
			$page->nom_page="index.php?ctrl=GestionAdmin&";
		}

		$page->nbTotalItem($sql);
		$cmd=$page->Getdata($sql);
		?>
		<?php
		if (mysql_num_rows($cmd) != 0) {
			?>


			<?php if(isset($this->er) and count($this->er)>0){?>
<div class="alert" style="font-weight: normal">
<?php  echo Tools::afficheErreurs2($this->er);?>
</div>
<?php
	  }
	  if(!empty($this->message)) echo $this->message;
	   
	  ?>
<table width="100%" border="0" cellpadding="2" cellspacing="1"
	class="bord">
	<tr>
		<td width="3%" class="head_tab">Voir</td>
		<td width="3%" class="head_tab">Editer</td>
		<td width="25%" class="head_tab">Nom</td>
		<td width="29%" class="head_tab">email</td>
		<td width="21%" class="head_tab">Profile</td>
		<td width="9%" class="head_tab">Statut</td>
		<td width="10%" class="head_tab">Supprimer</td>
	</tr>
	<tr>
		<td colspan="8" height="10" class="bgWhite"></td>
	</tr>
	<?php
	//loop thru records and display category listing
	while ($rs = mysql_fetch_array($cmd)) {

		?>
	<tr>
		<td class="row1" style="text-align: center"><?php if(Admin::r($_SESSION['admin']['profil'],2)){?>
			<a
			href="index.php?ctrl=GestionAdmin&action=Voir&id=<?php echo($rs["id_admin"]); ?>"><img
				src="../icones/36.gif" width="16" height="16" border="0"
				alt="visualiser" /> </a> <?php }?>
		</td>
		<td class="row1" style="text-align: center"><?php if(Admin::r($_SESSION['admin']['profil'],4)){?>
			<a
			href="index.php?ctrl=GestionAdmin&action=Editer&id=<?php echo($rs["id_admin"]); ?>"><img
				src="../icones/1.gif" width="16" height="16" border="0" alt="Editer" />
		</a> <?php }?>
		</td>
		<td class="row1" valign=top width="25%"><small><?php echo($rs["nom"]); ?>&nbsp;</small>
		</td>
		<td valign=top class="row1">&nbsp;<small><?php echo($rs["email"]); ?>
		</small>
		</td>
		<td valign=top class="row1"><?php echo Admin::profile($rs['profil']); ?>
		</td>
		<td align="center" class="row1"><?php if(Admin::r($_SESSION['admin']['profil'],5)){?>

		<?php if ($rs['active']==1){ ?> <a
			href="index.php?ctrl=GestionAdmin&action=Bloquer&id=<?php echo $rs["id_admin"]; ?>">actif</a>
			<?php }else{?> <a
			href="index.php?ctrl=GestionAdmin&action=Debloquer&id=<?php echo $rs["id_admin"]; ?>">Bloquer</a>
			<?php }
		}else{
			if ($rs['active']==1)echo 'actif';else echo 'Bloquer';
		}?>
		</td>
		<td align="center" class="row1"><?php if(Admin::r($_SESSION['admin']['profil'],2)){?>
			<a
			href="index.php?ctrl=GestionAdmin&action=Supprimer&id=<?php echo($rs["id_admin"]); ?>"
			onclick="return window.confirm('êtes vous sûr de vouloir supprimer ce compte administrateur.');">
				<img src="../icones/delete.gif" width="16" height="16" border="0"
				alt="Supprimer" /> </a> <?php }?>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="10" align="center"><?php echo $page->print_nb();  ?></td>
	</tr>
</table>

	<?php } else { ?>
<div class="BadMsg">Aucun utilisateur n'a &eacute;t&eacute;
	trouv&eacute;</div>
	<?php } ?>
<div class="head_form">[ Rechercher utilisateur]
	::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
</div>




<form action="index.php?ctrl=GestionAdmin" method="post" name="search"
	id="search">
	Rechercher les utilisateurs <a name="search" id="search"></a>: <input
		type="text" name="what" size="15"
		value="<?php if(isset($_POST["what"])) echo $_POST["what"];?>" /> <select
		name="criteria">
		<option value="nom"
		<?php if(isset($_POST['criteria']))if ($_POST['criteria']=="nom") echo 'selected="selected"'; ?>>Nom</option>
		<option value="email"
		<?php if(isset($_POST['criteria']))if ($_POST['criteria']=="email") echo 'selected="selected"'; ?>>Nom/Email</option>
	</select> <input name="search" type="submit" class="bouton" id="search"
		value="Ok" />
</form>


<form name=search action="index.php?ctrl=GestionAdmin" method="post">
	<p></p>
	Recherche par crit&egrave;re :<a name=sort></a><br /> Nombre
	d'utilisateur par page : <label> <select name="ps" class="optgrp"
		id="ps">
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="50">50</option>
	</select> </label> <br /> Par : <select name=sort>
		<option value="nom">Nom</option>
		<option value="email">Email</option>
	</select> <select name=sortorder>
		<option value="desc">D&eacute;croissant</option>
		<option value="asc">Croissant</option>
	</select> <input name=send type=submit class="bouton" id="send"
		value="Ok" />
</form>

		<?php }

		public function Voir($id){
			$admin = new Admin();
			$admin = $admin->getObjectById($id);
			if(!$admin)
			Tools::redirectLink("logout.php");
			?>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><?php if(isset($this->er) and count($this->er)>0){?>
		<div class="alert" style="font-weight: normal">
		<?php  echo Tools::afficheErreurs2($this->er);?>
		</div> <?php 
	}
	if(!empty($this->message)) echo $this->message;
	?>
	</td>
</tr>
<tr>
	<td>
		<h3>Visualisation d'un compte administrateur</h3> <span class="alert"
		style="margin-bottom: 10px">Vous ne pouvez en aucun cas modifier ce
			compte depuis cette page</span>
		<hr style="border: 0px solid #FFFFFF">
		<div id="form_inscription" class="bord">
			<form action="index.php?ctrl=MonCompte&action=valider" method="post">
				<label for="nom">Nom</label><input name="nom" type="text" id="nom"
					value="<?php echo $admin->nom; ?>" size="40" /> <br /> <label
					for="email">Email</label><input name="email" type="text" id="email"
					value="<?php echo $admin->email; ?>" size="40" /> <br /> <label>Profile:
				</label>
				<?php echo Admin::profile($admin->profil); ?>
				<br /> <br />
				<div class="labele" style="padding-left: 30px">Le mot de passe ne
					peut &ecirc;tre modifier que pas cette utilisateur depuis sont
					interface.</div>
				<br /> <label for="123">Mot de passe </label> <input name="123"
					type="password" id="123" value="**********" /> <br /> <input
					name="id" type="hidden" id="id" value="<?php echo $admin->id; ?>" />
				<br /> <label>&nbsp;</label><input name="valider" type="submit"
					value="..:: Enregistrer les modifications ::.." class="bouton"
					disabled="disabled" />
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

		public function Editer($id){
			$admin = new Admin();
			$admin = $admin->getObjectById($id);
			if(!$admin)
			Tools::redirectLink("logout.php");
			?>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><?php if(isset($this->er) and count($this->er)>0){?>
		<div class="alert" style="font-weight: normal">
		<?php  echo Tools::afficheErreurs2($this->er);?>
		</div> <?php 
	}
	if(!empty($this->message)) echo $this->message;
	?>
	</td>
</tr>
<tr>
	<td>
		<h3>Edition d'un compte administrateur</h3> Dans cette page, vous
		pouvez modifier ce compte administrateur

		<div id="form_inscription" class="bord">
			<form action="index.php?ctrl=GestionAdmin&action=valider"
				method="post">
				<label for="nom">Nom</label><input name="nom" type="text" id="nom"
					value="<?php echo $admin->nom; ?>" size="40" /> <br /> <label
					for="email">Email</label><input name="email" type="text" id="email"
					value="<?php echo $admin->email; ?>" size="40" /><br /> <label
					for="email">Profile</label> <select name="profil" id="profil">
					<?php
					$q = Db::getInstance()->Execute("SELECT * FROM profil");
					while($l=mysql_fetch_array($q)){
						?>
					<option value="<?php echo $l['id_profil']; ?>"
					<?php if(isset($admin->profil)) echo($l['id_profil']==$admin->profil?'selected="selected"':'')?>>
						<?php echo $l['nom'] ?>
					</option>
					<?php
					}
					?>
				</select> <br /> <br /> <br />
				<div class="labele" style="padding-left: 30px">Le mot de passe ne
					peut &ecirc;tre modifier que pas cette utilisateur depuis sont
					interface.</div>
				<br /> <label for="passwd">Mot de passe </label> <input name="123"
					type="password" id="123" value="**********" /> <br /> <input
					name="id" type="hidden" id="id" value="<?php echo $admin->id; ?>" />
				<br /> <label>&nbsp;</label><input name="valider" type="submit"
					value="..:: Enregistrer les modifications ::.." class="bouton" />
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

		public function CreerAdmin(){
			?>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<td><?php if(isset($this->er) and count($this->er)>0){?>
		<div class="alert" style="font-weight: normal">
		<?php  echo Tools::afficheErreurs2($this->er);?>
		</div> <?php 
	}
	if(!empty($this->message)) echo $this->message;
	?>
	</td>
</tr>
<tr>
	<td>
		<h3>Creation d'un compte administrateur</h3> Dans cette page, vous
		pouvez cr&eacute;er un ou plusieurs compte administrateur

		<div id="form_inscription" class="bord">
			<form action="index.php?ctrl=GestionAdmin&action=SaveAdmin"
				method="post">
				<label for="nom">Nom</label><input name="nom" type="text" id="nom"
					value="<?php if(isset($_POST['nom']))echo $_POST['nom']; ?>"
					size="40" /> <br /> <label for="email">Email</label><input
					name="email" type="text" id="email"
					value="<?php if(isset($_POST['email']))echo $_POST['email']; ?>"
					size="40" /> <br /> <label for="email">Profil</label> <select
					name="profil" id="profil">
					<?php
					$q = Db::getInstance()->Execute("SELECT * FROM profil");
					while($l=mysql_fetch_array($q)){
						?>
					<option value="<?php echo $l['id_profil']; ?>"
					<?php if(isset($_POST['profil'])) echo($l['id_profil']==$_POST['profil']?'selected="selected"':'')?>>
						<?php echo $l['nom'] ?>
					</option>
					<?php
					}
					?>
				</select> <br /> <br />
				<div class="labele" style="padding-left: 30px">Le mot de passe ne
					peut &ecirc;tre modifier que pas cette utilisateur depuis sont
					interface.</div>
				<br /> <label for="passwd">Mot de passe </label> <input
					name="passwd" type="password" id="passwd" /> (5 caract&egrave;res
				minimum)<br /> <label for="passwd2">Confirmez</label> <input
					name="passwd2" type="password" id="passwd2" /> <br /> <br /> <label>&nbsp;</label><input
					name="valider" type="submit"
					value="..:: Cr&eacute;er le compte ::.." class="bouton" />
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

		/////////////////////////////////////
		public function ProfilsAdmin(){

			global $droit;
			?>
<tr>
	<td colspan=2><?php if(isset($this->er) and count($this->er)>0){?>
		<div class="alert"
			style="width: 500px; margin: auto; font-weight: normal">
			<?php  echo Tools::afficheErreurs2($this->er);?>
		</div> <?php 
	}
	if(!empty($this->message)) echo $this->message;

	?> <?php if(Admin::r($_SESSION['admin']['profil'],13)){?>
		<form action="index.php?ctrl=GestionAdmin&action=SaveProfil"
			method="post">
			<table width="400" border="0" align="center" cellpadding="2"
				cellspacing="1" class="bord">
				<tr>
					<td colspan="2" class="head_form">Nouveau profil utilisateur</td>
				</tr>
				<tr class="row1">
					<td width="94">Nom du profil</td>
					<td width="295"><label> <input name="nom" type="text" id="nom"
							value="<?php if(isset($_POST['nom'])) echo $_POST['nom'];?>" /> </label>
					</td>
				</tr>
				<tr>
					<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion des
							comptes administrateur</b></td>
				</tr>
				<?php
				for($i=1;$i<=count($droit);$i++){
					if($droit[$i]['group'] === "Gestion des comptes administrateur"){
						?>
				<tr>
					<td colspan="2" class="row1"><label> <input name="droits[]"
							type="checkbox" id="droits[]"
							value="<?php echo $droit[$i]['code']; ?>"
							<?php if(isset($_POST['droits']))echo in_array($droit[$i]['code'],$_POST['droits'])?'checked="checked"':'';?> />
							<?php echo $droit[$i]['label']; ?> </label></td>
				</tr>
				<?php
					}}
					?>
				<tr>
					<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion Facture
							Ebay</b></td>
				</tr>
				<?php
				for($i=1;$i<=count($droit);$i++){
					if($droit[$i]['group'] === "Gestion Facture Ebay"){
						?>
				<tr>
					<td colspan="2" class="row1"><label> <input name="droits[]"
							type="checkbox" id="droits[]"
							value="<?php echo $droit[$i]['code']; ?>"
							<?php if(isset($_POST['droits']))echo in_array($droit[$i]['code'],$_POST['droits'])?'checked="checked"':'';?> />
							<?php echo $droit[$i]['label']; ?> </label></td>
				</tr>
				<?php
					}}
					?>
				<tr>
					<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion profils
							administrateur</b></td>
				</tr>
				<?php
				for($i=1;$i<=count($droit);$i++){
					if($droit[$i]['group'] === "Gestion profils administrateur"){
						?>
				<tr>
					<td colspan="2" class="row1"><label> <input name="droits[]"
							type="checkbox" id="droits[]"
							value="<?php echo $droit[$i]['code']; ?>"
							<?php if(isset($_POST['droits']))echo in_array($droit[$i]['code'],$_POST['droits'])?'checked="checked"':'';?> />
							<?php echo $droit[$i]['label']; ?> </label></td>
				</tr>
				<?php
					}}
					?>


				<tr>
					<td colspan="2" class="row1">
						<div align="center">
							<label> <input type="submit" name="Submit"
								value="...:: Cr&eacute;er ::..." class="bouton" /> </label>
						</div>
					</td>
				</tr>
			</table>
		</form> <br /> <br /> <?php }?> <?php 
		$q = Db::getInstance()->Execute("SELECT * FROM profil");
		$nb = mysql_num_rows($q);
		if($nb>0){
			?>
		<table width="400" border="0" align="center" cellpadding="2"
			cellspacing="1" class="bord">
			<tr>
				<td colspan="4" class="head_form">Liste des Des profils</td>
			</tr>

			<tr>
				<td class="head_tab" width="50">Voir</td>
				<td class="head_tab" width="50">Editer</td>
				<td class="head_tab" width="200">Profil</td>
				<td class="head_tab" width="100">Supprimer</td>
			</tr>
			<?php
			$cc = 0;
			while($rs = mysql_fetch_array($q)){
				?>
			<tr>
				<td background="#000"><?php if(Admin::r($_SESSION['admin']['profil'],13)){?>
					<a
					href="index.php?ctrl=GestionAdmin&action=VoirProfil&id=<?php echo($rs["id_profil"]); ?>"><img
						src="../icones/36.gif" width="16" height="16" border="0"
						alt="visualiser" /> </a> <?php }?>
				</td>
				<td><?php if(Admin::r($_SESSION['admin']['profil'],14)){?> <a
					href="index.php?ctrl=GestionAdmin&action=EditerProfil&id=<?php echo($rs["id_profil"]); ?>"><img
						src="../icones/1.gif" width="16" height="16" border="0"
						alt="Editer" /> </a> <?php }?></td>
				<td><?php echo $rs['nom']; ?></td>
				<td><?php if(Admin::r($_SESSION['admin']['profil'],15)){?> <a
					href="index.php?ctrl=GestionAdmin&action=SupprimerProfil&id=<?php echo($rs["id_profil"]); ?>"
					onclick="return window.confirm('êtes vous sûr de vouloir supprimer ce profil administrateur.');"><img
						src="../icones/delete.gif" width="16" height="16" border="0"
						alt="Supprimer" /> </a> <?php }?>
				</td>
			</tr>
			<?php }?>
		</table> <?php }else{?>
		<div class="BadMsg" style="margin: auto; width: 500px">Aucun profil
			n'a &eacute;t&eacute; trouv&eacute;</div> <?php }?> <?php
		}

		///////////////////////////////////////////
		public function VoirProfil(){
			global $droit;

			$q = Db::getInstance()->Execute("SELECT * FROM profil WHERE id_profil='".$_GET['id']."'");

			$rs = mysql_fetch_array($q);

			$droits = split(";",$rs['droits']);
			?>

		<table width="400" border="0" align="center" cellpadding="2"
			cellspacing="1" class="bord">

			<tr>
				<td width="389" class="head_form">Profil: <b><?php echo $rs['nom']; ?>
				</b></td>
			</tr>
			<tr>
				<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion des
						comptes administrateur</b></td>
			</tr>
			<?php
			for($i=0;$i<count($droits);$i++){
				if($droit[$i]['group'] === "Gestion des comptes administrateur"){
					?>
			<tr>
				<td class="row1"><?php echo $droit[$droits[$i]]['label']; ?>
				</td>
			</tr>
			<?php
				}}
				?>


			<tr>
				<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion Facture
						Ebay</b></td>
			</tr>
			<?php
			for($i=0;$i<count($droits);$i++){
				if($droit[$i]['group'] === "Gestion Facture Ebay"){
					?>
			<tr>
				<td class="row1"><?php echo $droit[$droits[$i]]['label']; ?>
				</td>
			</tr>
			<?php
				}}
				?>


			<tr>
				<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion profils
						administrateur</b></td>
			</tr>
			<?php
			for($i=0;$i<count($droits);$i++){
				if($droit[$i]['group'] === "Gestion profils administrateur"){
					?>
			<tr>
				<td class="row1"><?php echo $droit[$droits[$i]]['label']; ?>
				</td>
			</tr>
			<?php
				}}
				?>


		</table> <?php
		}

		public function EditerProfil(){

			global $droit;

			$q = Db::getInstance()->Execute("SELECT * FROM profil WHERE id_profil='".$_GET['id']."'");

			$rs = mysql_fetch_array($q);

			$droits = explode(";",$rs['droits']);
			?> <?php if(isset($this->er) and count($this->er)>0){?>
		<div class="alert"
			style="width: 500px; margin: auto; font-weight: normal">
			<?php  echo Tools::afficheErreurs2($this->er);?>
		</div> <?php 
	  }
	  if(!empty($this->message)) echo $this->message;

	  ?>
		<form
			action="index.php?ctrl=GestionAdmin&action=UpdateProfil&id=<?php echo $_GET['id']; ?>"
			method="post">

			<table width="400" border="0" align="center" cellpadding="2"
				cellspacing="1" class="bord">

				<tr>
					<td colspan="2" class="head_form">Edition profil utilisateur</td>
				</tr>
				<tr class="row1">
					<td width="94">Nom du profil</td>
					<td width="295"><label> <input name="nom" type="text" id="nom"
							value="<?php echo $rs['nom'];?>" /> </label></td>
				</tr>



				<tr>
					<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion des
							comptes administrateur</b></td>
				</tr>
				<?php
				for($i=1;$i<=count($droit);$i++){
					if($droit[$i]['group'] === "Gestion des comptes administrateur"){
						?>
				<tr>
					<td colspan="2" class="row1"><label> <input name="droits[]"
							type="checkbox" id="droits[]"
							value="<?php echo $droit[$i]['code']; ?>"
							<?php echo in_array($droit[$i]['code'],$droits)?'checked="checked"':'';?> />
							<?php echo $droit[$i]['label']; ?> </label></td>
				</tr>
				<?php
					}}
					?>


				<tr>
					<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion Facture
							Ebay</b></td>
				</tr>
				<?php
				for($i=1;$i<=count($droit);$i++){
					if($droit[$i]['group'] === "Gestion Facture Ebay"){
						?>
				<tr>
					<td colspan="2" class="row1"><label> <input name="droits[]"
							type="checkbox" id="droits[]"
							value="<?php echo $droit[$i]['code']; ?>"
							<?php echo in_array($droit[$i]['code'],$droits)?'checked="checked"':'';?> />
							<?php echo $droit[$i]['label']; ?> </label></td>
				</tr>
				<?php
					}}
					?>


				<tr>
					<td colspan="2" bgcolor="#00CCFF" class="row1"><b>Gestion profils
							administrateur</b></td>
				</tr>
				<?php
				for($i=1;$i<=count($droit);$i++){
					if($droit[$i]['group'] === "Gestion profils administrateur"){
						?>
				<tr>
					<td colspan="2" class="row1"><label> <input name="droits[]"
							type="checkbox" id="droits[]"
							value="<?php echo $droit[$i]['code']; ?>"
							<?php echo in_array($droit[$i]['code'],$droits)?'checked="checked"':'';?> />
							<?php echo $droit[$i]['label']; ?> </label></td>
				</tr>
				<?php
					}}
					?>


				<tr>
					<td colspan="2" class="row1">
						<div align="center">
							<label> <input type="submit" name="Submit"
								value="...:: Editer ::..." class="bouton" /> </label>
						</div>
					</td>
				</tr>

			</table>
		</form> <?php
}

}?>