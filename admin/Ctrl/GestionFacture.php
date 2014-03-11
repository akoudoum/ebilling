<?php
class GestionFacture
{
	public $er = array();
	public $message;
	public $action;


	public function execute(){
		if(isset($_GET['action'])) $this->action = $_GET['action'];
		else $this->action = "";
		//die($this->action);
		switch($this->action) {

			case 'EditFacture':
				if(!Admin::r($_SESSION['admin']['profil'],10))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->FormEditFacture();
				break;

			case 'SendEditFacture':
				if(!Admin::r($_SESSION['admin']['profil'],10))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->sendEditFacture();
				break;

			case 'SuppFacture':
				if(!Admin::r($_SESSION['admin']['profil'],9))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->SuppFacture($_GET['id']);
				break;

			case 'SendFacture':
				if(!Admin::r($_SESSION['admin']['profil'],16))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");

				$this->SendFacture();
				break;

			case 'SendFactureByEmail':
				$this->SendFactureByEmail();
				break;

			case 'SendToOnlineFact':
				$this->SendToOnlineFact();
				break;

			case 'ListeFacture':
				if(!Admin::r($_SESSION['admin']['profil'],7))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->ListeFacture();
				break;


			case 'SynFacture':
				$efacture = new EntrepriseFacturation();
				$efacture->getObjectById(1);
				$result = Db::getInstance()->ExecuteS('SELECT * FROM `apiebay`');
					
				if(empty($efacture->raison_sociale)
				or empty($efacture->adresse_ligne1)
				or empty($efacture->ville)
				or empty($efacture->pays)
				or empty($efacture->ville)
				or empty($efacture->telephone2)
				or empty($efacture->firstnumfacture)){
					echo '<div style="text-align: center;margin:20px;padding:20px;border: solid 1px #FF0000;color:#FFBF00">';
					echo 'Vous devez personnalisé les informations sur l\'émetteur de la facture<br />';
					echo '<a href="index.php?ctrl=GestionFacture&action=EmetteurFacture">Cliquez ici</a> pour le faire.';
					echo '</div>';
				} elseif($result[10]["value"]==""){
					echo '<div style="text-align: center;margin:20px;padding:20px;border: solid 1px #FF0000;color:#FFBF00">';
					echo 'Vous devez configurer l\'api eBay<br />';
					echo '<a href="index.php?ctrl=GestionFacture&action=ConfigEbayAPI">Cliquez ici</a> pour le faire.';
					echo '</div>';
				} else {

					if(!Admin::r($_SESSION['admin']['profil'],8))
					Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
					echo '<div class="bien" style="text-align:center">';
					$this->SynFacture();
					echo '</div>';
				}
				break;


			case 'EmetteurFacture':
				if(!Admin::r($_SESSION['admin']['profil'],17))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->EmetteurFacture();
				break;

			case 'ConfigEbayAPI':
				if(!Admin::r($_SESSION['admin']['profil'],18))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->ConfigEbayAPI();
				break;

			case 'sendConfigEbayAPI':
				$pathExplode = explode("/",$_SERVER['PHP_SELF']);
				$token = "";
				$filecontent = "<?php \n/*\n";
				if($_POST['app-mode'] == 0)
				$result = Db::getInstance()->ExecuteS("SELECT * FROM `apiebay` WHERE type='0' OR type='2' OR type='3'");
				else
				$result = Db::getInstance()->ExecuteS("SELECT * FROM `apiebay` WHERE type='1' OR type='2' OR type='3'");

				foreach($result as $key => $value){
					if($value['name'] != 'token'){
						if($value['name']=='token-pickup-file')
						$filecontent .= $value['name'].'='.$_SERVER['DOCUMENT_ROOT']."/".$pathExplode[1]."/config/ontoken.token"."\n";
						else
						$filecontent .= $value['name'].'='.$value['value']."\n";

					}
					else
					{
						$token 	= $value['value'];
							
					}
				}


				$filecontent .= "*/\n?>";
				//echo $_SERVER['PHP_SELF'];
				$fp = fopen('../config/ebay.config.php','w+');
				$fp1 = fopen('../config/ontoken.token','w+');
				if($fp == FALSE || $fp1 == FALSE ){
					//echo "here 1";
					$this->er[0] = "mettez le fichier '".$_SERVER['DOCUMENT_ROOT']."/".$pathExplode[1]."/config/ebay.config.php' et '".$_SERVER['DOCUMENT_ROOT']."/config/ontoken.token'"." en ecriture: chmod 666";
				}else{
					//echo "here 2";
					fwrite($fp, $filecontent);
					fwrite($fp1, $token);
					fclose($fp);
					fclose($fp1);
					foreach($_POST as $key => $val){

						if($key != 'envoyer')

						Db::getInstance()->Execute("UPDATE `apiebay` SET value ='".$val."' WHERE  name = '".$key."'");
					}
					Db::getInstance()->Execute("UPDATE `apiebay` SET value ='".$_SERVER['DOCUMENT_ROOT']."/".$pathExplode[1]."/config/ontoken.token"."' WHERE  name = 'token-pickup-file'");
				}
				$this->ConfigEbayAPI();

				//if(count($er)>0)print_r($er);die();
				break;

			case 'sendEmetteurFacture':
				//die('here');
				if(!Admin::r($_SESSION['admin']['profil'],17))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->sendEmetteurFacture();
				break;

			case 'DownloadPDF':
				if(!Admin::r($_SESSION['admin']['profil'],17))
				Tools::redirectLink("index.php?ctrl=MonCompte&action=pasacces");
				$this->DownloadPDF();
				break;

			default :
				$this->ListeFacture();

		}
	}
	///////////////////////////////////////////

	/*Post bill and cuatomer to online facturation*/
	public function SendToOnlineFact() {
		$factures = Db::getInstance()->Selection("facture", array(), "");

		if($factures != false){
			if(DEBUG) 
				echo count($factures)." system bill fount<br />";
			// New instance for remote customer
			$remoteCustomer = new RemoteCustomer();
			$remoteBill = new RemoteBill();
			$countBills = 0;
			$countCustomers = 0;
				
			foreach($factures as $line) {
				if(DEBUG)
					echo "Bill: ".$line['id'];
				$restrictions = "WHERE 	id_facture = '".$line['id']."' GROUP BY id_client_ebay";
				$client = Db::getInstance()->Selection("client_ebay", array(), $restrictions);
				if(DEBUG2) {print_r($client); echo '<br>';}
				
				$custoner = null;
				//request customer
				if($client != false)
					$custoner = $remoteCustomer->FindCustomer(array("api_custom" => $client[0]['id_client_ebay']));

				// if customer doesn't existe create one
				if($custoner == null){
					$restrictions = "WHERE 	id_facture = '".$line['id']."'";
					$address = Db::getInstance()->Selection("adresse_facturation", array(), $restrictions);
					if(DEBUG2) {print_r($address); echo '<br>';}
					
					$remoteCustomer->api_custom 	= $client[0]['id_client_ebay'];
					$remoteCustomer->api_id			= $client[0]['id'];
					$remoteCustomer->city			= Validation::isCityName($address[0]['f_ville'])?$address[0]['f_ville']:"No City";
					$remoteCustomer->civility		= "0";
					$remoteCustomer->company_name 	= $address[0]['f_prenom']." ".$address[0]['f_nom'];
					
					$remoteCustomer->country		= $remoteCustomer->coutryFormat($address[0]['f_pays']);
					$remoteCustomer->email 			= $address[0]['f_email'];
					$remoteCustomer->fax			= "";
					$remoteCustomer->first_name		= $address[0]['f_prenom'];
					$remoteCustomer->last_name		= $address[0]['f_nom'];
					$remoteCustomer->pay_before		= 0;
					$remoteCustomer->penalty		= "";
					$remoteCustomer->phone			= Validation::isPhoneNumber($address[0]['f_telephone1'])?$address[0]['f_telephone1']:"";
					$remoteCustomer->short_name		= $address[0]['f_prenom']."_".$address[0]['f_nom'];
					$remoteCustomer->street			= $address[0]['f_adresse_ligne1'];
					$remoteCustomer->zip_code		= $address[0]['f_code_postal'];
					//post customer
					$newCustomer = $remoteCustomer->InsertCustomer();
						
					if($newCustomer == null){
						$idCustomer = null;
						echo DEBUG?"Fail to add customer.<br />":"";
						
					} else {
						$idCustomer = $newCustomer['id'];
						$countCustomers++;
						echo DEBUG?"Customer added: ".$idCustomer.".<br>":"";
					}
						
				} else {
					$idCustomer = $custoner[0]->_data['id'];
					echo DEBUG?"Customer found: ".$idCustomer.".<br>":"";
					if(DEBUG2) {print_r($custoner); echo '<br>';}
				}

				//first check if bill already exists
				$bill = $remoteBill->FindBill(array("api_custom"=>$line["id_ebay"]));
				// store bill if id customer isn't null
				if(($idCustomer != null) && ($bill == null)) {
					
					echo DEBUG?"No Bill found.<br />":"";
						
					$remoteBill->api_custom = $line["id_ebay"];
					$remoteBill->api_id = $line["id"];
					$remoteBill->customer_id = $idCustomer;
						
					$restrictions = "WHERE 	id_facture = '".$line['id']."'";
					$billItems = Db::getInstance()->Selection("elements_facture", array(), $restrictions);
					//add items to bill
					$position = 1;
					if($billItems != false){
						foreach($billItems as $items) {
							$remoteItem = new RemoteItem(array("position" 		=> $position,
																"product_id" 	=> $items['id_ebay_element'],
																"quantity" 		=> $items['quantite'],
																"title" 		=> $items['titre'],
																"nature" 		=> 2,
																"unit_price" 	=> $items['prix_unitaire']));

							$remoteBill->AddItem($remoteItem->GetItem());
							$position++;
						}

						$newBill = $remoteBill->InsertBill();
						if($newBill == null) {
							echo "Fail to send bill.<br />";
							
						} else
							$countBills++;
							
					} else
						echo "No Item for this bill.<br />";
						
				}

			}
		}

		echo '<div style="border:solid 1px #000000; padding:10px; margin:20px auto; text-align:center">'.$countCustomers." customers and ".$countBills." bills saved.</div>";

	}
	/**********************************************/
	public function SuppFacture($id){
		$facture = new Facture();
		$facture->id = $id;

		if(!$facture->delete()){
			
			$this->er[] = "La facture n'a pas pu &ecirc;tre supprim&eacute;";

		}else{
			$this->message ='  <div class="bien" style="text-align:center">
                            <p>Correct!!</p>
						    <p >La facture a bien été supprimer</p></div>';
		}


		$this->ListeFacture();

	}

	public function DownloadPDF(){

		$fact = new Facture();
		$fact->getObjectById($_GET['id']);

		$fname =  '../factures/'.$fact->id_ebay.'.pdf';

		//if(!file_exists($fname)){
		$gfacture = new genFacture();

		$fname = $gfacture->getFactureEbay($_GET['id']);
		//}

		if($fname)
		echo '<div class="bien" style="text-align:center;"><a href="'.$fname.'">Cliquez pour télécharger</a></div>';

	}


	public function SendFactureByEmail(){
		$sendbyemail = new SendByEmail();
		$sendbyemail->copyFromPost();

		$this->er = $sendbyemail->validateControler(true);
		$nb = count($this->er);

		if($nb==0){
			$sendbyemail->SendEmail();
			echo '<div class="bien" style="text-align:center">
                            <p>Correct!!</p>
						    <p >La facture a bien été envoyé</p></div>';
		}else $this->SendFacture();

	}

	public function SendFacture(){

		$fact = new Facture();
		$fact->getObjectById($_GET['id']);
		$addrf = new AdresseFacturation();
		$addrf->getObjectByIdfacture($_GET['id']);
		$efacture = new EntrepriseFacturation();
		$efacture->getObjectById(1);

		$fname =  '../factures/'.$fact->id_ebay.'.pdf';

		if(!file_exists($fname)){
			$gfacture = new genFacture();

			$fname = $gfacture->getFactureEbay($_GET['id']);
		}

		if (isset($_GET["destinataire"])){
			$sendbyemail = new SendByEmail();
			$sendbyemail->copyFromPost();
			$sendbyemail->piecejointe = $fname;
		}
		else{
			$sendbyemail = new SendByEmail();
			$sendbyemail->destinataire = $addrf->f_email;
			$sendbyemail->expediteur = $efacture->email;
			$sendbyemail->objet = "Facture ".$fact->id_ebay.": de ".$efacture->raison_sociale;
			$sendbyemail->piecejointe = $fname;
			$sendbyemail->message = "";
		}

		?>
<form
	action="index.php?ctrl=GestionFacture&action=SendFactureByEmail&id=<?php  echo $_GET['id'];?>"
	method="post">
	<div class="formulaire formulaire80cent">

		<div class="head_form">Envoyer la facture par email</div>

		<div class="hBox">
		<?php if(isset($this->er) and count($this->er)>0){?>
			<div class="alert">
			<?php  echo Tools::afficheErreurs2($this->er);?>
			</div>
			<?php }?>
		</div>

		<div class="hBox">
			<div class="leftcol">Destinataire(*):</div>
			<div class="rightcol">
				<label> <input name="destinataire" type="text" id="destinataire"
					value="<?php  echo $sendbyemail->destinataire;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Expediteur(*):</div>
			<div class="rightcol">
				<label> <input name="expediteur" type="text" id="expediteur"
					value="<?php  echo $sendbyemail->expediteur;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Objet(*):</div>
			<div class="rightcol">
				<label> <input name="objet" type="text" id="adresse_ligne1"
					value="<?php  echo $sendbyemail->objet;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Facture :</div>
			<div class="rightcol">
				<label> <input readonly="readonly" name="piecejointe" type="text"
					id="piecejointe" value="<?php  echo $sendbyemail->piecejointe;?>" />
				</label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Message:</div>
			<div class="rightcol">
				<label> <textarea rows="10" cols="40" name="message" id="message">
				<?php  echo $sendbyemail->message;?>
					</textarea> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>


		<div class="hBox">
			<div class="leftcol">&nbsp;</div>
			<div class="rightcol">
				<label> <input name="envoyer" type="submit" class="bouton"
					id="envoyer" value="..:: Entrer ::.." /> </label>
			</div>
		</div>


		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
	</div>

</form>
				<?php
	}
	public function SynFacture(){
		$synchronisationebay = new SynchronisationEbay();
		$synchronisationebay->getFactureEbay();
	}
	public function ListeFacture(){

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

		if(isset($_GET['option'])){
			if($_GET['option']=="critere") {

				if($_GET['criteria']=='id_ebay')
				$sql="SELECT * FROM facture WHERE ".$_GET['criteria']." LIKE '%".$_GET['what']."%'";

				else
				$sql="SELECT facture.* FROM facture,client_ebay WHERE client_ebay.".$_GET['criteria']." LIKE '%".$_GET['what']."%' AND  client_ebay.id_facture=facture.id";
				$page->nom_page="index.php?ctrl=GestionFacture&option=critere&criteria=".$_GET['criteria']."&what=".$_GET['what']."&";
			}
			elseif($_GET['option']=="ordre"){

				$sql="SELECT * FROM facture ORDER BY ".$_GET['sort']." ".$_GET['sortorder'];
				if(isset($_GET['ps']) && $_GET['ps']!="") $page->elt_page=$_GET['ps'];
				$page->nom_page="index.php?ctrl=GestionFacture&option=ordre&sort=".$_GET['sort']."&sortorder=".$_GET['sortorder']."&ps=".$_GET['ps']."&";
			}
			elseif($_GET['option']=="date"){
				$date1 = Tools::transformDate1(urldecode($_GET["date1"]));
				$date2 = Tools::transformDate1(urldecode($_GET["date2"]));

				$sql="SELECT * FROM facture WHERE (`".$_GET['criteria']."` > '".$date1."' OR `".$_GET['criteria']."` = '".$date1."') AND  (`".$_GET['criteria']."` < '".$date2."' OR `".$_GET['criteria']."` = '".$date2."')";
				if(isset($_GET['ps']) && $_GET['ps']!="") $page->elt_page=$_GET['ps'];
				$page->nom_page="index.php?ctrl=GestionFacture&option=date&criteria=".$_GET['criteria']."&date1=".$_GET['date1']."&date2=".$_GET['date2'].(isset($_GET['ps'])?"&ps=".$_GET['ps']."&":"&");
			}
			else{

				$sql="SELECT * FROM facture  ORDER BY date_commande DESC";
				$page->nom_page="index.php?ctrl=GestionFacture&";
			}


		}else{
			$sql="SELECT * FROM facture  ORDER BY date_commande DESC";
			$page->nom_page="index.php?ctrl=GestionFacture&";
		}
		//echo $sql;
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
		<td width="3%" class="head_tab">Editer</td>
		<td width="3%" class="head_tab">Envoyer</td>
		<td width="3%" class="head_tab">Télécharger</td>
		<td width="15%" class="head_tab">ID Cmd</td>
		<td width="34%" class="head_tab">Mode Paiement</td>
		<td width="21%" class="head_tab">Date commande</td>
		<td width="11%" class="head_tab">Montant</td>
		<td width="10%" class="head_tab">Supprimer</td>
	</tr>
	<tr>
		<td colspan="8" height="10" class="bgWhite"></td>
	</tr>
	<?php
	//loop thru records and display category listing
	while ($rs = mysql_fetch_array($cmd)) {
		$numcmd =  explode("-", $rs['id_ebay']);
		?>
	<tr>
		<td class="row1" style="text-align: center"><?php if(Admin::r($_SESSION['admin']['profil'],10)){?>
			<a
			href="index.php?ctrl=GestionFacture&action=EditFacture&id_facture=<?php echo($rs["id"]); ?>"><img
				src="../icones/edit.gif" width="16" height="16" border="0"
				alt="visualiser" /> </a> <?php 
		}
		?>
		</td>
		<td class="row1" style="text-align: center"><?php if(Admin::r($_SESSION['admin']['profil'],16)){?>
			<a
			href="index.php?ctrl=GestionFacture&action=SendFacture&idebay=<?php echo($numcmd[0]); ?>&id=<?php echo($rs["id"]); ?>"><img
				src="../icones/54.gif" width="16" height="16" border="0"
				alt="Editer"
				onclick="return window.confirm('La facture sera générée et envoyer par email\nContinuer?');" />
		</a> <?php }?>
		</td>


		<td class="row1" style="text-align: center"><?php if(Admin::r($_SESSION['admin']['profil'],16)){?>
			<a
			href="index.php?ctrl=GestionFacture&action=DownloadPDF&id=<?php echo($rs["id"]); ?>"><img
				src="../icones/pdf.gif" width="16" height="16" border="0"
				alt="Editer" /> </a> <?php }?>
		</td>

		<td class="row1" valign=top width="25%"><small><?php echo($rs["id_ebay"]); ?>&nbsp;</small>
		</td>
		<td valign=top class="row1"><small><?php echo $rs['mode_paiement']; ?>
		</small></td>
		<td valign=top class="row1">&nbsp;<small><?php echo Tools::transformDate($rs["date_commande"], "en", true); ?>
		</small>
		</td>

		<td align="center" class="row1"><small><?php echo $rs['montant']; ?>
				euros</small></td>
		<td align="center" class="row1"><?php if(Admin::r($_SESSION['admin']['profil'],9)){?>
			<a
			href="index.php?ctrl=GestionFacture&action=SuppFacture&id=<?php echo($rs["id"]); ?>"
			onclick="return window.confirm('êtes vous sûr de vouloir supprimer cette facture?');">
				<img src="../icones/delete.gif" width="16" height="16" border="0"
				alt="Supprimer" /> </a> <?php }?></td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="10" align="center"><?php echo $page->print_nb();  ?></td>
	</tr>
</table>

	<?php } else { ?>
<div class="BadMsg">Aucune facture n'a &eacute;t&eacute; trouv&eacute;e</div>
	<?php } ?>
<div class="head_form">[ Rechercher Commande par
	critère]:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
</div>




<form action="index.php" method="get" name="search" id="search">
	<input type="hidden" name="ctrl" value="GestionFacture" /> <input
		type="hidden" name="option" value="critere" /> Rechercher des factures
	avec<a name="search" id="search"></a>: <label> <select name="criteria">
			<option value="id_ebay"
			<?php if(isset($_GET['criteria']))if ($_GET['criteria']=="id_ebay") echo 'selected="selected"'; ?>>ID
				facture</option>
			<option value="id_client_ebay"
			<?php if(isset($_POST['criteria']))if ($_GET['criteria']=="id_client_ebay") echo 'selected="selected"'; ?>>ID
				Client ebay</option>
			<option value="nom"
			<?php if(isset($_GET['criteria']))if ($_GET['criteria']=="nom") echo 'selected="selected"'; ?>>Nom
				client</option>
	</select> </label> à <label> <input type="text" name="what" size="15"
		value="<?php if(isset($_GET["what"])) echo $_GET["what"];?>" /> </label>
	<label><input name="search" type="submit" class="bouton" id="search"
		value="Ok" /> </label>
</form>
<div class="head_form">[ Rechercher Commande par date]
	::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
</div>

<form action="index.php" method="get" name="search" id="search">
	<input type="hidden" name="ctrl" value="GestionFacture" /> <input
		type="hidden" name="option" value="date" /> Avec<a name="search"
		id="search"></a>: <label> <select name="criteria">
			<option value="date_commande"
			<?php if(isset($_GET['criteria']))if ($_GET['criteria']=="date_commande") echo 'selected="selected"'; ?>>date
				de commande</option>
			<option value="date_facturation"
			<?php if(isset($_GET['criteria']))if ($_GET['criteria']=="date_facturation") echo 'selected="selected"'; ?>>date
				de facturation</option>
			<option value="date_paiment"
			<?php if(isset($_GET['criteria']))if ($_GET['criteria']=="date_paiment") echo 'selected="selected"'; ?>>date
				de paiment</option>
	</select> </label> entre <label> <input type="text" name="date1"
		size="15"
		value="<?php if(isset($_GET["date1"])) echo $_GET["date1"];else echo date("d-m-Y");?>" />
	</label> et <label> <input type="text" name="date2" size="15"
		value="<?php if(isset($_GET["date2"])) echo $_GET["date2"];else echo date("d-m-Y");?>" />
	</label> <label><input name="search" type="submit" class="bouton"
		id="search" value="Ok" />(format date: JJ-MM-AAAA)</label>
</form>

<div class="head_form">[ Rechercher Commande par ordre]
	::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
</div>
<form name=search action="index.php" method="get">
	<input type="hidden" name="ctrl" value="GestionFacture" /> <input
		type="hidden" name="option" value="ordre" />
	<p></p>
	Recherche par crit&egrave;re :<a name=sort></a><br /> Nombre de facture
	par page : <label> <select name="ps" class="optgrp" id="ps">
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="50">50</option>
	</select> </label> Par : <select name=sort>
		<option value="id_ebay">ID facture</option>
		<option value="montant">Montant</option>
		<option value="mode_paiement">Mode de paiement</option>
		<option value="date_commande">Date de commande</option>
		<option value="date_facturation">Date de facturation</option>
		<option value="date_paiment">Date de paiement</option>
	</select> <select name=sortorder>
		<option value="desc">D&eacute;croissant</option>
		<option value="asc">Croissant</option>
	</select> <input name=send type=submit class="bouton" id="send"
		value="Ok" />
</form>

			<?php
	}

	public function EmetteurFacture(){
		$efacture = new EntrepriseFacturation();
		$efacture->getObjectById(1);

		?>

<form
	action="index.php?ctrl=GestionFacture&action=sendEmetteurFacture&id=<?php  echo '1';?>"
	method="post">
	<div class="formulaire formulaire50cent">

		<div class="head_form">Adresse Entreprise Facturation</div>

		<div class="hBox">
		<?php  if(isset($this->er) and count($this->er)>0){?>
			<div class="alert">
			<?php  echo Tools::afficheErreurs2($this->er);?>
			</div>
			<?php }?>
		</div>

		<div class="hBox">
			<div class="leftcol">Raison social :</div>
			<div class="rightcol">
				<label> <input name="raison_sociale" type="text" id="raison_sociale"
					value="<?php  echo $efacture->raison_sociale;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">E-mail(*):</div>
			<div class="rightcol">
				<label> <input name="email" type="text" id="email"
					value="<?php  echo $efacture->email;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Adresse Ligne 1(*):</div>
			<div class="rightcol">
				<label> <input name="adresse_ligne1" type="text" id="adresse_ligne1"
					value="<?php  echo $efacture->adresse_ligne1;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Adresse Ligne 2:</div>
			<div class="rightcol">
				<label> <input name="adresse_ligne2" type="text" id="adresse_ligne2"
					value="<?php  echo $efacture->adresse_ligne2;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Ville(*):</div>
			<div class="rightcol">
				<label> <input name="ville" type="text" id="ville"
					value="<?php  echo $efacture->ville;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Pays(*):</div>
			<div class="rightcol">
				<label> <input name="pays" type="text" id="pays"
					value="<?php  echo $efacture->pays;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Code postal :</div>
			<div class="rightcol">
				<label> <input name="code_postal" type="text" id="code_postal"
					value="<?php  echo $efacture->code_postal;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Téléphone Mobile :</div>
			<div class="rightcol">
				<label> <input name="telephone1" type="text" id="telephone1"
					value="<?php  echo $efacture->telephone1;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Téléphone de Bureau(*):</div>
			<div class="rightcol">
				<label> <input name="telephone2" type="text" id="telephone2"
					value="<?php  echo $efacture->telephone2;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Fax :</div>
			<div class="rightcol">
				<label> <input name="fax" type="text" id="fax"
					value="<?php  echo $efacture->fax;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">RCS (Registre du commerce):</div>
			<div class="rightcol">
				<label> <input name="rcs" type="text" id="rcs"
					value="<?php  echo $efacture->rcs;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Le num&eacute;ro Siret de la
				soci&eacute;t&eacute;:</div>
			<div class="rightcol">
				<label> <input name="numsiret" type="text" id="numsiret"
					value="<?php  echo $efacture->numsiret;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Taux de TVA:</div>
			<div class="rightcol">
				<label> <input name="tva" type="text" id="tva"
					value="<?php  echo $efacture->tva;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>
		<div class="hBox">
			<div class="leftcol">D&eacute;but numerotation facture(*):</div>
			<div class="rightcol">
				<label> <input name="firstnumfacture" type="text"
					id="firstnumfacture"
					value="<?php  echo $efacture->firstnumfacture==""?"100":$efacture->firstnumfacture;?>" />
				</label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">&nbsp;</div>
			<div class="rightcol">
				<label> <input name="appliquertva" type="checkbox" id="appliquertva"
				<?php  echo $efacture->appliquertva==1?'checked="checked" ':'';?>
					value="1" />TVA non applicable, article 293 B du CGI </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>


		<div class="hBox">
			<div class="leftcol">&nbsp;</div>
			<div class="rightcol">
				<label> <input name="envoyer" type="submit" class="bouton"
					id="envoyer" value="..:: Entrer ::.." /> </label>
			</div>
		</div>


		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
	</div>

</form>

				<?php
	}

	public function ConfigEbayAPI(){

		?>
<form action="index.php?ctrl=GestionFacture&action=sendConfigEbayAPI"
	method="post">
	<div class="formulaire" style="width: 70%; margin: auto">

		<div class="head_form">Parametre API Ebay</div>
		<?php
		$result = Db::getInstance()->ExecuteS('SELECT * FROM `apiebay`');
		//print_r($result);
		foreach ($result AS $key => $value){
			if($value['label'] != ""){
				?>
		<div class="hBox">
			<div class="leftcol">
			<?php echo $value['label']; ?>
			</div>
			<div class="rightcol">
				<label> <input name="<?php echo $value['name']; ?>"
					type="<?php echo (($value['name'] == "dev-key-prod") || ($value['name'] == "app-key-prod") || ($value['name'] == "cert-id-prod"))?"password":"text";  ?>"
					id="<?php echo $value['name']; ?>"
					value="<?php echo $value['value']; ?>" style="width: 300px" /> <!-- -->
				</label>
				<?php if ($value['desc']!=''){ ?>
				<br /> <span style="font-size: 0.8em; color: #000033"> <?php 
		  echo $value['desc'];

		  ?> </span>
				<?php }?>
			</div>
		</div>
		<hr style="clear: both; visibility: hidden" />
		<?php
			}
		}
		?>

		<div class="hBox">
			<div class="leftcol">&nbsp;</div>
			<div class="rightcol">
				<label> <input name="envoyer" type="submit" class="bouton"
					id="envoyer" value="..:: Entrer ::.." /> </label>
			</div>
		</div>
		<hr style="clear: both; visibility: hidden" />
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
	</div>
</form>
		<?php
	}


	public function sendEmetteurFacture(){

		$entreprisefacturation = new EntrepriseFacturation();
		$entreprisefacturation->copyFromPost();
		$entreprisefacturation->id = 1;
		//print_r($entreprisefacturation);die();
		$this->er = $entreprisefacturation->validateControler(true);
		$nb = count($this->er);

		if($nb==0){

			if(!$entreprisefacturation->update()){
				$this->er[] = 'Les modification n\'ont pas pu &ecirc;tre  sauvegard&eacute;es';
				$this->EmetteurFacture();
			}
			else{//////////////////////////////////
					
	   $this->message ='  <div class="bien" style="width:500px;margin:3px auto;text-align:center">
						    <p >Les modifications ont bien été sauvegardées</p>
  </div>
';
	   $this->EmetteurFacture();
			}

		}else $this->EmetteurFacture();

	}


	public function FormEditFacture(){
		$fact = new Facture();
		$fact->getObjectById($_GET['id_facture']);

		$clebay = new ClientEbay();
		$clebay->getObjectByIdfacture($_GET['id_facture']);

		$addrf = new AdresseFacturation();
		$addrf->getObjectByIdfacture($_GET['id_facture']);

		$addrl = new AdresseLivraison();
		$addrl->getObjectByIdfacture($_GET['id_facture']);

		$eltfacture = new ElementsFacture();
		$eltfacture->getObjectByIdfacture($_GET['id_facture']);

		$sevlivraison = new ServiceLivraison();
		$sevlivraison->getObjectByIdfacture($_GET['id_facture']);

		?>

<form
	action="index.php?ctrl=GestionFacture&action=SendEditFacture&id_facture=<?php  echo $_GET['id_facture'];?>"
	method="post" onSubmit="return validate(this);">
	<div class="formulaire formulaire80cent">
		<input name="id_facture" type="hidden" id="id_facture"
			value="<?php  echo $_GET['id_facture'];?>" />

		<div class="head_form">Edition de facture</div>
		<div class="hBox">
		<?php if(isset($this->er) and count($this->er)>0){?>
			<div class="alert">
			<?php  echo Tools::afficheErreurs2($this->er);?>
			</div>
			<?php }?>
		</div>

		<div class="sndhead_form">Identifiant Ebay Client</div>
		<input name="id_clientebay" type="hidden" id="id_clientebay"
			value="<?php  echo $clebay->id;?>" />

		<div class="hBox">
			<div class="leftcol">ID Ebay :</div>
			<div class="rightcol">
				<label> <input readonly="readonly" name="id_client_ebay" type="text"
					id="id_client_ebay" value="<?php  echo $clebay->id_client_ebay;?>" />
				</label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Nom(*):</div>
			<div class="rightcol">
				<label> <input name="nom" type="text" id="nom"
					value="<?php  echo $clebay->nom;?>" /> </label>
			</div>
		</div>


		<div class="hBox">
			<div class="sndhead_form">Info Facture</div>
		</div>

		<div class="hBox">
			<div class="leftcol">ID Commande Ebay :</div>
			<div class="rightcol">
				<label> <input readonly="readonly" name="id_ebay" type="text"
					id="id_ebay" value="<?php  echo $fact->id_ebay;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Montant(*):</div>
			<div class="rightcol">
				<label> <input name="montant" type="text" id="montant"
					value="<?php  echo $fact->montant;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Devise(*):</div>
			<div class="rightcol">
				<label> <input name="devise" type="text" id="devise"
					value="<?php  echo $fact->devise;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Mode de paiment(*):</div>
			<div class="rightcol">
				<label> <input name="mode_paiement" type="text" id="mode_paiement"
					value="<?php  echo $fact->mode_paiement;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Date de commande(*):</div>
			<div class="rightcol">
				<label> <input name="date_commande" type="text" id="date_commande"
					value="<?php  echo $fact->date_commande;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Date de paiement(*):</div>
			<div class="rightcol">
				<label> <input name="date_paiment" type="text" id="date_paiment"
					value="<?php  echo $fact->date_paiment;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Date de facturation(*):</div>
			<div class="rightcol">
				<label> <input name="date_facturation" type="text"
					id="date_facturation"
					value="<?php  echo $fact->date_facturation;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Commentaire(*):</div>
			<div class="rightcol">
				<label> <textarea rows="5" cols="20" name="legande" id="legande">
				<?php  echo $fact->legande;?>
					</textarea> </label>
			</div>
		</div>



		<div class="sndhead_form">Adresse facturation</div>
		<input name="id_addrfacturation" type="hidden" id="id_addrfacturation"
			value="<?php  echo $addrf->id;?>" />
		<div class="hBox">
			<div class="leftcol">Nom :</div>
			<div class="rightcol">
				<label> <input name="f_nom" type="text" id="f_nom"
					value="<?php  echo $addrf->f_nom;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Prénom :</div>
			<div class="rightcol">
				<label> <input name="f_prenom" type="text" id="f_prenom"
					value="<?php  echo $addrf->f_prenom;?>" /> </label>
			</div>
		</div>


		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">E-mail(*):</div>
			<div class="rightcol">
				<label> <input name="f_email" type="text" id="f_email"
					value="<?php  echo $addrf->f_email;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Adresse Ligne 1:</div>
			<div class="rightcol">
				<label> <input name="f_adresse_ligne1" type="text"
					id="f_adresse_ligne1"
					value="<?php  echo $addrf->f_adresse_ligne1;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Adresse Ligne 2:</div>
			<div class="rightcol">
				<label> <input name="f_adresse_ligne2" type="text"
					id="f_adresse_ligne2"
					value="<?php  echo $addrf->f_adresse_ligne2;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Ville :</div>
			<div class="rightcol">
				<label> <input name="f_ville" type="text" id="f_ville"
					value="<?php  echo $addrf->f_ville;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Pays :</div>
			<div class="rightcol">
				<label> <input name="f_pays" type="text" id="f_pays"
					value="<?php  echo $addrf->f_pays;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Code postal :</div>
			<div class="rightcol">
				<label> <input name="f_code_postal" type="text" id="f_code_postal"
					value="<?php  echo $addrf->f_code_postal;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Téléphone Mobile :</div>
			<div class="rightcol">
				<label> <input name="f_telephone1" type="text" id="f_telephone1"
					value="<?php  echo $addrf->f_telephone1;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Téléphone de Bureau :</div>
			<div class="rightcol">
				<label> <input name="f_telephone2" type="text" id="f_telephone2"
					value="<?php  echo $addrf->f_telephone2;?>" /> </label>
			</div>
		</div>



		<div class="sndhead_form">Adresse Livraison</div>
		<input name="id_addrlivraison" type="hidden" id="id_addrlivraison"
			value="<?php  echo $addrl->id;?>" />
		<div class="hBox">
			<div class="leftcol">Nom :</div>
			<div class="rightcol">
				<label> <input name="l_nom" type="text" id="l_nom"
					value="<?php  echo $addrl->l_nom;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Prénom :</div>
			<div class="rightcol">
				<label> <input name="l_prenom" type="text" id="l_prenom"
					value="<?php  echo $addrl->l_prenom;?>" /> </label>
			</div>
		</div>


		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">E-mail(*):</div>
			<div class="rightcol">
				<label> <input name="l_email" type="text" id="l_email"
					value="<?php  echo $addrl->l_email;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Adresse Ligne 1:</div>
			<div class="rightcol">
				<label> <input name="l_adresse_ligne1" type="text"
					id="l_adresse_ligne1"
					value="<?php  echo $addrl->l_adresse_ligne1;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Adresse Ligne 2:</div>
			<div class="rightcol">
				<label> <input name="l_adresse_ligne2" type="text"
					id="l_adresse_ligne2"
					value="<?php  echo $addrl->l_adresse_ligne2;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Ville :</div>
			<div class="rightcol">
				<label> <input name="l_ville" type="text" id="l_ville"
					value="<?php  echo $addrl->l_ville;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Pays :</div>
			<div class="rightcol">
				<label> <input name="l_pays" type="text" id="l_pays"
					value="<?php  echo $addrl->l_pays;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Code postal :</div>
			<div class="rightcol">
				<label> <input name="l_code_postal" type="text" id="l_code_postal"
					value="<?php  echo $addrl->l_code_postal;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Téléphone Mobile :</div>
			<div class="rightcol">
				<label> <input name="l_telephone1" type="text" id="l_telephone1"
					value="<?php  echo $addrl->l_telephone1;?>" /> </label>
			</div>
		</div>

		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Téléphone de Bureau :</div>
			<div class="rightcol">
				<label> <input name="l_telephone2" type="text" id="l_telephone2"
					value="<?php  echo $addrl->l_telephone2;?>" /> </label>
			</div>
		</div>

		<div class="sndhead_form">Element Commande</div>
		<input name="id_eltfacture" type="hidden" id="id_eltfacture"
			value="<?php  echo $eltfacture->id;?>" />
		<div class="hBox">
			<div class="leftcol">ID Ebay de l'élément :</div>
			<div class="rightcol">
				<label> <input name="id_ebay_element" type="text"
					id="id_ebay_element"
					value="<?php  echo $eltfacture->id_ebay_element;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Titre :</div>
			<div class="rightcol">
				<label> <input name="titre" type="text" id="titre"
					value="<?php  echo $eltfacture->titre;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Etat :</div>
			<div class="rightcol">
				<label> <input name="etat" type="text" id="etat"
					value="<?php  echo $eltfacture->etat;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Quantité :</div>
			<div class="rightcol">
				<label> <input name="quantite" type="text" id="quantite"
					value="<?php  echo $eltfacture->quantite;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Prix :</div>
			<div class="rightcol">
				<label> <input name="prix_unitaire" type="text" id="prix_unitaire"
					value="<?php  echo $eltfacture->prix_unitaire;?>" /> </label>
			</div>
		</div>

		<div class="sndhead_form">Service Livraison</div>
		<input name="id_servicelivraison" type="hidden"
			id="id_servicelivraison" value="<?php  echo $sevlivraison->id;?>" />
		<div class="hBox">
			<div class="leftcol">Livreur :</div>
			<div class="rightcol">
				<label> <input name="nom_livreur" type="text" id="nom_livreur"
					value="<?php  echo $sevlivraison->nom_livreur;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Montant Livraison :</div>
			<div class="rightcol">
				<label> <input name="montant_livraison" type="text"
					id="montant_livraison"
					value="<?php  echo $sevlivraison->montant_livraison;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Devise :</div>
			<div class="rightcol">
				<label> <input name="devise" type="text" id="devise"
					value="<?php  echo $sevlivraison->devise;?>" /> </label>
			</div>
		</div>
		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>

		<div class="hBox">
			<div class="leftcol">Date Livraison :</div>
			<div class="rightcol">
				<label> <input name="date_livraison" type="text" id="date_livraison"
					value="<?php  echo $sevlivraison->date_livraison;?>" /> </label>
			</div>
		</div>



		<div class="hBox">
			<div class="barrevert">&nbsp;</div>
		</div>


		<div class="hBox">
			<div class="leftcol">&nbsp;</div>
			<div class="rightcol">
				<label> <input name="envoyer" type="submit" class="bouton"
					id="envoyer" value="..:: Entrer ::.." /> </label>
			</div>
		</div>

		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>

	</div>
</form>
				<?php
	}

	public function SendEditFacture(){


		$factur = new Facture();
		$factur->copyFromPost();
		$factur->setID($_POST['id_facture']);//echo $factur->id.'A';
		$this->er = array_merge($this->er,$factur->validateControler(true));//print_r($factur->getFields());
		//echo $factur->id.'G';

		$clebay = new ClientEbay();
		$clebay->copyFromPost();
		$clebay->id = $_POST['id_clientebay'];//echo $clebay->id.'B';
		$this->er = array_merge($this->er,$clebay->validateControler(true));

		$addrf = new AdresseFacturation();
		$addrf->copyFromPost();
		$addrf->id = $_POST['id_addrfacturation'];//echo $addrf->id.'C';
		$this->er = array_merge($this->er,$addrf->validateControler(true));

		$addrl = new AdresseLivraison();
		$addrl->copyFromPost();
		$addrl->id = $_POST['id_addrlivraison'];//echo $addrl->id.'D';
		$this->er = array_merge($this->er,$addrl->validateControler(true));

		$eltfacture = new ElementsFacture();
		$eltfacture->copyFromPost();
		$eltfacture->id = $_POST['id_eltfacture'];//echo $eltfacture->id.'E';
		$this->er = array_merge($this->er,$eltfacture->validateControler(true));

		$sevlivraison = new ServiceLivraison();
		$sevlivraison->copyFromPost();
		$sevlivraison->id = $_POST['id_servicelivraison'];//echo $sevlivraison->id.'F';
		$this->er = array_merge($this->er,$sevlivraison->validateControler(true));


		$nb = count($this->er);

		if($nb==0){

			$factur->update();
			$clebay->update();
			$addrf->update();
			$addrl->update();
			$eltfacture->update();
			$sevlivraison->update();

		}else $this->FormEditFacture();

		$this->FormEditFacture();
	}



}
?>